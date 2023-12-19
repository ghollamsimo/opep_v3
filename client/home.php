<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/card.css?v=<?php echo time(); ?>">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Document</title>
</head>
<body class="overflow-x-hidden">
<header class="header">
    <?php include '../include/navbar.php' ?>

    <div class="header-section container">
        <div class="left">
            <h1 class="text-2xl">We Make Your Happiness <span class="text-success">Bloom</span></h1>
            <p>🌿 Welcome to [Your Plant Haven] - Your Online Oasis of Greenery! 🌿</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et deleniti dolorem enim odio corrupti nam
                quam qui eaque? Perspiciatis voluptates voluptatibus dolore deserunt sequi voluptatum suscipit eum
                corporis aut fugit!</p>
            <button class="bttn" >Order Plants</button>
        </div>
        <div class="right">
            <img src="../img/plants_1.png" alt="">
            <div class="anim">
                <img class="image_anim" src="../img/plants_2.png" alt="">
            </div>
        </div>
    </div>
</header>
<div class="card">
    <div class="item">
        <i class='bx bx-box'></i>
        <div class="item_content">
            <h3>Free Return</h3>
            <p>Loremlaudantium, praesentium ipsa neque eveniet quo vero error adipisci fuga mollitia. Animi expedita
            </p>
        </div>
    </div>

    <div class="item">
        <i class='bx bx-box'></i>
        <div class="item_content">
            <h3>Fast Delivery</h3>
            <p>Loremlaudantium, praesentium ipsa neque eveniet quo vero error adipisci fuga mollitia. Animi expedita
            </p>
        </div>
    </div>

    <div class="item">
        <i class='bx bx-box'></i>
        <div class="item_content">
            <h3>Customer Support</h3>
            <p>Loremlaudantium, praesentium ipsa neque eveniet quo vero error adipisci fuga mollitia. Animi expedita
            </p>
        </div>
    </div>

    <div class="item">
        <i class='bx bx-dollar'></i>
        <div class="item_content">
            <h3>Affordable Price</h3>
            <p>Loremlaudantium, praesentium ipsa neque eveniet quo vero error adipisci fuga mollitia. Animi expedita
            </p>
        </div>
    </div>
</div>


<div class="products">
    <h1 class="text-3xl m-12">Our <span class="green">Plants</span></h1>
    <div class="plant">
        <?php

            ?>
            <div class="courses-container">
                <div class="course">
                    <div class="course-preview">
                        <img src="../img/plants_2.png" alt="" width="100px">
                    </div>
                    <div class="course-info">
                        <h2>aa</h2>
                        <h6>$1</h6>
                        <div class="btn_cat">
                            <span class="progress-text">
                                aaa
                            </span>
                            <form action="./plants.php">
                                <button class="btn">Add To Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php  ?>

    </div>
</div>


<h1 class="text-center text-3xl m-12"><span class="green">About</span> Us</h1>
<section class="bg-[#557C55] p-3 about">
    <div class="m-16 flex gap-[5rem]">
        <img src="../img/plants_1.png" alt="" width="300px">
        <p class="relative text-lg top-32 w-[1000rem] font-semibold flex justify-center">At Opep Garden, we believe
            in
            the
            transformative
            power of nature
            and
            the
            profound
            impact it
            can
            have on
            our well-being. Nestled in the heart of tranquility, Opep Garden is not just a place; it's an immersive
            experience designed to reconnect you with the beauty of the natural world.
        </p>
    </div>
</section>

<section>
    <h1 class="text-3xl text-center m-8">Our <span class="green">Category</span></h1>
    <div class="category">
        <?php ?>
            <div class="  w-full  p-4">
                <div class="bg-[#557C55] text-white w-full max-w-md flex flex-col rounded-xl shadow-lg p-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <div class="rounded-full w-4 h-4 border border-white-500"></div>
                            <div class="text-md font-bold">aa</div>
                        </div>

                    </div>
                    <div class="mt-4 text-white font-bold text-sm">
                        # CATEGORY
                    </div>
                </div>

            </div>
        <?php  ?>
    </div>

</section>

<?php include "../include/footer.php"; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

<script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
</body>
</html>
