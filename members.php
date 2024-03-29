<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="img/logofinal.png">
    <meta name="#" content="#" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Our members</title>
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
        p {
            margin-top: 0;
            margin-bottom: 0rem;
        }
            .center {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 170px;
        }

       .laptopstart{
           text-align:start !important;
       }

       .image{
        height:auto;
        width:70%;

       }
       
       @media(max-width:768px) {
           .image{
        height:auto;
        width:30%;

       }
       }

       @media(max-width:568px) {
        .image{
        height:auto;
        width:40%;

       }
        .laptopstart{
           text-align:center !important;
       }

       .img-responsive{
           padding-top:50px;
           padding-bottom:30px;
       }
}
h3{
    font-family: 'Quantico',sans-serif;
}

p{
    font-family: 'Quantico',sans-serif;
}
a{
    text-decoration:none;
    color:black;
}
    </style>
</head>
<body>
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
        <div class="vision">
            <div style="background:url(img/background.PNG);background-size: cover;background-attachment: fixed;" >
                <div style="padding-top:70px;" class="container">
                    <div style="padding:60px;" class="bar">
                        <center>
                            <h1 style="color:black;font-family: 'Quantico',sans-serif;">Our members</h1>
                        </center>
                    </div>
                </div>
            </div>
            
            <div style="padding-bottom: 40px;" class="container">
                <center>
                    <div style="padding-top:50px;padding-bottom:50px;max-width: 660px;">
                        

                    <?php
                    $sql = "SELECT * FROM `Acc_inst` ORDER BY `created` ";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){                        
                        $id = $row['ID'];
                        $Name = $row['Name'];
                        $member = $row['membership_no'];
                        $mobile = $row['mobile_no'];
                        $address = $row['address'];
                        $created = $row['created'];
                        $logo = $row['logo'];
                        $website = $row['website_url'];


                        if (!empty($website)){
                            echo'
                            <a href="'.$website.'" target="_blank">
                            ';
                        }
                         else{
                         echo'
                             <a href="">
                            ';
                        }    
                        echo'                        
                        <div style="padding-top: 15px;padding-bottom: 15px;">
                            <div style="padding:20px;" class="container">
                                <div style="box-shadow: 0 3px 5px -1px rgb(0 0 0 / 8%), 0 5px 8px 0 rgb(0 0 0 / 12%), 0 1px 14px 0 rgb(0 0 0 / 6%);" class="row">
                                    <div class="col-lg-3 col-md-3 col-xs-3">
                                        <center>
                                            <div class="center img-responsive" >';
                                            if (!empty($logo)){
                                                echo'
                                                <img class="image" src="img/companylogo/'.$logo.'" alt="'.$Name.'">
                                                ';
                                            }
                                             else{
                                             echo'
                                                <img class="image" src="img/companylogo/logofinal.png" alt="'.$Name.'">
                                                ';
                                            }    
                                            echo'
                                            </div>
                                        </center>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-xs-9">
                                        <div style="padding:20px;" class="laptopstart container">
                                            <h3 style="color:gray;" ><b>'. $Name .'</b></h3>
                                            <p>Membership No : '. $member .'</p>
                                            <p>No : '. $mobile .'</p>
                                            <p>Address : '. $address .'</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                        ';
                    }
                    ?>
                    </div>
                </center>
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
</body>
</html>
