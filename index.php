
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kolly jobs offers</title>
    <link rel="shortcut icon" href="./kolly.png" type="image/x-icon">
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    font-family: system-ui;
    display: flex;
    width: 100%;
    background: beige;
}
.sidebar{
    width: 50%;
    height: 100vh;
}
.logo{
    position: relative;
    top: 50%;
    transform: translate(25%,-50%);
}
.logo img{
    height: 300px;
    width: 300px;
}

/* login */

.wrapper{
    background: transparent;
    backdrop-filter: blur(100px);
    border-radius: 20px;
    box-shadow: 0 0 30px rgba(0, 0, 0, .3);
    width: 420px;
    padding: 30px 40px;
    height: 420px;
    margin-top: 10%;
    margin-left: 5%;
}
.wrapper h2{
    text-align: center;
    font-size: 36px;
    color:  rgb(247, 80, 113);
}
.wrapper .input-box{
    margin-top: 20px;
}
.wrapper .input-box input{
    background: transparent;
    height: 40px;
    width: 100%;
    border-radius: 20px;
    border: 2px solid  rgb(247, 80, 113);
    outline: none;
    padding: 20px 40px 20px 20px;
    color: black;
    font-size: 17px;
}
.wrapper .input-box input::placeholder{
    color: black;
    font-size: 17px;
}
.wrapper .remember-me{
    display: flex;
    justify-content: space-between;
    margin: 15px 0 15px;
}
.remember-me label input{
    accent-color:  rgb(247, 80, 113);
}
.remember-me a{
    color:  rgb(247, 80, 113);
    text-decoration: none;
}
.remember-me a:hover{
    text-decoration: underline;
}

.button{
    text-align: center;
    width: 100%;
    align-items: center;
    display: flex;
    justify-content: center;
    height: 45px;
    border-radius: 20px;
    border: none;
    outline: none;
    box-shadow: 0 0 10px rgba(0, 0, 0, .3);
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.5s ease-in-out;
}
.button:hover{
    background-color: rgb(247, 80, 113);
}
.button a:hover{
    color: white;
}
.button a{
    text-decoration: none;
    color:  rgb(247, 80, 113);
}

.wrapper .register{
    text-align: center;
    margin: 20px 0 15px;
    font-size: 15px;
}
.register a{
    color:  rgb(247, 80, 113);
    font-weight: 600;
    text-decoration: none;
}
.register a:hover{
    text-decoration: underline;
}
</style>
<body>
    <!-- Navbar -->

    <div class="sidebar">
        <div class="logo">
            <img src="./kolly.png">
        </div>
    </div>

    <!-- End of navbar -->
    
    <!-- Login -->
    <div class="wrapper">

        <?php
        
        ?>

        <form action="" method="post">
            <h2>Login</h2>
            <div class="input-box">
                <input type="text" placeholder="Username" autocomplete="off" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" autocomplete="off" required>
            </div>
            <div class="remember-me">
                <label for=""><input type="checkbox"> Remember me
                </label>
                <a href="">Forgot Password?</a>
            </div>
            <div class="button">
                <a href="home.php" type="submit" id="log">Login</a>
            </div>
            <div class="register">
                Don't have an account?
                <a href="register.php">Register</a>
            </div>
        </form>
    </div>
    <!-- End of Login -->
</body>
</html>