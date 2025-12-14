

<!doctype html>
<html>

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Register & Login</title>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

<!--css file-->
<link rel="stylesheet" href="loginsignup.css">
</head>

<body>
    
    <section id="header">
        <!--logo here-->
        <a href="#"><img  src="image/Logo/Logo.png"   alt=""></a>  

    </section>

    <div class="container" id="signUp" style="display:none ;">
        <h1 class="form-title">Register</h1>
        <form  action="indexhtml.html" method="POST"> 
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fname" id="fname" placeholder="First Name" required>
                <label for="fname">Firat Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                <label for="lName">Last Name</label>
            </div>
            <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="E-mail" required>
            <label for="email">E-mail</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" id="password" placeholder="password" required>
            <label for="password">Password</label>
        </div>
        <input type="submit" class="btn" value="Sign Up" name="signup">
        </form>
        <p class="or"> 
            ----------or----------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Already Have Account ?</p>
            <button id="signInButton" url="indexhtml.html">Sign In</button>
        </div>


    </div>

    <!--Login here-->
    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form  action="indexhtml.html" method="POST"> 
           
            <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="E-mail" required>
            <label for="email">E-mail</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" id="password" placeholder="Passqord" required>
            <label for="password">Password</label>
        </div>
        <p class="recover">
            <a href="#">Recover Password</a>
        </p>
        <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or"> 
            ----------or----------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Don't Have account yet?</p>
            <button id="signUpButton">Sign Up</button>
        </div>
        

    </div>
 


    <!--cREATE FOOTER TO show details-->

  

<!--js file-->
<script src="js/loginsignup.js"></script>
</body>
</html>
