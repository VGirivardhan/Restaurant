<?php
$username=$_POST["username"];
$password=$_POST["password"];

session_start();
$_SESSION["username"]=$username;
$_SESSION["password"]=$password;

$uname=$_SESSION["username"];
$pw=$_SESSION["password"];

?>



<!doctype html>
<html>

<head>
    <title>Kings Luxury</title>
    <link rel="icon" type="image/x-icon" href="images/crown.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">

    <script>
        function validate() {
            const mobile = document.getElementById("mobile");
            const errormobile = document.getElementById("errormobile");

            const pattern = /^\d{10}$/;
            
            let check1=pattern.test(mobile.value);
            if (check1!= true)
            {
                errormobile.innerText="⚠️ Enter 10 Digit Valid Mobile Number."
                return false;
            }
            else
            {
                errormobile.innerText="";
            }
            return true;
        }
    </script>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">
    
    <nav class="navbar navbar-expand-lg py-1 sticky-top bg-white shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#home">
                <h2 class="logo">Kings Luxury Restaurant</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reservation">Reservation</a>
                    </li>
                </ul>

                <div class="d-flex align-items-center">
                    <img style="width: 50px; height: 50px;" src="images/profile.jpg" alt="Profile Image">
                    <a href="#home">
                        <h4 class="mb-0 mx-2">
                            <?php echo $uname; ?>
                        </h4>
                    </a>
                    <a href="#menu" class="btn btn-brand">Order Online</a>
                    <a href="logout.php" class="btn btn-brand mx-1">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div id="home" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <div data-bs-target="#home" data-bs-slide-to="0" class="active"></div>
            <div data-bs-target="#home" data-bs-slide-to="1"></div>
            <div data-bs-target="#home" data-bs-slide-to="2"></div>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item vh-100  active">
            <img class="d-block w-100 h-100" src="images/cover1.jpg" alt="First slide">
            <div class="carousel-caption">
                <h5 class="text-white">-- WELCOME TO KINGS LUXURY --</h5>
                <h1 class="text-white">Where Taste Meets Royalty</h1>
            </div>
        </div>
        <div class="carousel-item vh-100 align-items-center justify-content-center">
            <img class="d-block w-100 h-100" src="images/cover2.jpg" alt="Second slide">
            <div class="carousel-caption">
                <h5 class="text-white">-- WELCOME TO KINGS LUXURY --</h5>
                <h1 class="text-white">Savor Royalty on Every Plate at Kings Luxury Restaurant</h1>
            </div>
        </div>
        <div class="carousel-item vh-100 align-items-center justify-content-center">
            <img class="d-block w-100 h-100" src="images/cover3.jpg" alt="Third slide">
            <div class="carousel-caption">
                <h5 class="text-white">-- WELCOME TO KINGS LUXURY --</h5>
                <h1 class="text-white">Culinary Majesty Unleashed</h1>
            </div>
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#home" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#home" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    
    <div id="about" class="container mb-5">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                    <img src="images/about1.jpg" alt="About">
                </div>
                <div class="col-lg-5 ms-auto">
                    <h1>About us</h1>
                    <p>Welcome to Kings Luxury Restaurant, where culinary excellence meets regal indulgence. Nestled in the heart of sophistication, our restaurant invites you to embark on a gastronomic journey fit for royalty.</p>

                    <p>At Kings Luxury, every dish is a masterpiece, meticulously crafted by our world-class chefs who blend passion, creativity, and the finest ingredients to create a symphony of flavors that dance on your palate. From the first bite to the last, you'll experience a harmonious fusion of culinary traditions and modern innovation, elevating your dining experience to unprecedented heights.</p>
                        
                    <p>Our opulent ambiance transports you to a realm of elegance and refinement, where each detail is meticulously designed to mirror the grandeur of royal courts. From the sumptuous décor to the attentive service, every moment at Kings Luxury Restaurant is a testament to our commitment to providing you with an unforgettable dining experience.</p>
                        
                    <p>Whether you're celebrating a special occasion, seeking a romantic dinner for two, or simply looking to indulge your senses, Kings Luxury is your destination of choice. Our extensive menu offers a delightful array of exquisite dishes, carefully curated to cater to a variety of palates and preferences. Every meal is an ode to culinary artistry, showcasing our dedication to delivering perfection to your table.</p>
                        
                    <p>Join us at Kings Luxury Restaurant, where every meal is a celebration of flavors, a tribute to elegance, and an invitation to savor the extraordinary. Experience dining fit for royalty, and let us spoil you with an unforgettable journey through the realm of taste and luxury.</p>
                </div>
            </div>
    </div>

    
    <form action="orders.php" method="post">
    <div id="menu" class="bg-light px-2 text-dark">
        <div class="container">
            <div class="row">
                <div class="col-12  intro-text">
                    <h1>Explore Our Menu & Select Items</h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 my-4 intro-text">
                    <h2 style="color:#F58d17">Veg Items</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class=" row row-cols-lg-4 row-cols-md-2 row-cols-sm-1 gy-4">
                <div class="bg-white">
                    <img src="images/item_1.jpg" alt="">
                    <div class="p-4 form-check">
                        <input type="checkbox" class="form-check-input" id="item_1" name="items[]" value="Veg Noodles">
                        <label for="item_1" class="form-check-label">
                            <h5 class="mb-2"><a href="#">Veg Noodles</a></h5>
                        </label>
                        <p class="small">₹ 99</p>
                    </div>
                </div>

                <div class="bg-white">
                    <img src="images/item_12.jpg" alt="">
                    <div class="p-4 form-check">
                        <input type="checkbox" class="form-check-input" id="item_12" name="items[]" value="French Fries">
                        <label for="item_12" class="form-check-label">
                            <h5 class="mb-2"><a href="#">French Fries</a></h5>
                        </label>
                        <p class="small">₹ 149</p>
                    </div>
                </div>

                <div class="bg-white">
                    <img src="images/item_11.jpg" alt="">
                    <div class="p-4 form-check">
                        <input type="checkbox" class="form-check-input" id="item_11" name="items[]" value="Potato Chips">
                        <label for="item_11" class="form-check-label">
                            <h5 class="mb-2"><a href="#">Potato Chips</a></h5>
                        </label>
                        <p class="small">₹ 149</p>
                    </div>
                </div>

                <div class="bg-white">
                    <img src="images/item_3.jpg" alt="">
                    <div class="p-4 form-check">
                        <input type="checkbox" class="form-check-input" id="item_3" name="items[]" value="Pasta">
                        <label for="item_3" class="form-check-label">
                            <h5 class="mb-2"><a href="#">Pasta</a></h5>
                        </label>
                        <p class="small">₹ 199</p>
                    </div>
                </div>

                <div class="bg-white">
                    <img src="images/item_9.jpg" alt="">
                    <div class="p-4 form-check">
                        <input type="checkbox" class="form-check-input" id="item_9" name="items[]" value="Veg Salad">
                        <label for="item_9" class="form-check-label">
                            <h5 class="mb-2"><a href="#">Veg Salad</a></h5>
                        </label>
                        <p class="small">₹ 299</p>
                    </div>
                </div>

                <div class="bg-white">
                    <img src="images/item_6.jpg" alt="">
                    <div class="p-4 form-check">
                        <input type="checkbox" class="form-check-input" id="item_6" name="items[]" value="Momos">
                        <label for="item_6" class="form-check-label">
                            <h5 class="mb-2"><a href="#"></a>Momos</h5>
                        </label>
                        <p class="small">₹ 299</p>
                    </div>
                </div>
                            
                <div class="bg-white">
                    <img src="images/item_14.jpg" alt="">
                    <div class="p-4 form-check">
                        <input type="checkbox" class="form-check-input" id="item_14" name="items[]" value="Veg Burger">
                        <label for="item_14" class="form-check-label">
                            <h5 class="mb-2"><a href="#">Veg Burger</a></h5>
                        </label>
                        <p class="small">₹ 299</p>
                    </div>
                </div>

                <div class="bg-white">
                    <img src="images/item_19.jpg" alt="">
                    <div class="p-4 form-check">
                        <input type="checkbox" class="form-check-input" id="item_19" name="items[]" value="Paneer Butter Masala">
                        <label for="item_19" class="form-check-label">
                            <h5 class="mb-2"><a href="#">Paneer Butter Masala</a></h5>
                        </label>
                        <p class="small">₹ 299</p>
                    </div>
                </div>
            </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 my-4 intro-text">
                            <h2 style="color:#F58d17">Non-Veg Items</h2>
                        </div>
                    </div>
                </div>

            <div class=" row row-cols-lg-4 row-cols-md-2 row-cols-sm-1 gy-4">
                <div class="bg-white">
                    <img src="images/item_4.jpg" alt="">
                    <div class="p-4 form-check">
                        <input type="checkbox" class="form-check-input" id="item_4" name="items[]" value="Grilled Chicken">
                        <label for="item_4" class="form-check-label">
                            <h5 class="mb-2"><a href="#">Grilled Chicken</a></h5>
                        </label>
                        <p class="small">₹ 299</p>
                    </div>
                </div>

                <div class="bg-white">
                    <img src="images/item_5.jpg" alt="">
                    <div class="p-4 form-check">
                        <input type="checkbox" class="form-check-input" id="item_5" name="items[]" value="Chicken Pizza">
                        <label for="item_5" class="form-check-label">
                            <h5 class="mb-2"><a href="#">Chicken Pizza</a></h5>
                        </label>
                        <p class="small">₹ 299</p>
                    </div>
                </div>

                <div class="bg-white">
                    <img src="images/item_16.jpg" alt="">
                    <div class="p-4 form-check">
                        <input type="checkbox" class="form-check-input" id="item_16" name="items[]" value="Chicken Rolls">
                        <label for="item_16" class="form-check-label">
                            <h5 class="mb-2"><a href="#">Chicken Rolls</a></h5>
                        </label>
                        <p class="small">₹ 299</p>
                    </div>
                </div>
                
                <div class="bg-white">
                    <img src="images/item_2.jpg" alt="">
                    <div class="p-4 form-check">
                        <input type="checkbox" class="form-check-input" id="item_2" name="items[]" value="Chicken Burger">
                        <label for="item_2" class="form-check-label">
                            <h5 class="mb-2"><a href="#">Chicken Burger</a></h5>
                        </label>
                        <p class="small">₹ 349</p>
                    </div>
                </div>

                <div class="bg-white">
                    <img src="images/item_17.webp" alt="">
                    <div class="p-4 form-check">
                        <input type="checkbox" class="form-check-input" id="item_17" name="items[]" value="Chicken Nuggets">
                        <label for="item_17" class="form-check-label">
                            <h5 class="mb-2"><a href="#">Chicken Nuggets</a></h5>
                        </label>
                        <p class="small">₹ 399</p>
                    </div>
                </div>

                <div class="bg-white">
                    <img src="images/item_7.jpg" alt="">
                    <div class="p-4 form-check">
                        <input type="checkbox" class="form-check-input" id="item_7" name="items[]" value="Kings Luxury Special Biryani">
                        <label for="item_7" class="form-check-label">
                            <h5 class="mb-2"><a href="#">Kings Luxury Special Biryani</a></h5>
                        </label>
                        <p class="small">₹ 499</p>
                    </div>
                </div>

                <div class="bg-white">
                    <img src="images/item_15.jpg" alt="">
                    <div class="p-4 form-check">
                        <input type="checkbox" class="form-check-input" id="item_15" name="items[]" value="Kings Fried Chicken">
                        <label for="item_15" class="form-check-label">
                            <h5 class="mb-2"><a href="#">Kings Fried Chicken</a></h5>
                        </label>
                        <p class="small">₹ 499</p>
                    </div>
                </div>

                <div class="bg-white">
                    <img src="images/item_8.jpg" alt="">
                    <div class="p-4 form-check">
                        <input type="checkbox" class="form-check-input" id="item_8" name="items[]" value="Whole Chicken Roasted">
                        <label for="item_8" class="form-check-label">
                            <h5 class="mb-2"><a href="#">Whole Chicken Roasted</a></h5>
                        </label>
                        <p class="small">₹ 999</p>
                    </div>
                </div>
            </div>

        </div>
            <div class="row bg-white">
                <div class="text-center col-12">
                    
                    <button type="submit" class="btn btn-brand mb-5">Order Now</button>
                    
                </div>
            </div>
        </div>
    </div>>
    </form>

    
    <div id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-12 intro-text">
                    <h1>Book Your Table</h1>
                    <p>Savor a Seat at Our Table: Book Your Culinary Experience Today!</p>
                </div>
            </div>
            <form action="reservations.php" class="row justify-content-center" method="post" onsubmit="return validate();">
                <div class="col-lg-8">
                    <div class="row g-3">
                        <div class="col-md-6 col-sm-12">
                            <input type="text" class="form-control" placeholder="Full Name" id="name" name="name" required>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="tel" class="form-control" placeholder="Mobile Number" id="mobile" name="mobile" required>
                            <span id="errormobile" class="text-danger fw-bold fst-italic"></span>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="date" class="form-control" placeholder="Date" id="date" name="date" min="<?php echo date('Y-m-d'); ?>" required>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="time" class="form-control" placeholder="Time" id="time" name="time" min="<?php echo date('H:i'); ?>" required>
                        </div>
                        <div class="col-md-12">
                            <textarea name="msg" id="msg" cols="30" rows="4" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="text-center col-md-12">
                            <button type="submit" class="btn btn-brand mb-5">Book Now</button>
                        </div>
                    </div>
                </div>
            </form>

            <form class="row justify-content-center" method="post" enctype="multipart/form-data" action="upload.php">
                <div class="col-lg-8">
                    <div class="row g-3">
                        <label for="image" class="form-label col-md-12 intro-text"><h2>Upload a Photo of Our Restaurant</h2></label>
                        <input type="file" name="image" id="image" class="form-control" required>
                        <div class="text-center col-md-12">
                            <button type="submit" class="btn btn-brand mb-5">Upload</button>
                        </div>
                    </div>
                </div>
            </form>

            <form class="row justify-content-center" method="post" action="review.php">
                <div class="col-lg-8">
                    <div class="row g-3">
                        <label for="review" class="form-label col-md-12 intro-text"><h2>Write Your Review</h2></label>
                        <textarea name="review" id="review" cols="30" rows="4" class="form-control" placeholder="Write Here" required></textarea>
                        <div class="text-center col-md-12">
                            <button type="submit" class="btn btn-brand mb-5">Submit</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
    
    
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h6 class="text-white mb-4">CONTACT</h6>
                        <p class="mb-1">Phone:   8074799764</p>
                        <p class="mb-1">Email:   r190139@rguktrkv.ac.in</p>
                        <p class="mb-1">Address: Bangalore</p>
                    </div>
                    <div class="col-lg-6">
                        <h6 class="text-white mb-4">OPENING HOURS</h6>
                        <p class="mb-1">Monday-Friday : 08:00 AM- 10:00 PM</p>
                        <p class="mb-1">Saturday-Sunday : 08:00 AM - 22:00 PM</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p class="mb-0">Copyrights © 2023 Girivardhan, All rights reserved.</p>
                    </div>
                    <div class="col-lg-6">
                        <p class="mb-0">Designed By Girivardhan</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>