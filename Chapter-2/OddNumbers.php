<!DOCTYPE HTML public "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Odd Numbers</title>
<meta http-equiv="content-type" content="text/html"; charset="iso-8859-1" />
</head>
<body>
   <?php 
       echo "<h3>Odd Numbers 1-99</h3>";
       for ($OddNumber = 0; $OddNumber <= 49; ++$OddNumber) {
       echo '<p>'.($OddNumber * 2 + 1).'</p><br />';
         }
   ?>
</body>
</html>
