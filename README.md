# Todo's
## Arns:
Plans:
- design for 1.1
- design for 1.2
- design for 1.3
- design for 2.1
- design for 2.2
- design for 2.3
- design for header
- design for nabar
- design for footer
Doing:
Done:
## Noob:
Plans:
- db setup
- user auth
- quiz setup
Doing:
- project general layout and all views
Done:
- Planing

Notes:
<?php
    if (isset($_SESSION["user_id"])) {
        echo $_SESSION["username"] . "<br>";
        echo $_SESSION["role"] . "<br>";
        echo $_SESSION["user_id"];
    }
?>

go trough all views and <?= ?> + echo's


# Page lists
0.
0.1 show quiz logo in all pages
0.2 back to homepage button


1. main page
1.1 not loged in
1.1.1 Show create acc
1.1.2 show login

1.2 loged in
1.2.1 show username
1.2.2 show logout
1.2.3 show quizese last quiz
-- if time
    1.2.4 show continue button to continue th

1.3 loged in admin
1.3.1 show username
1.3.2 show logout
1.3.3 show quizes
-- if time
    1.3.4 create quizes
    1.3.5 manage users


2. quiz
2.1 quiz view
2.1.1 back button
2.1.2 quiz header
--if time
    2.1.3 picture of quiz
2.1.4 start quiz button
2.1.5 your previous results
2.1.6 global lederbourd // where your user name is sticky at bottom and higlighted (only top 10)

2.2 quiz do
2.2.1 progres bar
2.2.2 quiz options (randomize quiz buttons)
2.2.3 submit button
2.2.4 answer if it was correct

2.3 quiz finnish
2.3.1 show the quiz name
2.3.2 show the taken time
2.3.3 show personal leaderboard w cureent result
2.3.4 show global leaderboard w curent result
2.3.5 back to quiz button
2.3.6 retry quiz button


# quizes

1. Categories: games, movies, nature, architecture(from different countries like: Eiffel Tower etc.), IT
1.1 questions: From what (category) is this? Who/ what is on this photo?  etc.
1.2 4 answer buttons(only 1 is right)
1.3 timer for each quiz
1.4 progress section
1.5 if user answers incorrect it dont count that question

# Questions 
Games: 
    1. Who is this? (charachter from game )
    2. Which game is most popular in 2026?
    3. Which game needs a lot of hard-drive memory?
    4. What game category is the most popular?
    5. What is full name of: PVE, MMO and RPG?
    6. Who is the most popular charachter in video games?
    7. What is the difference between indie and AAA games?
    8. What is the oldest video game ever made?
    9. Which video game has the best storyline?
    10. Which game has the largest open world map?
    11. What is the most expensive video game ever developed?
    12. Which is the popular survival-horror game?
    13. What is the difference between indie games and AAA games?
    14. Which is most popular RPG game in world?
    15. What type of genre is Diablo III? 


Movies:
    1. How much movies have an Oscar reward?
    2. Which is the most popular movie on christmas?
    3. What year was the original Star Wars movie released?
    4. Which is the most popular horror movie?
    5. 