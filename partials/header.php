<nav style="background: black">
    <!-- <div style="background:white;">
        <div class="cotainer">
            <center>
                <div>
                <center>
                    <a href="index.php" style="padding:30px;content-align:center;float:left;font-weight: 900;font-family: 'Raleway', sans-serif;"><center><img style="width:70px;height:auto;" src="img/logo1.png"></center></a>
            
                </center>
                </div>
            </center>
        </div>
    </div> -->
    <div class="topnav" id="myTopnav">
        <a href="index.php" style="padding: 5px 16px;float:left;font-weight: 900;font-family: 'Raleway', sans-serif;"><img style="width:50px;height:auto;" src="img/logofinal.png"></a>
        <a style="height: 60px;"></a>  
        
        <a  href="contactus.php">Contact</a>  
        
        <div class="dropdown" style="right:0px">
        <a href="products.php" class="dropbtn">Products</a>
        <div class="dropdown-content" style="right: 20px;">
            <a href="ready-mix-concrete.php">Ready mix concrete</a>
            <a href="water-resist-concrete.php">Water resist concrete</a>
            <a href="color-stamped-concrete.php">Color stamped concrete</a>
            <a href="self-compacted-concrete.php">Self commpacting concrete</a>
            <a href="light-weight-concrete.php">light weight concrete</a>      
            
        </div>
        </div>

        <a  href="aboutus.php">About</a>
        <a  href="index.php">Home</a>       

        <a href="javascript:void(0);" class="icon"  onclick="dk_open()">

        <div class="hamburger-menu">
            <div class="line line1"></div>
            <div class="line line2"></div>
            <div class="line line3"></div>
        </div> 
        </a>
    
    </div>
</nav>


<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="sidebar animate-left" style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="dk_close()" style="padding-top: 30px;font-size: 20px;">Close ×</a>
    <a  href="index.php" onclick="dk_close()">Home</a>      
    <a  href="aboutus.php" onclick="dk_close()">About</a>
    <a  href="products.php" onclick="dk_close()">Products</a>  
    <a  class="dropdown-btn">Overview
    <i class="fa fa-caret-down"></i>
    </a>
    <div class="dropdown-container">
    <a style="font-size: 17px;" href="ready-mix-concrete.php" onclick="dk_close()" >Ready mix concrete</a>
    <a style="font-size: 17px;" href="water-resist-concrete.php" onclick="dk_close()" >Water resist concrete</a>
    <a style="font-size: 17px;" href="color-stamped-concrete.php" onclick="dk_close()" >Color stamped concrete</a>
    <a style="font-size: 17px;" href="self-compacted-concrete.php" onclick="dk_close()" >Self commpacting concrete</a>
    <a style="font-size: 17px;" href="light-weight-concrete.php" onclick="dk_close()" >light weight concrete</a>
    </div>
    <a  href="contactus.php" onclick="dk_close()">Contact Us</a>
      
    
</nav>
