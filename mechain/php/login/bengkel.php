<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Mechanic</title>
    <link rel="icon" type="image/x-icon" href="../../img/MechainLogo.png">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/styleLogin.css">
</head>

<body>
    <div class="main">
        <div class="container a-container" id="a-container">
            <form action="../config/registerBengkel.php" method="POST" class="form" id="a-form">
                <h2 class="form_title title">Create Account</h2>
                <input class="form__input" name="name" type="text" placeholder="Nama Pemilik Bengkel">
                <input class="form__input" name="username" type="text" placeholder="Username">
                <input class="form__input" name="email" type="text" placeholder="Email">
                <input class="form__input" name="password" type="password" placeholder="Password">
                <input class="form__input" name="noHP" type="text" placeholder="No. HP">
                <button type="submit" class="form__button button">SIGN UP</button>
            </form>
        </div>
        <div class="container b-container" id="b-container">
            <form action="../config/loginBengkel.php" method="post" class="form" id="b-form">
                <h2 class="form_title title">Sign in to Website</h2>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error">
                        <?php echo $_GET['error']; ?>
                    </p>
                <?php } ?>
                <input class="form__input" type="text" name="uname" placeholder="User Name">
                <input class="form__input" type="password" name="password" placeholder="Password">

                <button type="submit" class="form__button button">SIGN IN</button>
            </form>
        </div>
        <div class="switch" id="switch-cnt">
            <div class="switch__circle"></div>
            <div class="switch__circle switch__circle--t"></div>
            <div class="switch__container" id="switch-c1">
                <h2 class="switch__title title">Welcome Back !</h2>
                <p class="switch__description description">To keep connected with us please login with your personal
                    info</p>
                <button class="switch__button button switch-btn">SIGN IN</button>
            </div>
            <div class="switch__container is-hidden" id="switch-c2">
                <h2 class="switch__title title">Hello Friend !</h2>
                <p class="switch__description description">Enter your personal details and start journey with us</p>
                <button class="switch__button button switch-btn">SIGN UP</button>
            </div>
        </div>
    </div>
    <script src="../../js/login.js"></script>
</body>

</html>