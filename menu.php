<?php
session_start();
if(empty($_SESSION)){
    header('Location:index.php');
}
else{
    $id=$_GET['id'];
    include "includes/dbHelper.php";
    $query1="SELECT * FROM `restaurant` WHERE `r_id` LIKE '$id'";
    $result=mysqli_query($connection,$query1);
    $result=mysqli_fetch_array($result);
}
?>

<?php
$_SESSION['vagBSDK']=$_POST['maaKIchu'];

?>

<html>
<head>
    <title>Home</title>
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
    $('.mybtn').one('click', function(e) {
        
        var id=$(this).data('id');

        var itemName=$('#item'+id).text();
        var price=parseInt($('#price'+id).text());
        
        $.post("menu.php", {"maaKIchu": itemName});
       
        $('#cart').append("<p>"+itemName+"</p>");
        $('#add').append("<p>"+price+"</p>");

   
    });

 
   
})


</script>


<body style="background-color:#f2f2f2" onload="myLoading()">
<div id="loadingScreen"></div>

<?php include "includes/header.php";     ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <img src="<?php echo $result['r_bg'];?>" style="width: 100%;height: 300px">
            <h1 class="" style="z-index:10000; margin-top: -100px; margin-left: 60px; font-family:verdana;color: #ffe000"> <b><i><?php echo $result['r_name'];?></i></b></h1>
        </div>

        <div class="col-12">
            <div class="row mt-100">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mt-20">
                                <?php
                                $query2="SELECT * FROM `menu` WHERE `r_id` LIKE '$id'";
                                $result2=mysqli_query($connection,$query2);
                                $counter=0;


                                while ($row=mysqli_fetch_array($result2)){
                                    $counter++;
                                    echo'                        
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-2 text-center">';
                                        if($row['m_type']=="Veg"){
                                            echo'<i class="fa fa-minus-circle fa-2x text-success"></i>';
                                        }
                                        else{
                                            echo'<i class="fa fa-minus-circle fa-2x text-danger"></i>';
                                        }

                                        echo'</div>
                                        <div class="col-7">
                                            <h5><b id="item'.$counter.'">'.$row['m_name'].'</b></h5>
                                            <p class="text-grey">Rs.<span class="text-grey" id="price'.$counter.'">'.$row['m_price'].'</span></p>
                                        </div>
                                        <div class="col-3">
                                            <button data-id="'.$counter.'" id="'.$counter.'" class="mybtn  btn btn-success btn-sm rounded">Add Item</button>
                                        </div>
                                    </div>
                                </div><hr>';
                                }
                                ?>


                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-4">
                   <div class="card bt-20">
                       <div style="min-height: 200px;" class="card-body">
                       <table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col" class="text-center">Name<hr></th>
      <th scope="col" class="text-center">Price<hr></th>
    </tr>
  </thead>
  <tbody>
        <tr>
         <td id="cart" class="text-center" scope="row"></td>
      <td id="add" class="text-center"></td>
      
    </tr>
    
  </tbody>
</table>
<div id="addVal"></div>
                       </div>
                       <hr><a href="#" data-toggle="modal" data-target="#exampleModal" style="margin-left: 30px; margin-right: 30px; margin-bottom: 30px" class="btn btn-primary btn-lg">Check Out</a>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <form class="form" action="order_val.php" method="post">
            <label>Your Address</label><br>
<input type="text" class="form-control" name="user_ka_address"><br>


<input type="submit" id="orderSubmit" class=" btn btn-primary btn-lg float-right" value="submit">


        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
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