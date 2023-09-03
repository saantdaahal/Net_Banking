<?php

if (isset($_GET['loginFailed'])) {

    $message = "Invalid Credentials ! Please try again.";
    echo "<script type='text/javascript'>alert('$message');</script>";

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="img/logo5.jpeg" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&display=swap" rel="stylesheet" />

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />

    <!-- CSS file -->
    <link rel="stylesheet" href="home_style.css" />
    <title>SASBank | When Banking meets Minimalist</title>

    <!-- bootstrap script -->
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN"
        crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/"
        crossorigin="anonymous"></script>
</head>

<body>
    <header class="header">
        <nav class="nav">
            <img src="img/logo5.jpeg" alt="Bankist logo" class="nav__logo" id="logo" designer="Jonas"
                data-version-number="3.0" />
            <ul class="nav__links">
                <li class="nav__item">
                    <a class="nav__link" href="news.php">NEWS</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="admin_login.php">ADMIN LOGIN</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="mainpage.php">ONLINE LOGIN</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="Contact.php">CONTACT US</a>
                </li>
            </ul>
        </nav>

        <div class="header__title">
            <!-- <h1 onclick="alert('HTML alert')"> -->
            <h1>
                When
                <!-- Green highlight effect -->
                <span class="highlight">banking</span>
                meets<br />
                <span class="highlight">minimalist</span>
            </h1>
            <h4>A simpler banking experience for a simpler life.</h4>
            <button class="btn--text btn--scroll-to">Learn more &DownArrow;</button>
            <img src="img/hero.png" class="header__img" alt="Minimalist bank items" />
        </div>
    </header>


    <section class="section" id="section--1">
        <div class="section__title">
            <h2 class="section__description">Features</h2>
            <h3 class="section__header">
                Everything you need in a modern bank and more.
            </h3>
        </div>

        <div class="features">
            <img src="img/digital-lazy.jpg" data-src="img/digital.jpg" alt="Computer" class="features__img lazy-img" />
            <div class="features__feature">
                <div class="features__icon">
                    <svg>
                        <use xlink:href="img/icons.svg#icon-monitor"></use>
                    </svg>
                </div>
                <h5 class="features__header">100% digital bank</h5>
                <p>
                    Our Digital Banking features make it easy for you to bank on your terms.
                    Manage your accounts, track spending, create budgets,
                    and transfer money between family and friends.
                </p>
            </div>

            <div class="features__feature">
                <div class="features__icon">
                    <svg>
                        <use xlink:href="img/icons.svg#icon-trending-up"></use>
                    </svg>
                </div>
                <h5 class="features__header">Watch your money grow</h5>
                <p>
                    Why should only the finance nerds have all the fun and high returns?
                    All you have to do is invest your money and go do your thing,
                    while bankist takes care of the rest.
                </p>
            </div>
            <img src="img/grow-lazy.jpg" data-src="img/grow.jpg" alt="Plant" class="features__img lazy-img" />

            <img src="img/card-lazy.jpg" data-src="img/card.jpg" alt="Credit card" class="features__img lazy-img" />
            <div class="features__feature">
                <div class="features__icon">
                    <svg>
                        <use xlink:href="img/icons.svg#icon-credit-card"></use>
                    </svg>
                </div>
                <h5 class="features__header">Free debit card included</h5>
                <p>
                    Life is easier, smoother and better when you have a debit card that
                    gives you complete control. does it all. Here’s your gateway to smarter spends,
                    easier ways to safeguard your card and managing everything at the click of a button.
                </p>
            </div>
        </div>
    </section>

    <section class="section" id="section--2">
        <div class="section__title">
            <h2 class="section__description">Operations</h2>
            <h3 class="section__header">
                Everything as simple as possible, but no simpler.
            </h3>
        </div>

        <div class="operations">
            <div class="operations__tab-container">
                <button class="
              btn
              operations__tab operations__tab--1 operations__tab--active
            " data-tab="1">
                    <span>01</span>Instant Transfers
                </button>
                <button class="btn operations__tab operations__tab--2" data-tab="2">
                    <span>02</span>Instant Deposit
                </button>
                <button class="btn operations__tab operations__tab--3" data-tab="3">
                    <span>03</span>Instant Withdraw
                </button>
            </div>

    </section>
</body>

</html>