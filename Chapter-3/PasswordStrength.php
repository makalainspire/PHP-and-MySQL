<!DOCTYPE HTML public "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Password Strength</title>
<meta http-equiv="content-type" content="text/html"; charset="iso-8859-1" />
</head>
<body>
    <h1>Password Strength</h1><hr />
   <?php 
     $Passwords = array("123456789", "123Charilla!", "*PARADISE*", "Rockstar1!", "!", "123456MAKALA!!!!!!!!!!!!",
                        "pASSWORD", "ISeeYou420!", "IamHome123$", "SpaceCatz1");
          
                     
        
          foreach ($Passwords as $Password) { 
            
          if (preg_match("/(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@*!$])[0-9A-Za-z@!*$]{8,15}/", $Password)== FALSE) 
            echo "$Password is NOT strong enough</p>\n";
          else
            echo "$Password is strong enough</p>\n";
      }
     
   ?>
</body>
</html>
