<?php 

include "connect.php";

    if (isset($_POST['update'])) {

        $user_id = $_POST['user_id'];

        $firstname = $_POST['firstname'];
        
        $lastname = $_POST['lastname'];

        $email = $_POST['email'];

        $phone = $_POST['phone'];

        $sql = "UPDATE `details` SET `firstname`='$firstname',`lastname`='$lastname',`phone`='$phone',`email`='$email' WHERE `id`='$user_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `details` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $firstName = $row['firstname'];

            $lastName = $row['lastname'];

            $email = $row['email'];

            $phone  = $row['phone'];


            $id = $row['id'];

        } 
    ?>