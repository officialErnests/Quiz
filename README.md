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
    1. Who is this? (charachter from game)   
    2. Which game is most popular in 2026?  (1.GTA 5 X; 2.World of Warcraft X; 3.Pokemon Pokopia V; 4.Leauge of Legends X)
    3. Which game needs a lot of hard-drive memory? (1.Mario Super Bros X; 2.Minecraft X; 3.GTA 6 X; 4.ARK survival V)
    4. What game category is the most popular? (1.Action V; 2.Horror X; 3.RPG X; 4.MMO X;)
    5. What is full name of: PVE, MMO and RPG? (1.Player vs Enviroment, massively multiplayer online, role-playing V; 2. I dont know X; 3. Player vs entities, Massive Morph Orphan, Rookie Playground X; 4. I'm not playing a video games) 
    6. Who is the most popular charachter in video games? (1. Steve X; 2. Milky X; 3. Mario V; 4.Trevor X;)
    7. What is the difference between indie and AAA games? (1.Graphics Only X; 2. Indie-low budget AAA-high budget games V; 3. Only story 4. I dont know)
    8. What is the oldest video game ever made? (1. Donkey Kong X; 2. Tetris X; 3. Tennis for Two V; 4. Pac-Man X)
    9. Which video game has the best storyline? (1. The Last of Us V; 2. GTA 5 X; 3. RDR 2 X; 4. ULTRAKILL X)
    10. Which game has the largest open world map?
    11. What is the most expensive video game ever developed?
    12. Which is the popular survival-horror game?
    13. What is the difference between PVP and PVE games?
    14. Which is most popular RPG game in world?
    15. What type of genre is Diablo III? 


Movies:
    1. How much movies have an Oscar reward?
    2. Which is the most popular movie on christmas?
    3. What year was the original Star Wars movie released?
    4. Which is the most popular horror movie?
    5. Which is the most popular movie star in 2026?
    6. Which genre is the The Lord of the kings?
    7. Who is the most popular actor in 2026?
    8. Who played a Kevin in Home Alone?
    9. In The Matrix, does Neo take the blue pill or the red pill?
    10.Which role for Jonny Depp is most popular?
    11.In which movie is charachter named Walter White?
    12. What is the most recognizable phrase from The Lord of the Rings?
    13 Who is main villain in Harry Potter?
    14. Who have the most powerful weapon in Star Wars?
    15. Who played a Dumbledore in Harry Potter?

Nature:
    1. What is the rarest material in the world?
    2. What is the deppest place on Earth?
    3. How much people live on Earth?
    4. Which animal is the largest in the world?
    5. What is the name of the place where an earthquake occurs?
    6. What is the smallest animal?
    7. What is the deadliest creature in the world?
    8. Which is the smallest fish?
    9. Which sea creatures can live forever?
    10. Which shark is the biggest? 
    11. What material is the radioactive?
    12. What is the rarest color in nature?
    13. Which fish is the most poisonous?
    14. What materisl is used in wires and cables?
    15. 

IT:
    1. What is the most popular OS for PC?
    2. What programming language is most used?
    3. What is the oldest programming language?
    4. When was first computer created?
    5. What is the difference between SQL and NoSQL?
    6. Who was cretaed a first code?
    7. When was first computer created?
    8. What does HTTP stand for?
    9. Which protocol ensures secure data transmission?
    10. What type of system the PC is using?
    11. Which hotkey combination is used to open an task manager?
    12. What is most necessary part of the PC?
    13. What is IP?
    14. What does DNS do when you open a website?
    15. What is the difference between HTTP and HTTPS?