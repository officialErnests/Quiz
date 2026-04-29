<?php
if (!isset($_SESSION["user_id"]) || $_SESSION["role"] != "admin") {

    redirectIfNotAuthorized();
}
$Quez_name = "";
$Quez_description = "";
$Questions = [];
//TODO add validation
//TODO add limits to 100 for frontend
//TODO add strips
//TODO add so it checks if not empty
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Quez_name = $_POST["header"];
    $Quez_description = $_POST["description"];
    for ($i=0; $i < 100; $i++) { 
        $t_name = "Question-" . $i;
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
                array_push($t_arr,"");
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
                ""
            ]
        ]);
    } elseif (isset($_POST['submit'])) {
        $sql_query = "INSERT INTO quizes (name, creator_id, description) VALUES (:name, :creator_id, :description)";
        $params = [
            "name" => $Quez_name, 
            "creator_id" => $_SESSION["user_id"],
            "description" => $_POST["description"]
        ];
        $post = $db->query($sql_query, $params);
        $quiz_id = $db->lastInsertId();
        $a_sql_query = "INSERT INTO answers (question_id, correct, answer) VALUES";
        $a_params = [];
        $first_2 = true;
        foreach ($Questions as $question_index => $question) {
            $q_sql_query = "INSERT INTO questions (quiz_id, `index`, question) VALUES (:quiz_id, :index, :question)";
            $q_params = [
                "quiz_id" => $quiz_id
            ];
            $q_params["index"] = $question_index;
            $q_params["question"] = $question["Question"];
            $post2 = $db->query($q_sql_query, $q_params);
            $question_id = $db->lastInsertId();
            // dd([$q_sql_query, $q_params]);
            $a_params["question_id_".$question_id] = $question_index;
            foreach ($question["Answers"] as $a_key => $answers) {
                if ($first_2) {
                    $first_2 = false;
                } else {
                    $a_sql_query .= ", ";
                }
                $a_sql_query .= "(:question_id_".$question_id.", :Q_".$question_id."_correct_".$a_key.", :Q_".$question_id."_answer_".$a_key.")";
                $a_params["Q_".$question_id."_correct_".$a_key] = $question["Correct"][$a_key] ? 1 : 0;
                $a_params["Q_".$question_id."_answer_".$a_key] = $answers;
            }
        }
        // dd([$a_params, $a_sql_query]);
        $post3 = $db->query($a_sql_query, $a_params);
        header("Location: /");
        exit();
    }
}

require "./views/quiz/create.view.php";