<?php
session_start();

$uname = $_SESSION["username"];
$pw = $_SESSION["password"];

$file = fopen("reviews.txt", "a+");
$data = "$uname : " . $_POST["review"] . " || ";

if (fwrite($file, $data)) {
    fclose($file);
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Thanks for Your Review</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="outer">
        <div class="border rounded p-5 bg-white shadow-sm" style="max-width: 400px;">
            <h2 class="intro-text text-center">Thanks for Your Review 😊</h2>
            <p class="text-center">Thanks for your review! We truly value your feedback and appreciate your time. We look forward to welcoming you back soon for another wonderful experience. Visit again and enjoy the exceptional offerings at our establishment!</p>
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
} else {
    echo "Review not submitted";
}
?>
