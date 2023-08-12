<?php

session_start();

$uname=$_SESSION["username"];
$pw=$_SESSION["password"];

$servername = "localhost";
$username = "root";
$password = "Girirkv@139";
$dbname = "Restaurant";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] === "POST")
{
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $message = $_POST["msg"];

    // $query1="CREATE TABLE reservations(ID INT AUTO_INCREMENT PRIMARY KEY,Name VARCHAR(255),Mobile VARCHAR(15),Date DATE,Time TIME,Message TEXT);";
    // $result1=mysqli_query($conn,$query1);

    $query2 = "INSERT INTO reservations (Name,Mobile, Date, Time, Message)
    VALUES ('$name', '$mobile', '$date', '$time', '$message')";
    $result2 = mysqli_query($conn, $query2);
    if ($result2)
    {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Booking Done - Kings Luxury</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="css/style.css">
        </head>
        <body class="outer">
            <div class="border rounded p-5 bg-white shadow-sm" style="max-width: 400px;">
                <h2 class="intro-text text-center">Booking Confirmed 😊</h2>
                <p class="text-center">Thank you for booking with Kings Luxury Restaurant. Your reservation has been confirmed.</p>
                <div class="text-center mt-3">
                    <form action="main.php" method="post">
                        <?php
                            echo "<input type='hidden' name='username' value='$uname'>";
                            echo "<input type='hidden' name='password' value='$pw'>";
                        ?>
                        <button class="btn btn-outline-warning" type="submit">Back to Home</button>
                    </form>
                </div>
            </div>
        </body>
        </html>
        <?php
    }
    else
    {
        echo "Booking not confirmed";
    }   
}
?>
