<!DOCTYPE HTML public "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Is Even?</title>
<meta http-equiv="content-type" content="text/html"; charset="iso-8859-1" />
</head>
<body>
    <?php
      $var1 = 4.69;
      $var2 = 420;
      $var3 = "star";
      echo "<p><h3>Variable 1</h3>";
      $ReturnValue = ($var1 == is_numeric($var1) ? "true" : "false");
      echo "Is $var1 numeric? $ReturnValue<br />";
      $ReturnValue = ($var1 == round($var1) ? "true" : "false");
      echo "Is $var1 a whole number? $ReturnValue<br />";
      $ReturnValue = ($var1 / 2 == 2  ? "true" : "false");
      echo "Is $var1 an even number? $ReturnValue<br />";
      echo "<p><h3>Variable 2</h3>";
      $ReturnValue = ($var2 == is_numeric($var2) ? "true" : "false");
      echo "Is $var2 numeric? $ReturnValue<br />";
      $ReturnValue = ($var2 == round($var2) ? "true" : "false");
      echo "Is $var2 a whole number? $ReturnValue <br />";
      $ReturnValue = ($var2 / 2 == 210 ? "true" : "false");
      echo "Is $var2 an even number? $ReturnValue <br />";
      echo "<p><h3>Variable 3</h3>";
      $ReturnValue = ($var3 == is_numeric($var3) ? "true" : "false");
      echo "Is $var3 numeric? $ReturnValue <br />";
      $ReturnValue = ($var3 === round($var3) ? "true" : "false");
      echo "Is $var3 a whole number? $ReturnValue <br />";
      $ReturnValue = ($var3 == 2 ? "true" : "false");
      echo "Is $var3 an even number? $ReturnValue</p>";
    ?>
</body>
</html>
