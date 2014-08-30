<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="../style/webpage.css">
        <title></title>
       <!--Stylesheets-->
<link href="../style/loginPage.css" rel="stylesheet" type="text/css">
<link href="../fonts/pacifico/stylesheet.css" rel="stylesheet" type="text/css">

<!--Scripts-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!--Sliding icons-->
<script type="text/javascript">
$(document).ready(function() {
    $(".username").focus(function() {
        $(".user-icon").css("left","-48px");
    });
    $(".username").blur(function() {
        $(".user-icon").css("left","0px");
    });
    
    $(".password").focus(function() {
        $(".pass-icon").css("left","-48px");
    });
    $(".password").blur(function() {
        $(".pass-icon").css("left","0px");
    });
});
</script>
    </head>
    <body>
        <header>
            <img src="../images/banner.png" alt="Logo">
        </header>
        <div id="navBar">
             
        <nav>
            <ul>
                <li><a href="/newVAsite2" title="Home">home</a>
                    <ul>
                        <li><a href="/" title="Home">home</a></li>
                        <li><a href="/" title="Home">home</a></li>
                        <li><a href="/" title="Home">home</a></li>
                    </ul>
                </li>
                <li><a href="/" title="solutions">solutions</a>
                 <ul>
                        <li><a href="/" title="Home">home</a></li>
                        <li><a href="/" title="Home">home</a></li>
                        <li><a href="/" title="Home">home</a></li>
                    </ul>
                </li>
                <li><a href="/" title="about us">about us</a></li>
                <li><a href="/" title="contact us">contact us</a></li>
                <li><a href="/" title="feedback">feedback</a></li>
                <li><a href="/" title="FAQs">FAQs</a></li>
                <li><a href="/newVAsite2/Login" class="loginlink">Log In</a></li>
            </ul>
            
        </nav>
        </div>
        <section>
    <div id="wrapper"> 
    <!--Sliding icons-->
    <div class="user-icon"></div>
    <div class="pass-icon"></div>
    <!--END Sliding icons-->

<!--login form inputs-->
<form name="login-form" class="login-form" action="" method="post">
    
    <!--Header-->
    <div class="header">
    <h1>Login Form</h1>
    <span>Please login by using this beautiful login form or if you dont have an account, you can Register!</span>
    </div>
    <!--END header-->
    
    <!--Input fields-->
    <div class="content">
    <!--USERNAME--><input name="username" type="text" class="input username" placeholder="Username" /><!--END USERNAME-->
    <!--PASSWORD--><input name="password" type="password" class="input password" placeholder="Password" /><!--END PASSWORD-->
    </div>
    <!--END Input fields-->
    
    <!--Buttons-->
    <div class="footer">
    <!--Login button--><input type="submit" name="submit" value="Login" class="button" /><!--END Login button-->
    <!--Register button--><input type="submit" name="submit" value="Register" class="register" /><!--END Register button-->
    </div>
    <!--END Buttons-->

</form>
<!--end login form-->
</div>
        </section>


        
        
        <div id="footerBar">
        <footer>
             <ul>
                <li><a href="/" title="Terms and Conditions">terms and conditions</a></li>
                <li><a href="/" title="Privacy Policy">privacy policy</a></li>
                <li><a href="/" title="contact us">contact us</a></li>
                <li><a href="/" title="feedback">feedback</a></li>
                <li><a href="/" title="FAQs">FAQs</a></li>
                <li><a style="width:210px;" title="Copyright">Copyright &copy; 2002-2013 VendorAppraisal&#8482;</a></li>
            </ul>
        </footer>
        </div>
    </body>
</html>
