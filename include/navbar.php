<?php include './head.php'?>
<link rel="stylesheet" href="../css/nav.css">

<nav class="navbar">
    <div class="nav_logo">
        <h1>
            <i class='bx bx-leaf'></i>
        </h1>
    </div>
    <ul class="nav_link" id="menu">
        <li><a href="./home.php">Home</a></li>
        <li><a href="./about.php">About</a></li>
        <li><a href="./plants.php">Products</a></li>
        <li><a href="./category.php">Category</a></li>
        <li><a href="./category.php">Blog</a></li>
        <li><a href="../page/logout.php">Logout</a></li>
    </ul>
    <div class="icon text-xl">
        <button type="button" data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example"
                data-drawer-placement="right" LLUaria-controls="drawer-right-example"><i
                    class='bx bx-basket'></i>
        </button>
    </div>

    <div class="burger">
        <i onclick="burger()" class='bx bx-collapse-horizontal ' id="burger-btn"></i>
    </div>
</nav>
