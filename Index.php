<?php include('functions.php') ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="newhome.css">
   
</head>
<body>
    <div class="container">
        <div class="header">
          <h1>Conversions...</h1>
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
                <a href="time.html">Time</a>
            </div>
            <div id="main">
                <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
        </div>
        
            <ol>
                <li> <a href="register.php" style="text-decoration:none;"> <button>Sign Up</button> </a> </li>
                <li>|</li>
                <li> <a href="login.php" style="text-decoration:none;" > <button>Log In</button> </a></li>                
            </ol>

        </div>

        <!--Slider-->
        <div id="nav">
			<div class="slider">
                <img src="images/Timer2.jpg" class="img">
                <img src="images/weight.jpg" class="img">
                
            </div>
            <section>
                <p>
			          	<label>Conversion of inter-national Currency and Scientific Units</label><br>
                   Conversions made easy with comfort and with values you can trust always!!...</p>
                
				
                <div id="al">
                    <div id="li"><a href="currency.html" title=" to currency page">Currency</a></div>
                        <div id="li"><a href="Length.html" title=" to length page">Length</a></div>
                    <div id="li"><a href="Weight.html" title=" to weigth page">Weight</a></div>
                    <div id="li"><a href="speed.html" title=" to weigth page">Speed</a></div> 
                    <div id="li"><a href="Temperature.html" title=" to temperature page">Temperature</a></div>
                    <div id="li"><a href="time.html" title=" to time page">Time</a></div>
				</div>

          </section>
        </div>
               
            <div class="last"><i>&copy;</i> Joojo's productions 2020.</div>
    </div>    
            
           <script type="text/javascript">

                function openNav() {
                    document.getElementById("mySidenav").style.width = "250px";
                }
                
                function closeNav() {
                  document.getElementById("mySidenav").style.width = "0";
                }

                
            </script> 
           

</body>
</html>