<?php

include 'db.php';
session_start();
$unique_id = $_SESSION['unique_id'];
    if(empty($unique_id)){
    header("Location: ../index.php");
    }

    if(isset($_POST['firstName']) 
    && isset($_POST['lastName']) 
    && isset($_POST['email']) 
    && isset($_POST['phone'])
    && isset($_POST['password'])
    && isset($_POST['confirmPassword'])
    && isset($_POST['address']) ){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = md5($_POST['password']);
        $confirmPassword = md5($_POST['confirmPassword']);
        $address = $_POST['address'];

            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");

                $qry = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$unique_id}'");
                if(mysqli_num_rows($qry) > 0){
                    $row = mysqli_fetch_assoc($qry);
                    if($row){
                        $oldEmail = $row['email'];
                        $oldImage = $row['image'];
                    }
                }
                if($password == $confirmPassword){
                if(($email == $oldEmail && mysqli_num_rows($sql) == 1) || mysqli_num_rows($sql) == 0){
                            $img_name = $_FILES['avatar']['name'];
                            $img_typ = $_FILES['avatar']['type'];
                            $tmp_name = $_FILES['avatar']['tmp_name'];
                            $img_explode = explode('.',$img_name);
                            $img_extension = end($img_explode);
                            $extensions = ['png','jpeg','jpg'];
                            if(in_array($img_extension,$extensions) == true){ 
                                $time = time();
                                $newimagename = $time.$img_name;
                                if(move_uploaded_file($tmp_name, "../Images/".$newimagename)){
                                    $sql = mysqli_query($conn, "UPDATE users SET firstName = '{$firstName}',lastName = '{$lastName}',email = '{$email}',
                                    phone = '{$phone}',password = '{$password}',address = '{$address}',image = '{$newimagename}' WHERE unique_id = '{$unique_id}'");
                                    echo "Success";
                                }
                               
                            }
                            else{
                                $sql = mysqli_query($conn, "UPDATE users SET firstName = '{$firstName}',lastName = '{$lastName}',email = '{$email}',
                                phone = '{$phone}',password = '{$password}',address = '{$address}',image = '{$oldImage}' WHERE unique_id = '{$unique_id}'");
                                echo "Success";
                            }
                        }
                        else{
                            echo "$email ~ Already Exists";
                        }
                }
            else{
            echo "Confirm Password Don't Match";
            }
            }
        else{
            echo "$email ~ This is not a Valid Email";
        }
        }
    else{
        echo "All Input Fields are Required";
    }

?>