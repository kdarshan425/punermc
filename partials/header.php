<nav style="background: black">       
    <div style="background-color: white;" class="topnav" id="myTopnav">
        <a href="index.php" style="padding: 5px 16px;float:left;font-weight: 900;font-family: 'Raleway', sans-serif;"><img style="width:50px;height:auto;" src="img/logofinal.png"></a>
        <a style="height: 60px;"></a>  
        <a  href="events.php">Events</a> 
        <a  href="members.php">Members</a>       
        <a  href="contactus.php">Contact</a>              
        <a  href="index.php ">About</a>                

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
    <a href="javascript:void(0)" onclick="dk_close()" style="padding-top: 30px;font-size: 20px;">Close x</a>
    <a  href="index.php" onclick="dk_close()">Home</a>      
    <a  href="index.php " onclick="dk_close()">About</a>
    <a  href="events.php" onclick="dk_close()">Events</a>
    <a  href="contactus.php" onclick="dk_close()">Contact Us</a>
    <a  href="members.php" onclick="dk_close()">Our Members</a>  
</nav>