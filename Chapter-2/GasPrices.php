<!DOCTYPE HTML public "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gas Prices</title>
<meta http-equiv="content-type" content="text/html"; charset="iso-8859-1" />
</head>
<body>
   <?php 
       $GasPrice = 2.57;
       if($GasPrice >= 2 && $GasPrice <=3) {
           echo "<p>Gas prices are between $2.00 and $3.00.</p>";
        } else {
            echo "<p>Gas prices are not between $2.00 and $3.00</p>";
        }
   ?>
</body>
</html>
