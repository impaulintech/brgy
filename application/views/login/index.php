<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.css')?>">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>



<body>
    <style>
    

    body{
    margin: 0;
    padding: 0;
    font-family: montserrat;
    background-image: url('assets/images/2.jpg');
    background-position: center;
    background-size: cover;
    height: 100vh;
    width: 100%;
    overflow: hidden;
}
.header{
    position: fixed;
    height: 80px;
    width: 100%;
    z-index: 100;
    padding: 0 20px;
    
}
.nav_logo{
    font-size: 20px;
    height: 20;
    width: 100;
    color: aliceblue;
    /* display: block; */
  color: white;
  text-align: center;
  padding: 10px 10px;
  text-decoration: none;
  float: left;
    
}
.nav{
    list-style-type: none;
  margin: 0;
  padding: 0 0px;
  overflow: hidden;
  background-color: #333;
  float: center;
  
}
.center{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    background: white;
    border-radius: 10px;
}
.center h1{
    text-align: center;
    padding: 0 0 20px 0;
    border-bottom: 1px solid silver;
}
.center form{
 padding: 40px;
 box-sizing: border-box;   
}
form .txt_field{
    position: relative;
    border-bottom: 2px solid #adadad;
    margin: 30px 0;
}
.txt_field input{
    width: 100%;
    padding: 0 5px;
    height: 40px;
    font-size: 16px;
    border: none;
    background: none;
    outline: none;
}
.txt_field label{
    position: absolute;
    top: 50%;
    left: 5px;
    color: #adadad;
    transform: translateY(-50%);
    font-size: 16px;
    pointer-events: none;
    transition: .5s;
}    
.txt_field span::before{
    content: '';
    position: absolute;
    top: 40px;
    left: 0;
    width: 100%;
    height: 2px;
    background: #2691d9;
    transition: .5s;
}
.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
    top: -5px;
    color: #2691d9;
}
.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
    width: 100px;
}
.pass{
    margin: -5px 0 20px 5px;
    color: #a6a6a6;
    cursor: pointer;
}
.pass:hover{
    text-decoration: underline;
}
input[type="submit"]{
    width: 100px;
    height: 50px;
    border: 1px solid;
    background: #2691d9;
    border-radius: 25px;
    font-size: 18px;
    color: #e9f4fb;
    font-weight: 700;
    cursor: pointer;
    outline: none;
}
input[type="submit"]:hover{
    border-color: #2691d9;
    transition: .5s;
}
.signup_link{
    margin: 30px 0;
    text-align: center;
    font-size: 16px;
    color: #666666;
}
.signup_link a{
    color: #2691d9;
    text-decoration: none;
}
.signup_link a:hover{
    text-decoration:  underline;
}
.container-fluid{
    margin: auto;
    width: 100%;
    height: 50%;
    padding: 200px;
    text-align: center;
}



    /* .login-container {
        top: 140px;
    }

    .login-content input[type="text"] {
        width: 220px;
        border-radius: 40px;
        letter-spacing: 0.8px;
        padding: 3px 0px 3px 10px;
    }

    .login-content input[type="text"]:focus,
    .login-content input[type="text"]:hover {
        border: 2px solid #4A9DEC;
        box-shadow: 0px 0px 0px 5px rgb(74, 157, 236, 20%);
        background-color: white;
    }

    .login-content input[type="password"] {
        width: 220px;
        border-radius: 40px;
        letter-spacing: 0.8px;
        padding: 3px 0px 3px 10px;
    }

    .login-content input[type="password"]:focus,
    .login-content input[type="password"]:hover {
        border: 2px solid #4A9DEC;
        box-shadow: 0px 0px 0px 4px rgb(74, 157, 236, 20%);
        background-color: white;
    }

    .login-content input[type="submit"] {
        width: 220px;
        border-radius: 40px;
        background-color: #367FA9;
        color: white;
        letter-spacing: 0.8px;
    }

    .login-content input[type="submit"]:hover {
        width: 220px;
        border-radius: 40px;
        background-color: #367FA9;
        color: black;
        letter-spacing: 0.8px;
    }

    .login-content h3 {
        border-bottom: solid 4px #367FA9;
        font-weight: bold;
    }

    .login-main {
        font-family: Sans-Serif;
    } */

    </style>
    <form action="<?=site_url('login/login')?>" method="post">


    
        <!-- <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-2">

                </div>

                <div class="login-container col-12 col-lg-8">
                    <div class="login-form d-flex shadow-lg p-5 mb-5 bg-white rounded">
                        <div class="col side-image d-lg-inline-block d-none">
                            <img src="<?=base_url('assets/images/2.jpg')?>" alt="" class="w-100">
                        </div>
                        <div class="col login-main d-flex align-items-center flex-column justify-content-center">
                            <div class="login-content d-flex align-items-start flex-column">
                                <h1 class="mb-5">Welcome To Barangay Caypombo</h1>
                                <h3 class="mb-5">Login</h3>
                                <label for="username" class="text-muted">Username</label>
                                <input type="text" name="username" id="username">
                                <label for="password" class="text-muted">Password</label>
                                <input type="password" name="password" id="password" class="mb-3">
                                <input type="submit" value="Login" class="mb-1">
                                <a href="">Forgot password?</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-2">

                </div>
            </div>
        </div> -->

        <div class="container-fluid ">
             <div class="row">
             <div class="col-8 col-lg-2">

             </div>

             <div class="login-container col-12 col-lg-8">
             <div class="login-form d-flex shadow-lg p-5 mb-5 bg-white rounded">
             <div class="col side-image d-lg-inline-block d-none">
             <img src="<?=base_url('assets/images/7.jpg')?>" alt="" class="w-100">
             </div>
             <div class="col login-main d-flex align-items-center flex-column justify-content-center">
             <div class="login-content d-flex align-items-start flex-column">

                    <h1 class="mb-5">Login</h1>
                    <form method="post">
                    <div class="txt_field">
                    <input type="text" name="username" id="username" required>
                    <span></span>
                    <label for="username" class="text-muted">Username</label>
                   </div>
                    <div class="txt_field">
                    <input type="password" name="password" id="password" required>
                    <span></span>
                     <label for="password" class="text-muted">Password</label>
                    </div>
                    <div class="pass">Login For User</div>
                    <input type="submit" value="Login" class="mb-1">
                    <div class="singup_link">
                     <!-- Not a member? <a href="">Signup</a> -->

                     <div class="col-8 col-lg-2">
             </div>
          </div>
        </form>
    </div>

    </form>
    <script src="<?=base_url('assets/js/jquery.js')?>"></script>
    <script src="<?=base_url('assets/js/popper.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.js')?>"></script>

</body>

</html>
