<!doctype html>
<html lang="en">
  <head>
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
  <body>
    
    <div class="container">
        <nav id="navbar" class="navbar navbar-light fixed-top">
            <a class="navbar-brand" href="home.html">:(</a>
        </nav>
        <form class="login" action="index.php" method="POST" name="myForm" id="form" >
            <div class="row">
                <div class="col text-center">
                    <h3>Login form</h3>
                </div>
            </div>
            <div class="row align-center">
                <div class="col text-center m-3">
                    <input type="text" class="form-control mb-3" name="username" placeholder="Username" >
                    <?php if(isset($usernameError)){ ?>
                        <p id="usernameError"><?php echo $usernameError ?></p>
                    <?php } ?>
                    <input type="password" class="form-control mb-3" name="password" placeholder="Password">
                    <?php if(isset($passwordError)){ ?>
                        <p id="passwordError"><?php echo $passwordError ?></p>
                    <?php } ?>
                    <label for="checkbox">
                        <input type="checkbox" name="checkbox" value="remember-me" id="">
                        Remember Me
                    </label>
                    <button type="submit" name="submit" class="btn btn-success btn-block mb-3">Login</button>
                    <span>Don't have an account?</span>
                    <a href="register.html" >Register now!</a>
                </div>
            </div>
        </form>    
    </div>
</body>
</html>