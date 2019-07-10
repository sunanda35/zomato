<nav style="background-color: linear-gradiant(to right, green, white" class="navbar navbar-dark bg-nav">
<a  class="navbar-brand" href="restaurant.php"><b>Zomato</b></a>
<div class="btn-group">
  <button type="button" style="float: right; margin-right: 60px" class="btn btn-primary rounded dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <b><?php echo $_SESSION['p_name']; ?></b>
  </button>
  <div class="dropdown-menu">
  <a class="dropdown-item" href="restaurant.php">Admin Panel</a>
    <a class="dropdown-item" href="partner_profile.php">Edit Profile</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="logout.php">Log out</a>
  </div>
</div>

  </nav>