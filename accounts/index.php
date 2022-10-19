<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));

$result = $mysqli->query($sql);

$user = $result->fetch_assoc();

if ($user) {

if (password_verify($_POST["password"], $user["password_hash"])) {

session_start();

session_regenerate_id();

$_SESSION["user_id"] = $user["id"];

header("Location: index.php");
exit;
}
}

$is_invalid = true;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In | Trendy</title>

    <link href="accounts.css" rel="stylesheet" type="text/css">

    <link href="../assets/css/main.css" rel="stylesheet" type="text/css">
    <link href="../store/store.css" rel="stylesheet" type="text/css">

    <link rel="icon" type="image/x-icon" href="../assets/images/icons/favicon.ico">

    <link href="../assets/css/SFPRODISPLAY.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/outfit-v6-latin.css" rel="stylesheet" type="text/css">

</head>
<body>
<header>
    <div class="container">
        <nav class="nav">

            <ul class="nav-list nav-list-mobile">
                <li class="nav-item">
                    <a href="../">
                    <div class="mobile-menu">
                        <span class="line line-top"></span>
                        <span class="line line-bottom"></span>
                    </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.html" class="nav-link nav-link-logo">
                    <img src="../assets/images/icons/trendy-txt.png" class="logo">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.html" class="nav-link">
                        <i class="gg-bookmark"></i>
                    </a>
                </li>
            </ul>
            <!-- /.nav-list nav-list-mobile -->


            <ul class="nav-list nav-list-larger">
                <li class="nav-item">
                          <a href="/" class="nav-link trendy">Trendy.</a>
                        </li>

                <li class="nav-item">
                    <a href="/store" class="nav-link">Store</a>
                </li>
                <li class="nav-item">
                    <a href="index.html" class="nav-link">Accessories</a>
                </li>
                <li class="nav-item">
                    <a href="/support" class="nav-link" target="_blank">Support</a>
                </li>
                <li class="nav-item">
                    <a href="index.html" class="nav-link nav-link-search">
                        <svg xmlns="http://www.w3.org/2000/svg" class="search" width="16" height="44" viewBox="0 0 16 44"><path d="M15.27 28.29l-4.06-4.06a6.113 6.113 0 0 0 1.35-3.83c0-3.39-2.76-6.15-6.15-6.15-3.39 0-6.15 2.76-6.15 6.15s2.76 6.15 6.15 6.15c1.43 0 2.75-.5 3.8-1.33l4.06 4.06 1-.99zM6.4 25.33a4.93 4.93 0 0 1-4.92-4.92c0-2.71 2.2-4.92 4.92-4.92s4.92 2.21 4.92 4.92c.01 2.71-2.2 4.92-4.92 4.92z" /></svg>
                    </a>
                </li>
                <li class="nav-item nav-item-hidden">
                    <a href="index.html" class="nav-link nav-link-bag">
                        <i class="gg-shopping-bag bag-icon-right"></i>
                    </a>
                </li>
            </ul>
            <!-- /.nav-list nav-list-larger -->


        </nav>





    </div>
<div class="header-acc">
    <div class="container-acc">
        <nav class="nav-acc">

            <ul class="acc-list acc-list-mobile">
                <li class="acc-item">
                    <a href="index.html" class="acc-nav-title">
                        <i class="gg-profile"></i>
                    </a>
                </li>
                <li class="acc-item nav-item-hidden">
                    <a href="index.html" class="acc-link nav-link-logo">
                    </a>
                </li>
                <li class="acc-item">
                    <div class="acc-mobile-menu">
                        <i class="gg-more-alt more-icon-right"></i>
                    </div>
                </li>

            </ul>
            <!-- /.nav-list nav-list-mobile -->


            <ul class="acc-list acc-list-larger acc-item-hidden">

                <li class="acc-item acc-item-hidden">
                    <a href="/" class="acc-nav-title">
                        Trendy Account
                    </a>
                </li>

                <li class="acc-item acc-item-hidden">
                    <a href="index.html" class="acc-link acc-link-bag">
                    </a>
                </li><li class="acc-item acc-item-hidden">
                <a href="index.html" class="acc-link acc-link-bag">
                </a>
            </li><li class="acc-item acc-item-hidden">
                <a href="index.html" class="acc-link acc-link-bag">
                </a>
            </li>

                <li class="acc-item">
                    <a href="../accounts" class="acc-link acc-nav-options">Sign in</a>
                </li>
                <li class="acc-item">
                    <a href="signup.html" class="acc-link acc-nav-options">Create a new account</a>
                </li>

            </ul>
            <!-- /.nav-list nav-list-larger -->


        </nav>
    </div>




</header>




<noscript>
    <div class="text-container">
        <h2 class="cards-mainheader">FEA.
            <span class="cards-secondaryheader">The best place to buy the products you love.</span>
        </h2>
    </div>
</noscript>
<section class="hero">
    <div class="container">

        <div class="title title-light">
            <h2 class="title-heading">Sign In your account.</h2>
            <h3 class="title-sub-heading">Manage your Trendy. account</h3>
            <br>
            <h2><a href="signup.html" class="new-acc">Create a new account</a></h2>
            <!--
            <p class="title-price-heading">$1299</p>
          -->
        </div>
<br><br><br><br><br><br><br><br><br><br>




        <div class="login-section">
            
           <?php if ($is_invalid): ?>
            <em>Invalid Sign in</em>
            <?php endif; ?>

        <form method="post">
            <div>
            <input required type="email" name="email" id="email" placeholder="Email"
                   value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
            </div>
            <div>
            <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <a href="/support" target="_blank">Forgot your password?</a>

            <input type="submit" value="Sign In">
        </form>
        </div>

    </div>
</section>











<footer>
    <p>Copyright © 2022 Shah Company Limited. All rights reserved.</p>
</footer>

<script>

    const selectElement = (element) => document.querySelector(element);

    selectElement('.acc-mobile-menu').addEventListener('click', () => {
        selectElement('.header-acc').classList.toggle('active-acc');
    });

</script>



</body>
</html>
