<?php

session_start();

$uname=$_SESSION["username"];
$pw=$_SESSION["password"];


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["items"]))
    {
        
        $items = $_POST["items"];
    }
    else
    {
        $items = [];
    }
}
else
{
    $items = [];
}
$servername = "localhost";
$username = "root";
$password = "Girirkv@139";
$dbname = "Restaurant";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// $query1="CREATE TABLE Orders (Id INT AUTO_INCREMENT PRIMARY KEY,Name VARCHAR(255),Items VARCHAR(255))";
// $result1=mysqli_query($conn,$query1);
if (!empty($items)){
$items = implode(", ", $_POST["items"]);

$query2 = "INSERT INTO Orders(Name,Items)
    VALUES ('$uname','$items')";
$result2=mysqli_query($conn,$query2);

$items = $_POST["items"];

if ($result2)
{
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>Order Placed Successfully</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="css/style.css">
        </head>
        <body class="outer">
            <div class="border rounded p-5 bg-white shadow-sm" style="max-width: 400px;">
                <h2 class="intro-text text-center">Order Placed Successfully</h2>
                <p>Your order has been successfully placed!</p>
                <h4>Here are the ordered items:</h4>
                <ol class="align-items-center">
                    <?php
                        foreach ($items as $item)
                        {
                            echo "<li>$item</li>";
                        }
                    ?>
                </ol>
                <p style="color:#F58d17;">Thank you for choosing Kings Luxury Restaurant! 😊</p>
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
        echo "Order not Placed.";
    }  
}
else{
    echo "Please Select Items.";
} 




?>


