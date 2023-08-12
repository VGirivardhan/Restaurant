<?php   

session_start();

$uname=$_SESSION["username"];
$pw=$_SESSION["password"];

$target_dir = "C:/xampp/htdocs/Files/Restaurant/images/Uploaded_Images/";
$fileName = $_FILES['image']['name'];
$target_file = $target_dir . $fileName;
$tmpName = $_FILES['image']['tmp_name'];
$uploadto = true;
$imageType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if(file_exists($target_file))
{
    echo "Sorry, the image already exists.<br/>";
    $uploadto = false;
}

$allowedExtensions = array("png", "jpg", "jpeg", "gif");
if(!in_array($imageType, $allowedExtensions))
{
    echo "Sorry, only PNG, JPG, JPEG, and GIF files are allowed.";
    $uploadto = false;
}

if($uploadto)
{
    if(move_uploaded_file($tmpName, $target_file))
    {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Image Upload</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
            <link rel="stylesheet" href="css/style.css">
        </head>
        <body class="outer">
            <div class="border rounded p-5 bg-white shadow-sm" style="max-width: 400px;">
                <h2 class="intro-text text-center">Your image was uploaded successfully</h2>
                <p class="text-center">Thanks for uploading 😊.</p>
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
        echo "Sorry, there was an error uploading your image. Please try again.<br/>";
    }
}
else
{
    echo "Sorry, your image was not uploaded.<br/>";
}
?>
