<?php //test1.php
// $username = "Fred Smith";
// echo $username;
// echo "<br>";
// $current_user = $username;
// echo $current_user;

//Numeric Variables
// $count = 17.5;
// echo $count;

//Array variables (1-dimensional)

$team = array('Bill', 'Mary', 'Mike', 'Chris', 'Anne');
echo $team[3];
//Array variables (2-dimensional)
$oxo = array(array('x','','o'),
            array('o','o','x'),
            array('x','o',''));
echo $oxo[1][2];

//4 rules to variables
    //Variable names must start with a letter of the alphabet or the _ (underscore) character. 
    //Variable names can contain only the characters a-z, A-Z, 0-9, and _ (underscore). 
    //Variable names may not contain spaces. If a variable must comprise more than one word, it should be separated with the _ (underscore) character (e.g., $user_name). 
    //Variable names are case-sensitive. The variable $High_Score is not the same as the variable $high_score.


?>