<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kolly jobs offers</title>
    <link rel="shortcut icon" href="./kolly.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    font-family: popins, sans-serif;
    background-position: center;
    background-size: cover;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
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
.o{
    width: 50%;
}
.wrapper{
    background: transparent;
    backdrop-filter: blur(100px);
    border-radius: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .3);
    width: 420px;
    padding: 30px 40px;
    margin-left: 11%;
}
.wrapper h2{
    text-align: center;
    font-size: 36px;
    color:rgb(247, 80, 113);
}
.wrapper .input-box{
    margin-top: 20px;
}
.wrapper .input-box p{
    font-size: 18px;
    color: rgb(247, 80, 113);
    font-weight: 600;
    margin-bottom: 10px;
}
.wrapper .input-box input{
    background: transparent;
    height: 40px;
    width: 100%;
    border-radius: 20px;
    border: 2px solid rgb(247, 80, 113);
    outline: none;
    padding: 20px 40px 20px 20px;
    font-size: 17px;
}
.wrapper .input-box input::placeholder{
    font-size: 17px;
}
.wrapper .remember-me{
    display: block;
    margin: 15px 0 0px;
}
.remember-me p{
    font-size: 18px;
    color: rgb(247, 80, 113)l;
    font-weight: 600;
    margin-bottom: 10px;
}
.remember-me label input{
    accent-color: black;
    margin-left: 20px;
}
.remember-me a{
    color: black;
    text-decoration: none;
}
.remember-me a:hover{
    text-decoration: underline;
}

.wrapper button{
    width: 100%;
    height: 45px;
    border-radius: 20px;
    border: none;
    outline: none;
    box-shadow: 0 0 10px rgba(0, 0, 0, .3);
    color: rgb(247, 80, 113);
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.5s ease-in-out;
}

.wrapper button:hover{
    background-color: rgb(247, 80, 113);
    color: white;
}

.wrapper .register{
    text-align: center;
    margin: 20px 0 15px;
    font-size: 15px;
}
.register a{
    color: rgb(247, 80, 113);
    font-weight: 600;
    text-decoration: none;
}
.register a:hover{
    text-decoration: underline;
}
.message{
    text-align: center;
    background: transparent;
    border-radius: 20px;
    padding: 20px 35px;
}
</style>
<body>
    <!-- Navbar -->

    <div class="sidebar">
        <div class="logo">
            <img src="./kolly.png" alt="">
        </div>
    </div>

    <!-- End of navbar -->

    <?php
        include("php/confing.php");
        if(isset($_POST['submit'])){
            $firstname = $_POST['Firstname'];
            $lastname = $_POST['Lastname'];
            $email = $_POST['Email'];
            $password = $_POST['Password'];

            $selectquery = "SELECT Email FROM clients WHERE Email='$email'";
            $runquery = mysqli_query($con,$selectquery);

            if(mysqli_num_rows($runquery) !=0){
                echo "<div class='message' style='border:1px solid black; text-align: center; background: transparent;border-radius: 20px;padding: 20px 35px;   '>
                    <p>This email is already used try another one</p>
                    <br>
                <a href='javascript:self.history.back()'><button class='btn'>Go Back</button></a>   
                </div>
                ";
            }
            else{
                mysqli_query($con,"INSERT INTO clients(Firstname,Lastname,Email,Password) VALUES('$firstname','$lastname','$email','$password')") or die('not working');

                echo "<div class='message'>
                    <p>Account is created successfully!</p>
                </div> <br>
                ";
                echo "
                <a href='index.php'><button class='btn'>Login Now</button></a>   
                ";
            }
        }else{
    ?>

    <div class="o">
        <div class="wrapper">
            <form action="" method="post">
                <h2>Register</h2>
                <div class="input-box">
                    <p>Name :</p>
                    <input type="text" placeholder="Firstname" autocomplete="off" name="Firstname" required>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Lastname" autocomplete="off" name="Lastname" required>
                </div>
                <div class="input-box">
                    <p>Email:</p>
                    <input type="text" placeholder="Email" autocomplete="off" name="Email" required>
                </div>
                <div class="input-box">
                    <p>Password :</p>
                    <input type="password" placeholder="Password" autocomplete="off" required name="Password">
                </div>
                <button type="submit" name="submit" style="margin-top: 20px;">Submit</button>
                <div class="register">
                    Already have an account?
                    <a href="index.php">Login</a>
                </div>
            </form>
        </div>
        <?php
        }
        ?>
    </div>
</body>

</html>