<?php
global $user;
require_once './config/connecte.php';

if (isset($_POST['submit'])) {
    $nom = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['mot_de_passe'];// Assuming 'role' is the name of the form field for role selection


    try {
        if ($user->insertUser($nom, $email, $password )) {
           echo 'login succesfully';
        } else {
            echo 'error';
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="../js/navbar.js"></script>
    <link rel="stylesheet" href="./css/index.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="login">
        <div class="left">
            <h1 class="text-lg">Welcome To Opep Garden</h1>
            <h3>One Stope For All the variety Of Plants</h3>
            <div class="blob">
                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#A6CF98"
                          d="M65.8,-51.8C81.4,-33,87.3,-5.8,81.3,17.8C75.3,41.4,57.3,61.5,35.1,71.8C12.9,82.1,-13.6,82.6,-36.2,72.6C-58.9,62.7,-77.8,42.4,-82.9,19.1C-88.1,-4.1,-79.5,-30.3,-63.4,-49.3C-47.3,-68.3,-23.6,-80.1,0.8,-80.7C25.1,-81.3,50.3,-70.7,65.8,-51.8Z"
                          transform="translate(100 100)" />
                </svg>
                <img class="img" src="./img/plants_1.png" alt="">
            </div>
        </div>
        <div class="right">
            <h4><span><i class='bx bx-leaf'></i></span>Opep Garden</h4>
            <h2>Sign Up to Your Opep Account</h2>
            <div class="inputs">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <label>
                        <input class="input" type="text" name="name" placeholder="Full Name    ">
                    </label>
                    <label>
                        <input class="input" type="text" name="email" placeholder="Email">
                    </label>
                    <label>
                        <input class="input" type="text" name="mot_de_passe" placeholder="Password">

                    </label>
                    <input type="submit" name="submit" value="Register" class="submit">
                </form>
                <small class="signup">If You Have Account You Can<a href="./pages/login.php">Login</a></small>
            </div>

        </div>
    </div>
</div>
</body>
</html>
