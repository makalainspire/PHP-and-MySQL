<!DOCTYPE HTML public "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Dice!!</title>
<meta http-equiv="content-type" content="text/html"; charset="iso-8859-1" />
</head>
<body>
   <?php 
     $FaceNamesSingular = array("one", "two", "three", "four", "five", "six");
     $FaceNamesPlural = array("ones", "twos", "threes", "fours", "fives", "sixes");
     $FaceValues = array(1, 2, 3, 4, 5, 6);
     function CheckForDoubles($Die1, $Die2) {
         global $FaceNamesSingular;
         global $FaceNamesPlural;
         $ReturnValue = false;
         if ($Die1 == $Die2) { //Doubless
              echo "The roll was double ", $FaceNamesPlural[$Die1-1], ".<br />";
              $ReturnValue = true;
         }
         else { //Not Doubless
             echo "The roll was a ", $FaceNamesSingular[$Die1-1], " and a ", $FaceNamesSingular[$Die2-1], ".<br />";
             $ReturnValue = false;
         }
         return $ReturnValue;
     }
     
     function DisplayScoreText($Score, $Doubles) {
        switch ($Score) {
          case 2:
              echo "You rolled snake eyes!<br />";
              break;
          case 12:
             echo "You rolled boxcars!<br />";
             break;
          case 3:
             echo "You rolled a loose deuce!<br />";
             break;
          case 5:
             echo "You rolled a fever five!<br />";
             break;
          case 7:
             echo "You rolled a natural!<br />";
             break;
          case 9:
             echo "You rolled a nina!<br />";
             break;
          case 11:
             echo "You rolled a yo!<br />";
             break;
          default:
             if ($Score % 2 == 0) { //An even number
                 if ($Doubles) {
                     echo "You rolled a hard $Score!!<br />";
                 } else { //not doubles
                     echo "You rolled an easy $Score!!<br />";
                 }
             }
             break;
        }
     }
     
     $RollCount = 0;
     $DoublesCount = 0;
     $RollNumber = 1;
     $ScoreCount = array();
     for ($PossibleRolls = 2; $PossibleRolls <= 12; ++$PossibleRolls) {
         $ScoreCount[$PossibleRolls] = 0;
     }
     
             
         }
     }
     foreach ($FaceValues as $Die1) {
         foreach ($FaceValues as $Die2){
         ++$RollCount;
         $Score = $Die1 + $Die2;
         ++$ScoreCount[$Score];
         echo "<p>";
         echo "The total score of the roll $RollCount was $Score.<br />";
         $Doubles = CheckForDoubles($Die1,$Die2);
         DisplayScoreText($Score, $Doubles);
         echo "</p>";
         if ($Doubles)
          ++$DoublesCount;
     }
     }
 echo "<p>Doubles occoured on $DoublesCount of the $RollCount rolls.</p>";
 foreach ($ScoreCount as $ScoreValue => $ScoreCount) {
     echo "<p>A combined value of $ScoreValue occurred $ScoreCount of $RollCount times.</p>";
 }
   ?>
</body>
</html>
