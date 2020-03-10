
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="css/style.min.css">
</head>
<body>
<div class="registration">
    <div class="form">

        <ul class="tab-group">
            <li class="tab active"><a href="#signup">Sign Up</a></li>
            <li class="tab"><a href="#login">Log In</a></li>
        </ul>

        <div class="tab-content">
            <div id="signup">
                <h1>Sign Up for Free</h1>

                <form action="reg.php" method="post">

                    <div class="top-row">
                        <div class="field-wrap">
                            <label>
                                First Name<span class="req">*</span>
                            </label>
                            <input type="text" name="first_name" required autocomplete="off" />
                        </div>

                        <div class="field-wrap">
                            <label>
                                Last Name<span class="req">*</span>
                            </label>
                            <input type="text" name="last_name" required autocomplete="off"/>
                        </div>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Email Address<span class="req">*</span>
                        </label>
                        <input type="email" name="email" required autocomplete="on"/>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Set A Password<span class="req">*</span>
                        </label>
                        <input type="password" name="password" required autocomplete="on"/>
                    </div>

                    <button type="submit" class="button button-block"/>Get Started</button>

                </form>

            </div>

            <div id="login">

                <h1>Welcome Back!</h1>"
                <form action="login.php" method="post">

                    <div class="field-wrap">
                        <label>
                            Email Address<span class="req">*</span>
                        </label>
                        <input type="email" name="email_aut" required autocomplete="on"/>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Password<span class="req">*</span>
                        </label>
                        <input type="password" name="pass" required autocomplete="on"/>
                    </div>

                    <p class="forgot"><a href="#">Forgot Password?</a></p>

                    <button class="button button-block" >Log In</button>

                </form>

            </div>

        </div><!-- tab-content -->

    </div>
</div>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="slick/slick.js"></script>
<script src="js/main.js"></script>
</body>
</html>