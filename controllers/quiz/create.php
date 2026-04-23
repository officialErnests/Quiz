<?php
if (!isset($_SESSION["user_id"]) || $_SESSION["role"] != "admin") {

    redirectIfNotAuthorized();
}

// Source - https://stackoverflow.com/a/2680198
// Posted by goat, modified by community. See post 'Timeline' for change history
// Retrieved 2026-04-23, License - CC BY-SA 4.0
$Quez_name = "";
$Questions = [];
//TODO add validation
//TODO add limits to 100 for frontend
//TODO add strips
//TODO add so it checks if not empty
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // dd($_POST);
    $Quez_name = $_POST["header"];
    for ($i=0; $i < 100; $i++) { 
        $t_name = "Question-" . $i;
        // dd($_POST);
        if (isset($_POST[$t_name])) {
            if (isset($_POST['Delete-'.$i])) {
                continue;
            }
            $t_arr = [];
            $t_arr_correct = [];
            for ($n=0; $n < 100; $n++) { 
                $t_check = "Q-".$i."-Answer-".$n;
                if (isset($_POST[$t_check])) {
                    if (isset($_POST["Q-".$i.'-Delete-'.$n])) {
                        continue;
                    }
                    array_push(
                        $t_arr,
                        $_POST[$t_check]
                    );
                    array_push(
                        $t_arr_correct, isset($_POST["Q-".$i.'-Correct-'.$n])
                    );
                } else {
                    break;
                }
            }
            if (isset($_POST['Create-'.$i])) {
                array_push($t_arr,"Type your question :))");
                array_push($t_arr_correct,false);
            }
            array_push($Questions,
            [
                "Question" => $_POST[$t_name],
                "Correct" => $t_arr_correct,
                "Answers" => $t_arr
            ]);
        } else {
            break;
        }
    }
    if (isset($_POST['add'])) {
        array_push($Questions,
        [
            "Question" => "New question!" ,
            "Correct" => [
                true
            ],
            "Answers" => [
                "Type your question :))"
            ]
        ]);
    } elseif (isset($_POST['submit'])) {
        $sql_query = "INSERT INTO quizes (name, creator) VALUES (:name, :creator_id)";
        $params = [
            "name" => $Quez_name, 
            "creator_id" => $_SESSION["user_id"]
        ];
        // $post = $db->query($sql_query, $params);
        var_dump([$sql_query, $params]);
        // $quiz_id = $db->lastInsertId();
        $quiz_id = 0;
        $q_sql_query = "INSERT INTO questions (quiz_id, index, question) VALUES ";
        $q_params = [
            "quiz_id" => $quiz_id
        ];
        $a_sql_query = "INSERT INTO answers (question_id, correct, answer) VALUES ";
        $a_params = [];
        $first = true;
        foreach ($Questions as $question_index => $question) {
            if ($first) {
                $first = false;
            } else {
                $q_sql_query .= ", ";
            }
            $q_sql_query .= "(:quiz_id, :index_".$question_index.", :question_".$question_index.")";
            $q_params["index_".$question_index] = $question_index;
            $q_params["question_".$question_index] = $question["Question"];
            $a_params["question_id_".$question_index] = $question_index;
            foreach ($question["Answers"] as $a_key => $answers) {
                $a_sql_query .= "(:question_id_".$question_index.", :Q_".$question_index."_correct_".$question_index.", :Q_".$question_index."_answer_".$question_index.")";
                $q_params["index_".$question_index] = $question_index;
                $q_params["question_".$question_index] = $question["Question"];
            }
        }
        var_dump([$q_sql_query, $q_params]);
        // $post = $db->query($sql_query, $params);
        // $quiz_id = $db->lastInsertId();
        // header("Location: /");
        // exit();
    }
}

require "./views/quiz/create.view.php";