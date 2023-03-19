<?php
    $name = $_POST['name'];
    if(empty($name)){
        echo "Name is required";
    }
    else{
        $email = $_POST['email'];
        if(empty($email)){
            echo "Email is required";
        }
        else{
            $seats = $_POST['seats'];
            if(empty($seats)){
                echo "Seats is required";
            }
            else{
                $Instructions = $_POST['instructions'];
                $db = mysqli_connect("localhost","root","","test_db");
                $sql = mysqli_query($db,"INSERT INTO `gp1`(`Cust_Name`, `Cust_email`, `No_of_Seats`,`Instructions`) VALUES ('$name','$email','$seats','$Instructions')");
                if($sql){
                    echo "success";
                } 
                else{
                    echo "error";
                }
            }
        }
    }

    ?>
    <!-- <?php
if(!empty($_POST["submit"])) {
	$userName = $_POST["name"];
  $userEmail = $_POST["email"];
	$seats = $_POST["seats"];
	$userMessage = $_POST["instructions"];
	$toEmail = "vizags03@gmail.com";
  
	$mailHeaders = "Name: " . $userName .
	"\r\n Email: ". $userEmail  . 
	"\r\n Seats: ". $seats  . 
	"\r\n Message: " . $userMessage . "\r\n";

    mail($toEmail,$userMessage,$mailHeaders);

}
?> -->
