<?php
session_start();
if(empty($_SESSION)){
    header('Location:index.php');
    
}
?>

<?php 
if(!empty($_SESSION['photo'])){
    $pphoto = $_SESSION['photo'];
}else{
    $pphoto ="p_logo.png";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">

<!--Bootstrap CDNs-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>


<body style="background-color:#f2f2f2" onload="myLoading()">

<div id="loadingScreen"></div>


<?php include "includes/header.php"; ?>


    <div class="container mt-20">
        <div class="row">
            <div class="col-10 offset-1">
               <div class="card">
                   <div class="card-body">
                   <div class="row">
                   <div class="col-4">
                   <img style="border-radius: 50%; height: 200px; width: 200px; margin-left: 20px" class="" src="<?php echo $pphoto
                   ?>"><hr>
                   
                   </div>
                   <div class="col-5">
                       <div class="card-body">
                           <h2><?php echo $_SESSION['name']; ?>'s Profile: </h2>
                           <h5>About: <?php echo $_SESSION['about']; ?></h5>
                           <h5>Phone no: <?php echo $_SESSION['phone'];  ?></h5>
                       </div>
                   </div>
               </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
    
    <div class="container mt-20">
        <div class="row">
            <div class="col-10 offset-1">
                <div class="row">
                    <div class="col-10 offset-1">
                        <div class="row">
                            <div class="col-12">
                                    
                                <?php 
                                $userID=$_SESSION['user_id'];   
            $connection=mysqli_connect("localhost","root","","zomato");
            $query111="SELECT * FROM `orders` WHERE `user_id` = '$userID'";
            $result=mysqli_query($connection, $query111);
            
            while($row=mysqli_fetch_array($result)){
                   echo '<div class="row">
                        <div class="col-7">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <h2>Orders: </h2>';
                                    
                                        echo '<h5 class="card-title"><span>'.$row['order'].'</span></h5>';
                                    
                                   echo '</div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h2>Address: </h2>';
                                        
                                            echo '<h4 style="background-color: #f2f2f2; padding: 5px" class="card-title">'.$row['address'].'</h4>';
                                        
                                   echo '</div>
                                </div>
                            </div>

                        </div></div>
                    </div><hr>';
                                        }
                        ?>
                     </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    

    <script>
    var preloader = document.getElementById('loadingScreen');
    function myLoading(){
        preloader.style.display = 'none';
    }
</script>
</body>
</html>