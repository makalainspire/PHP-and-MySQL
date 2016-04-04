<!DOCTYPE HTML public "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Days Array</title>
<meta http-equiv="content-type" content="text/html"; charset="iso-8859-1" />
</head>
<body>
    <h1>Days Array</h1>
      <?php
        $Days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
        
        echo "<p><h3>The days of the week in English are:</h3>";
        echo "$Days[0]<br />";
        echo "$Days[1]<br />";
        echo "$Days[2]<br />";
        echo "$Days[3]<br />";
        echo "$Days[4]<br />";
        echo "$Days[5]<br />";
        echo "$Days[6]</p>";
        
        echo "<p><h3>The days of the week in French are:</h3>";
        echo "$Days[7]<br />";
        echo "$Days[8]<br />";
        echo "$Days[9]<br />";
        echo "$Days[10]<br />";
        echo "$Days[11]<br />";
        echo "$Days[12]<br />";
        echo "$Days[13]</p>";
      ?>
</body>
</html>
