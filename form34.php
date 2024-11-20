<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname =htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $date = htmlspecialchars($_POST['date']);
    $gender = htmlspecialchars($_POST['gender']);
    $country = htmlspecialchars($_POST['country']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['confirmPassword']);
    $terms =isset($_POST['terms']) ? 'Agreed' : 'Not agreed';
}

       echo " <table border='1' cellspacing='0'>
       
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Country</th>
                <th>Email</th>
                <th>Phone</th>
                <th>password</th>
                <th>Confirm Password</th>
                <th>Terms</th>
            </tr>

            <tr>
                <td> $firstname</td>
                <td> $lastname</td>
                <td>$date</td>
                <td> $gender</td>
                <td>$country</td>
                <td>$email</td>
                <td> $phone</td>
                <td> $password</td> 
                <td>$confirm_password</td> 
                <td>$terms</td>
                
        </tr>
        </table>"; 

        ?>

</body>
</html>