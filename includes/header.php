<nav style="background-color: linear-gradiant(to right, green, white" class="navbar navbar-dark bg-nav">
<a  class="navbar-brand" href="home.php"><b>Zomato</b></a>
<div class="btn-group">
  <button type="button" style="float: right; margin-right: 60px" class="btn btn-primary rounded dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <b><?php echo $_SESSION['name']; ?></b>
  </button>
  <div class="dropdown-menu">
  <a class="dropdown-item" href="home.php">home</a>
    <a class="dropdown-item" href="profile.php">Profile</a>
    <a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="logout.php">Log out</a>
  </div>
</div>

  </nav>