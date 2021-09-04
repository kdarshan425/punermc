<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="img/logofinal.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="img/urllogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/header.style.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,200;1,600;1,900&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Archivo:wght@300&family=Orbitron:wght@500&display=swap" rel="stylesheet">
    <title>Add Member</title>
    <link rel="stylesheet" type="text/css" href="styles/header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
    html{
        width:100%;
        height:100%;
    }
    @media (max-width: 570px){
        form {
            padding: 0 0rem !important;
        }}
        .user-image{
              height:200px;
              width:200px;
        }

        .profile-info{
            padding-top:50px;
            padding-bottom:20px;
            color:#8888A0;
            size:2.5rcm;
            font-family: 'Orbitron', sans-serif;
        }
        .exp-btn{
            position: relative;
            border: 2px solid;
            border-radius: 0px;
            padding: 1rem 1rem;
            font-size: 1rem;
            font-weight: 500;
            letter-spacing: 0.25px;
            line-height: 1.5rem;
            cursor: pointer;
            overflow: hidden;
            transition: all .3s, outline 0s;
            transition: all .3s, outline 0s;
            width: 150px;
            font-family: 'Orbitron', sans-serif;
        }
        
        .exp-btn.btn--voi{
            background-color:#6c63ff;
            color:white;
        }
        
        .exp-btn.btn--voi:hover {
            background-color: white;
            
            text-decoration: none;
        }
        label{
            font-family: 'Raleway', sans-serif;
        }
      </style>
</head>
<body>
    <?php include 'partials/header.php';
     include 'partials/dbconnect.php';?>


     <div style="width:100%;height:auto;background: url(img/bg.jpg);padding-top:70px;">
        <div style="padding:40px;" class="container">
        <center><h1 style="color:black;font-family: 'Raleway', sans-serif;">Add member </h1></center>
        </div>    
    </div>


     <?php
    $method = $_SERVER['REQUEST_METHOD'];
    
    if (isset($_POST['submit'])) {
        if($method=='POST'){
        // Insert into thread db
        $Name = $_POST['Name'];
        $member = $_POST['member'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];        
        $img = $_POST['img'];
        
        
        
        $Name = str_replace("<", "&lt;", $Name);
        $Name = str_replace(">", "&gt;", $Name); 
        $Name = str_replace("'", "\\'", $Name);

        $member = str_replace("<", "&lt;", $member);
        $member = str_replace(">", "&gt;", $member); 
        $member = str_replace("'", "\\'", $member);

        $img = str_replace("<", "&lt;", $img);
        $img = str_replace(">", "&gt;", $img); 
        $img = str_replace("'", "\\'", $img);

        $address = str_replace("<", "&lt;", $address);
        $address = str_replace(">", "&gt;", $address); 
        $address = str_replace("'", "\\'", $address);

        $contact = str_replace("<", "&lt;", $contact);
        $contact = str_replace(">", "&gt;", $contact); 
        $contact = str_replace("'", "\\'", $contact);

        
        
        // INSERT INTO `Acc_inst` (`ID`, `Name`, `membership_no`, `mobile_no`, `address`, `logo`, `created`) VALUES (NULL, 'a', 'a', 'a', 'a', 'a', CURRENT_TIMESTAMP);

        $sql1 =  "INSERT INTO `Acc_inst` (`ID`, `Name`, `membership_no`, `mobile_no`, `address`, `logo`, `created`) VALUES (NULL, '$Name', '$member', '$contact', '$address', '$img', CURRENT_TIMESTAMP);";
        $result = mysqli_query($conn, $sql1);

        if($result){           
            echo'
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                 <strong>Congrats!</strong> Field updated successfully !
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 
             </div>
            ';
             
         } else {
             echo '
             <div class="alert alert-warning alert-dismissible fade show" role="alert">
                 <strong>Nope!</strong> Some problem occured try again or contact us!
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
             ' ;
         }
        
    }
    }?>

    <div class="container">
        <div class="container">
            <div style="padding-top:20px;" class="container-1">
            
            
            <form method="post" action="<?php $_SERVER["REQUEST_URI"]?>" enctype="multipart/form-data"> 
                
                    <div class="profile-info" style="font-family: 'Raleway', sans-serif;"> <b>  Info :</b> </div>
                        <div class="mb-3">
                            <label style="font-size:1.3rcm;font-weight:bold;" for="validationTextarea" class="form-label lebel1">Company Name <span style="color:red;font-size:18px;">*</span></label>
                            <div class="input-group flex-nowrap">                
                                <input name="Name" type="text" class="form-control" placeholder="Name" aria-describedby="inputGroup-sizing-lg" aria-label="Challengename" aria-describedby="addon-wrapping" required>
                            </div>                
                        </div>                
                        <div class="mb-3">
                            <label style="font-size:1.3rcm;font-weight:bold;" for="validationTextarea" class="form-label lebel1">Membership No <span style="color:red;font-size:18px;">*</span></label>
                            <div class="input-group flex-nowrap">                
                                <input name="member" type="text" class="form-control" placeholder="Memborship No" aria-describedby="inputGroup-sizing-lg" aria-label="Challengename" aria-describedby="addon-wrapping" required>
                            </div>                
                        </div>   
                        <div class="mb-3">
                            <label style="font-size:1.3rcm;font-weight:bold;" for="validationTextarea" class="form-label lebel1">Contact No <span style="color:red;font-size:18px;">*</span></label>
                            <div class="input-group flex-nowrap">                
                                <input name="contact" type="text" class="form-control" placeholder="Contact No" aria-describedby="inputGroup-sizing-lg" aria-label="Challengename" aria-describedby="addon-wrapping" required>
                            </div>                
                        </div>   
                        <div class="mb-3">
                            <label style="font-size:1.3rcm;font-weight:bold;" for="validationTextarea" class="form-label lebel1">Address <span style="color:red;font-size:18px;">*</span></label>
                            <div class="input-group flex-nowrap">                
                                <input name="address" type="text" class="form-control" placeholder="Address" aria-describedby="inputGroup-sizing-lg" aria-label="Challengename" aria-describedby="addon-wrapping" required>
                            </div>                
                        </div>  
                        <div class="mb-3">
                            <label style="font-size:1.3rcm;font-weight:bold;" for="validationTextarea" class="form-label lebel1">Image URL <span style="color:red;font-size:18px;">*</span></label>
                            <div class="input-group flex-nowrap">                
                                <input name="img" type="text" class="form-control" placeholder="ex. logo.png" aria-describedby="inputGroup-sizing-lg" aria-label="Challengename" aria-describedby="addon-wrapping">
                            </div>                
                        </div>                 
                    </div>
                </div>
                
                
                <div class="container">
                    <div style="padding:50px;" class="cont-but">
                        <center>
                            <button style="background:#2e6e56db;font-family: 'Raleway', sans-serif;" class="exp-btn btn--voi" type="submit" name="submit" >Submit</button>
                        </center>
                    </div>
                </div>        
            </form>
                      
            </div>
        </div>
        
    </div>
    <?php include 'partials/footer.php'; ?>
    <script>
     setTimeout(function () {
  
    // Closing the alert
    $('.alert').alert('close');
    }, 5000);
    </script>

    <script src="script.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>
</html>