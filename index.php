<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Bank</title>

    <!-- Including the bootstrap CDN -->
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script> 
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
    <!--Including style sheet-->
    <link rel="stylesheet" href="index.css">
    <!-- Icon -->
    <link rel="icon" height="50px" href="./images/letter-b.png">
    <script src="index.js"></script>
	
	
</head>
<body onload="loader()">

<!-- loader for splash screen -->
<section>
   <div id="loading">
    <div class="wrapper flex-center">
        <div class="container">
            <div class="container-dot dot-a">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-b">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-c">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-d">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-e">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-f">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-g">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-h">
            <div class="dot"></div>
            </div>
        </div>
    </div>
</div>
    
    <div class="container-fluid myclass" style="padding:0px; margin:0px;">
        <!--Navbar-->
        <nav class="navbar navbar-expand-sm  navbar-toggler navbar-light" style="background-color:transparent; background-color:#59bfff; opacity:1;"> 
            <img  height="90"src="./images/letter-b.png">
            &nbsp;
            <div class="navbar-brand font-weight-bold zoomIn animated" id="title" data-anijs="if: mouseover, do: slideInUp animated" style="color:white;font-family: 'Bodoni MT Black', cursive;font-size:4em;">
                &nbsp;Blue Bank
            </div>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="float:right;">
                <ul class="navbar-nav ml-auto font-weight-bold"  style="font-size:small; color:black; "> 
                    <li class="nav-item">
                        <a class="nav-link" href="viewcustomers.php" style="color:black;font-weight:1em;">
                            <div style="padding-left:20px;" >
                                <!-- <i class="material-icons"style="font-size: x-large;text-align:center;">
                                    account_circle
                                </i> -->
                                <img height="60"src="./images/multiple-users-silhouette.png">

                            </div>
                            VIEW COUSTOMERS
                        </a> 
                    </li> 
					<li class="nav-item">
                        <a class="nav-link" href="transferrecords.php" style="color:black;font-weight:1em;">
                            <div style="padding-left:20px;" >
                                <img height="60"src="./images/document.png">
                            </div>
                            R E C O R D S
                        </a> 
                    </li>  
                </ul> 
            </div>
        </nav> 
    
    <div>
        <div class="row" style="margin:0px; padding:0px;">
            <div class="col-sm font-weight-bold typing_effect" style="padding-left:10px;color:black;font-family:'Copperplate Gothic Light', cursive;font-size:2em;text-align:center;justify-content: center;">
             <p class="zoomIn animated" style="margin:30% auto;"> <span style="color:#0000ff;font-family:'Century Gothic'">
			 WELCOME TO BLUE BANK!!!!<br>
			 <span style="color:black;font-family:'Copperplate Gothic Light'">A place to make your transactions faster <br>
			 and save your time
			 <br><br>
			 <span style="color:black;font-family:'Avenir Next LT Pro Light'">Project By <br>
			 Sheetal S Harshini.
			 </p>
            </div>
            <div class="col-sm">
                <img id="square" class="slideInRight animated " height="800"src="./images/money_transfer_4.svg" alt="" style="align-self: flex-end;">
            </div>
        </div>
       
    </div>
	<!-- Footer -->
<div class="footer">
   <span style="font-family:verdana;">&copy;</span> 2021 Blue Bank. All rights reserved.
</div>
</div>

</section>
</body>

<script>
setTimeout(function(){$('#loading').hide();}, 500); 
  var preloader = document.getElementById("loading");
      function loader(){
        preloader.style.display = 'none';
      }
</script>
</html>