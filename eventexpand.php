<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="img/logofinal.png">
    <title>Events</title>

    <meta name="#" content="#" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/header.css">
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre&family=Abril+Fatface&family=Quantico:ital@1&family=Raleway:wght@200&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style>

        .img{
            width:100%;
            height:auto;
        }

        .raleway{
            font-family: 'Raleway',sans-serif;
        }

        a{
            text-decoration:none;
        }

        .other{
            font-family: 'Quantico',sans-serif;
        }
       .laptopstart{
        border-left: 1px solid #16f4d3;
       }

       
       @media(max-width:568px) {
        .laptopstart{
            border-left: none;
            border-top: 1px solid #16f4d3;
           text-align:center !important;
       }
}
    </style>
</head>
<body>
    <?php $id = $_GET['id'];?>
    <?php include 'partials/dbconnect.php';?>
    <div id="myNav" style="display:none;" class="overlay animate-left">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <div class="container">
                <h1 style="size:30px;font-size: 80px; color: white;font-family: 'Quantico',sans-serif;" id="demo"></p>
                <!-- <button onclick="myVar = setTimeout(closeNav, 3000)">Launch</button> -->
            </div>
        </div>
    </div>
    <div class="page">       
    <?php  include 'partials/header.php';?>
    <?php
        $sql = "SELECT * FROM `Events`  WHERE Id=$id";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){                 
            $id = $row['Id'];
            $Eventname = $row['Eventname'];
            $Description = $row['Description'];
            $Eventdate = $row['Eventdate'];
            $image1 = $row['image1'];
            $image2 = $row['image2'];
            $image3 = $row['image3'];
            $image4 = $row['image4'];
            $image5 = $row['image5'];
            $timestamp = $row['timestamp'];
            
        }

        echo'
        <div class="vision">
            <div style="background:url(img/background.PNG);background-size: cover;background-attachment: fixed;" >
                <div style="padding-top:70px;" class="container">
                    <div style="padding:60px;" class="barred">
                        <center>
                            <h1 style="color:black;">'.$Eventname.'</h1>
                        </center>
                    </div>
                </div>
            </div>
        ';
        echo'
            <div style="padding-bottom: 40px;" class="container">
                <center>
                    <div style="padding-top:50px;padding-bottom:50px;max-width: 660px;">
                        
                         
                        <div class="container">
                        <h2 class="other">Event Date :</h2>
                        <h2 class="raleway"> '.$Eventdate.'</h2>                    
                        <h3 class="other">Description: </h2>
                        <h2 class="raleway">'.$Description.'</h3>
                        </div>              

                    </div>
                </center>

                <div class="container">

                    <div class="container">
                        <center>
                        <h2 class="other">Photoes</h2>
                        </center>
                    </div>


                    <div class="row" >
                        <div class="col-lg-6 col-xs-12 col-sm-6 my-3">
                            <img class="img" src="img/events/'.$Eventname.'/'.$image1.'" alt="">
                        </div>
                        <div class="col-lg-6 col-xs-12 col-sm-6 my-3">
                            <img class="img" src="img/events/'.$Eventname.'/'.$image2.'" alt="">
                        </div>
                        <div class="col-lg-6 col-xs-12 col-sm-6 my-3">
                            <img class="img" src="img/events/'.$Eventname.'/'.$image3.'" alt="">
                        </div>
                        <div class="col-lg-6 col-xs-12 col-sm-6 my-3">
                            <img class="img" src="img/events/'.$Eventname.'/'.$image4.'" alt="">
                        </div>
                        <div class="col-lg-6 col-xs-12 col-sm-6 my-3">
                            <img class="img" src="img/events/'.$Eventname.'/'.$image5.'" alt="">
                        </div>
                    </div>
                </div>
                ';                   
            ?>
                </div>
            </div>
            </div>

            

        </div>        
    </div> 

    <?php  include 'partials/footer.php';?>

    <script>
        function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
      // Toggle between showing and hiding the sidebar when clicking the menu icon
  var mySidebar = document.getElementById("mySidebar");
  
  function dk_open() {
    if (mySidebar.style.display === 'block') {
      mySidebar.style.display = 'none';
    } else {
      mySidebar.style.display = 'block';
    }
  }
  
  // Close the sidebar with the close button
  function dk_close() {
      mySidebar.style.display = "none";
  }
  
  //sticky navbar
  // When the user scrolls the page, execute myFunction
  window.onscroll = function() {myFunction()};
  
  // Get the navbar
  var navbar = document.getElementById("myTopnav");
  
  // Get the offset position of the navbar
  var sticky = navbar.offsetTop;
  
  // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
  function myFunction() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky")
    } else {
      navbar.classList.remove("sticky");
    }
  }

  var dropdown = document.getElementsByClassName("dropdown-btn-dk");
  var i;
  
  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent4 = this.nextElementSibling;
    if (dropdownContent4.style.display === "block") {
    dropdownContent4.style.display = "none";
    } else {
    dropdownContent4.style.display = "block";
    }
    });
  }
  
      //sidebar drop down
      var dropdown = document.getElementsByClassName("dropdown-btn");
      var i;
  
      for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
      } else {
      dropdownContent.style.display = "block";
      }
      });
      }
  
    </script>

    
    <script src="script.js"></script>
     <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
</body>
</html>
