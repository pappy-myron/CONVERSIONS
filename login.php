<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convertor</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="newhome.css">
</head>
<body>
    <div class="container">
        <div class="header">
          <h1>LOGIN</h1>
        </div>
        <div class="date">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="Index.html"><i class="fas fa-home"></i>Home</a>
                <a href="news.html">News</a>
                <a href="contact.html">Contacts</a>
                <a href="currency.html">Currency</a>
                <a href="length.html">Length</a>
                <a href="weight.html">Weight</a>
                <a href="speed.html">Speed</a>
                <a href="temperature.html">Temperature</a>
            </div>
            <div id="main">
                <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
            </div>
            
        </div>
        
        <div class="contactus">
            <h1>User Login</h1><hr style="width: 99%;">
            <form method="post" action="login.php">
            <?php echo display_error(); ?>
            
                <div class="input-group">
                    <label>Username</label>
                    <input type="text" name="username" required>
                </div>
                <div class="input-group">
                    <label>Password</label>
                    <input type="password" name="password" required>
                </div>
                <div class="loginbtn" style="margin: 1rem; background-color: red;">
                    <button type="submit" name="login_btn"  style="margin-left: 6rem;background:none;margin-left:9rem;">Login</button>
                </div>
                <p>
                    Not yet a member? <a href="register.php" style="color:blue">Sign up</a>
                </p>
            </form>
        </div>
        
        <div class="last"><i>&copy;</i> Joojo's productions 2020.</div>

    <script src="/scripts/sidenav.js"></script>
</body>
</html>