<?php
    $link = mysqli_connect("localhost", "root", "", "daycare");
 
    // Check connection
    if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
    }
 
    // Escape user inputs for security
    $name = mysqli_real_escape_string($link, $_REQUEST['name']);
    $email = mysqli_real_escape_string($link, $_REQUEST['email']);
    $message = mysqli_real_escape_string($link, $_REQUEST['message']);
 
    // Attempt insert query execution
    $sql = "INSERT INTO contactus (name, email, message) VALUES ('$name', '$email', '$message')";
    if(mysqli_query($link, $sql)){
        echo "<script>alert('Records added successfully.')</script>";
    } else{
        echo "<script>alert('ERROR: Could not able to execute $sql.'. mysqli_error($lERROR:ink))</script>";
    }
    header( 'Location: index-users.php');
    // Close connection
    mysqli_close($link);
    ?>
