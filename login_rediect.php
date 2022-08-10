<?php
 //Written By: Jason Fong 
 include ("connect.php");
  

   //$sql->mysqli_query($conn, "SELECT * FROM gojoanimelogin");
   $runSQL = "SELECT * FROM gojoanimelogin";
   $result_set = mysqli_query($mysqli,$runSQL);

   //$num = mysqli_num_rows($sql);
   $id = 0;
   $correctPassword = 1;
   $correctUsername = 1;

   while ($results = mysqli_fetch_assoc($result_set)) {
        if ($results['username'] == $_POST['username']) {
        $correctUsername = 0;
        if ($results['loginpasswd'] == $_POST['password'] ) {
          $correctPassword = 0;
        }
        }
    }
echo "test";
    if ($correctUsername == 1) {
      // Wrong username
      echo "Wrong Username";
    } else if ($correctPassword == 1) {
      // Wrong Password
      echo "Wrong Password";
    } else if ($correctPassword == 0 & $correctUsername == 0) {
      // Login successful
      echo "Login successful";
      header("location: watchlist.php");
      exit();
    }
  //  if($num > 0){
  //      $row = mysqli_fetch_array($sql);
  //      header("Location:watchlist.php");
  //      exit();
  //  } else {
  //      echo '<script>';
  //      echo "alert(\"Invalid Username and Password, Please try again\");";
  //      echo '</script>';
  //  }

 
?>