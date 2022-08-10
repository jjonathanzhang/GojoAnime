<?php
    // $conn = mysqli_connect("localhost", "root", "", "gojoanime");
        
    // if($conn === false){
    //     die("ERROR: Could not connect. "
    //         . mysqli_connect_error());
    // }
    // if (isset($_POST['submit'])){ 
    //     $name =  $_POST['name'];
    //     $username = $_POST['username'];
    //     $email =  $_POST['email'];
    //     $phone = $_POST['phone'];
    //     $password = $_POST['password'];
    //     $gender = $_POST['gender'];
        
    //     $sql = "INSERT INTO gojoanimelogin  VALUES ('$username', '$password')";
    //     $sql2 = "INSERT INTO customerinfo  VALUES ('$name','$phone','$email','$gender')";
        
    //     if(mysqli_query($conn, $sql)){
    //         echo "<h3>data stored in a database successfully.</h3>";

    //         echo nl2br("\n$name\n $username\n "
    //             . "$email\n $phone\n $password");
    //     } else{
    //         echo "ERROR: Hush! Sorry $sql. "
    //             . mysqli_error($conn);
    //     }
        
    //     if(mysqli_query($conn, $sql2)){
    //         echo "<h3>data stored in a database successfully</h3>";

    //         echo nl2br("\n$name\n $username\n "
    //             . "$email\n $phone\n $password");
    //     } else{
    //         echo "ERROR: Hush! Sorry $sql. "
    //             . mysqli_error($conn);
    //     }
    // }
    // mysqli_close($conn);
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
         $id = $results['iduserlogin'] + 1;
         }
     }
 echo "test";
     if ($correctUsername == 0) {
       // Wrong username
       echo "user Exist";
     } else if ($correctUsername == 1) {
       // Wrong Password
       $sqlinsert = "INSERT INTO gojoanimelogin  VALUES ($id,'$username', '$password')";
       mysqli_query($mysqli,$sqlinsert);
       header ("location: index.php");
       exit();
     }
?>