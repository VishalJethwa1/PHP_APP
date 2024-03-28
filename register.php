<?php

include ('connection.php');


$firstNameErr = $lastNameErr = $emailErr = $passwordErr = "";
$firstName = $lastName = $email = $password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST['firstName']))
        {
            $firstNameErr = "First Name is required";
        } else {
            $firstName = test_input($_POST['firstName']);
        }

        if (empty($_POST['lastName']))
        {
            $lastNameErr = "Last Name is required";
        } else {
            $lastName = test_input($_POST['lastName']);
        }
        
        if (empty($_POST['email']))
        {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST['email']);
        }

        if (empty($_POST['password']))
        {
            $passwordErr = "Password is required";
        } else {
            $password = test_input($_POST['password']);
        }

        if(isset($_POST['signup']))
{

    //This code copied from w3schools.

    //$firstName = $lastName = $email = $password = "";
    //$firstNameErr = $lastNameErr = $emailErr = $passwordErr = "";
    
    // $firstName = $_POST['firstName'];
    // $lastName = $_POST['lastName'];
    // $email = $_POST['email'];
    // $password = $_POST['password'];

    

    //Query to check all input data of form from database.
    $sql = "INSERT INTO `registration`(`firstname`,`lastname`,`email`,`passcode`) VALUES
    ('$firstName','$lastName','$email','$password')";

    $result = mysqli_query($connect, $sql);

    if($firstName == "" || $lastName == "" || $email == "" || $password == "")
    {
        echo "<span style='color: red;'>All data must be filled!</span>";
    } else {
        $result;
        echo "Data has been updated";
    }

}

        
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

//$signup = $_POST['submit'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="/my_app/mystyles/styles.css">
</head>
<body>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="text" placeholder="First Name" name="firstName"> <br>
        <span class="error"><?php echo $firstNameErr;?></span><br> 
        <input type="text" placeholder="Last Name" name="lastName"> <br>
        <span class="error"><?php echo $lastNameErr;?></span><br>
        <input type="email" placeholder="Email" name="email"> <br>
        <span class="error"><?php echo $emailErr;?></span><br>
        <input type="password" placeholder="Password" name="password"> <br>
        <span class="error"><?php echo $passwordErr;?></span><br>
        <input type="submit" value="Signup" name="signup">
    </form>

</body>
</html>