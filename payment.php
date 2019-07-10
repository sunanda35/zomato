
<?php
session_start();
if(empty($_SESSION)){
    header('Location:index.php');
    
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

<script>
$(document).ready(function(){
    $("#submitBtn").click(function(){
  alert("Payment ho gaya beta, ab ja maje kar and naya khana order kar,, Kush Rah");
});

});

</script>


<body style="background-color:#f2f2f2" onload="myLoading()">
<div id="loadingScreen"></div>
<?php include "includes/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-10 offset-1">

                        <h1 style="color: #EF1264" class="text-center mt-20"><b>Zomato</b></h1>
                        <p class="text-center">Bhai, fill up kar de be, kuch nahi hoga. Agar bohot dar lag raha hai toh, galat hi var de. Ase khali mat rakh, tereko pap lagega. Itna dar raha hai toh, Sun be BSDK, tu ase hi checkout kar, tere liye free hai. Baas tu button daba....</p>


                    <div class="card mt-20">
                        <div class="card-body">
                        <form class="needs-validation" novalidate>
        
            <h4 class="mb-3">Payment</h4>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" placeholder="e.g. John Doe" required>
                <small class="text-muted">Full name as displayed on card</small>
                
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" placeholder="e.g. 9898-9595-6565-1564" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" placeholder="e.g. 01/22" required>
               
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" placeholder="e.g. 123" required>
        
              </div>
            </div>
            <hr class="mb-4">
            <a href="home.php" id="submitBtn" class="btn btn-secondary btn-lg float-right rounded" type="submit">Continue to checkout</a>
          </form>
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