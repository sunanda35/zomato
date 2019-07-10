<?php
session_start();
if(empty($_SESSION)){
    header('Location:index.php');
}


if(!empty($_GET)){
    $error=1;
    //echo $error;
    }else{
    $error=0;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Zomato Home</title>
<link rel="stylesheet" type="text/css" href="css/style.css">

<!--Bootstrap CDNs-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<script type="text/javascript">
$(document).ready(function () {
var error='<?php echo $error ?>';
if(error==1){
var errorCode='<?php echo $_GET['msg'] ?>';
if(errorCode==11){
$('#regResError').html('<p style="color: red">** Restaurant name exist.**</p>');
}
if(errorCode==12){
$('#regResError').html('<p style="color: red">Some error occured. Try again</p>');
}
if(errorCode==13){
    alert("Restaurant details uploaded successfully");
}
}
})
</script>

<script>
 $(document).ready(function(){
$('#RestaurantCard').hide();
$('#MenuCard').show();
$('#Menu').removeClass('btn-outline-primary');
    $('#Menu').addClass('btn-primary');
$('#Restaurant').click(function(){
    $(this).removeClass('btn-outline-danger');
    $(this).addClass('btn-danger');
    $('#Menu').addClass('btn-outline-primary');
    $('#Menu').removeClass('btn-primary');

    $('#RestaurantCard').show(255);
    $('#MenuCard').hide(255);

});
$('#Menu').click(function (){
    $(this).removeClass('btn-outline-primary');
    $(this).addClass('btn-primary');
    $('#Restaurant').addClass('btn-outline-danger');
    $('#Restaurant').removeClass('btn-danger');
 
    $('#RestaurantCard').hide(255);
    $('#MenuCard').show(255);
});

});

    </script>


<body class="bg-nav" onload="myLoading()">
<div id="loadingScreen"></div>

<?php include "includes/admin_header.php"; ?>
    <!--  Customize nav bar   -->
    <div class="container mt-20">
        <div class="row">
            <div class="col-10 offset-1">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                             <div class="col-4">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="<?php echo $_SESSION['r_photo'] ?>" alt="" class="card-img-top">
                                        <h3 class="card-title"><?php echo $_SESSION['r_name']; ?></h3>
                                        <h4><?php echo $_SESSION['r_Qui']; ?></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-7">
                            <div class="card">
                                <div id="SubmitToggle" class="card-title">
                                <ul style="list-style-type: none" class="container p-3 mb-5 rounded">
                    <li><a id="Menu" style="float:left; width: 49%" class="col-6 btn  btn-outline-primary  rounded" href="#">Menu</a></li>
                  <li><a id="Restaurant" style="float:left; width: 49%" class="col-6 btn btn-outline-danger rounded" href="#">Restaurant</a></li>
                </ul>
                                </div>
                                <div id="RestaurantCard" class="card-body"><hr>
                                <form class="form" enctype="multipart/form-data" action="change_store.php" method="post">
                                <h4 class="text-center">Change Restaurant Details</h4><br>
                                    <div id="regResError"></div>
                                    <label>Restaurant Name</label><br>
                                    <input type="text" class="form-control" name="restaurant_ka_name" required><br>

                                    <label>Restaurant Rating</label><br>
                                    <input type="text" class="form-control" name="restaurant_ka_rating" required><br>

                                    <label>Restaurant Cuisine</label><br>
                                    <input type="text" class="form-control" name="restaurant_ka_cuisine" required><br>

                                    <label>Restaurant Photo</label><br>
                                    <input class="form-control-file" type="file" name="restaurant_ka_photo" required><br><br>

                                    <input type="submit" id="submitStore" value="Register here" class="btn btn-primary btn-block">
                                </form>
                                </div>
                            </div>
                            <div class="card">
                                <div id="MenuCard" class="card-body">
                                 <form class="form" action="reg_menu.php" method="post">
                                 <h4 class="text-center">Create New menu</h4>
                                    <label>Menu</label><br>
                                    <input type="text" class="form-control" name="menu_ka_name" required><br>
                                    <label>Price</label><br>
                                    <input type="text" class="form-control" name="menu_ka_price" required><br>
                                    <label style="margin-bottom: 7px">Menu Type <label></label><br>
                                    <div style="margin-left: 60px" class="form-check">
                                    <input class="form-check-input" type="radio" name="mType" id="exampleRadios1" value="Non-Veg">
                                     <label class="form-check-label" for="exampleRadios1">Non-Veg</label>
                                    </div>
                                    <div style="margin-left: 60px" class="form-check">
                                     <input class="form-check-input" type="radio" name="mType" id="exampleRadios2" value="Veg" required>
                                     <label class="form-check-label" for="exampleRadios2">Veg</label>
                                        </div><br>

                                    <input type="submit" value="Create menu" class="btn btn-primary btn-lg">
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
    </div>




<!--  Pre-Loader Script     -->
<script>
    var preloader = document.getElementById('loadingScreen');
    function myLoading(){
        preloader.style.display = 'none';
    }
</script>
</body>
</html>