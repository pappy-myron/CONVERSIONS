<?php 
    include('functions.php');
    

    if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
?>

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
          <h1>USER - HOME</h1>
        </div>
        <div class="date">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="Index.php"><i class="fas fa-home"></i>Home</a>
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
            <h1>User</h1><hr style="width: 99%;">
            
            <div class="content" style="background-color:white;">
                <!-- notification message -->
                <?php if (isset($_SESSION['success'])) : ?>
                    <div class="error success" >
                        <h3>
                            <?php 
                                echo $_SESSION['success']; 
                                unset($_SESSION['success']);
                            ?>
                        </h3>
                    </div>
                <?php endif ?>
                <!-- logged in user information -->
                <div class="profile_info" style="padding: 1rem; display: flex;">
                    <img src="images/ava3.png" style="width: 5rem; height: 6rem;" >
        
                    <div class="mini" style="padding: 0.8rem; color: white;">
                        <?php  if (isset($_SESSION['user'])) : ?>
                            <strong style="font-size: 1.1rem; padding: 0.4rem;color:black"><?php echo $_SESSION['user']['username']; ?></strong>
        
                            <small style="padding: 0.4rem">
                                <i style="color: #ccc; padding-bottom: 1rem;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
                                <br>
                                <article style="padding-top: 1.3rem;">
                                <a href="user_home.php?logout='1'" style="color: red;font-size: 1.3rem">logout</a>
                                </article> 
                              </small>
        
                        <?php endif ?>
                    </div>
                </div>
            </div>

            <div class="comment" style="padding:1rem;">
                <p style="text-align:left;">Type a question, suggestion or contribution ...</p>
                <textarea style="color:black;margin-top:1rem;width=90%" name="textie" id="tam" cols="50" rows="8" placeholder="Type here">
                </textarea>
                <button onclick="fini()">Done</button>
              </div>
        </div>

        
        <div class="last"><i>&copy;</i> Joojo's productions 2020.</div>
        
        <script type="text/javascript">

                function openNav() {
                    document.getElementById("mySidenav").style.width = "250px";
                }
                
                function closeNav() {
                  document.getElementById("mySidenav").style.width = "0";
                }
                    var temp;
                function fini(){
                    temp = document.getElementById('tam').value;
                    alert(temp);
                    document.getElementById('tam').value = "";
                }

                
            </script> 
   
</body>
</html>