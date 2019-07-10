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
    $pphoto ="img/p_logo.png";
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
               <div class="card border-success">
                   <div class="card-body">
                   <div class="row">
                   <div class="col-4">
                   <img style="border-radius: 50%; height: 200px; width: 200px; margin-left: 20px" class="" src="<?php echo $pphoto ?>"><hr>
                   
                   </div>
                   <div class="col-6">
                       <div class="card-body">
                           <h1><?php echo $_SESSION['name']; ?>'s Profile: </h1>
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

    <div class="container mt-20 bt-20">
        <div class="row">
            <div class="col-10 offset-1">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                        <div class="col-4">
                            <div class="card border-info">
                                <img class="card-img-top" src="<?php echo $pphoto ?>">
                                <div class="card-body">
                                    <div class="card-title">
                                        
                                       <hr> <h4><?php echo $_SESSION['name']; ?></h4><hr>
                                        <button id="changeImage" style="text-align: center" class="btn btn-sm btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Change Image</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-8">
                             <div class="card border-secondary">
                                 <div class="card-body">
                                     <h3 class="text-canter"><b>Change Your Profile Information: </b></h3><hr>
                                    
                                 <form class="form" action="change_prf.php" method="post">
                                     <label> Change Your Name: </label>
                                     <input type="text" name="username" class="form-control" >
                                     <label> Change Email: </label>
                                     <input type="email" name="email" class="form-control" >
                                     <label> Change Your Bio: </label>
                                     <input type="text" name="about" class="form-control" >
                                     <label> Change Your Phone Number: </label>
                                     <input type="number" name="phone" class="form-control" ><br><br>
                                     <input type="submit" value="Change Information" class="btn btn-block bg-nav text-light">
                                    </form>
                                 </form>
                                 </div>

                             </div>
                         </div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    
<!-- modal -->

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog col-6 offset-3">
    <div class="modal-content">
      <div class="row">
          <div class="col-12">
          <div class="card">
          <div class="card-body">
              <div class="card-title">
                  <h3 class="text-center">Upload New Profile photo</h3><hr>
              </div>
              <div class="row">
                  <div class="col-12">
                      <div class="row">
                        <form enctype="multipart/form-data" action="p_update.php" method="post">
                        <input style="margin: 20px;" type="file" name="user_ka_photo">
                              <input  type="submit" class="btn btn-danger rounded" value="Upload">
                        
                        </form>

                      </div><hr>
                      <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
                  </div>
              </div>
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