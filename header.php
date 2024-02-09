<?php
if(isset($_POST["vsearch"])){
echo '<script>window.location="search_result.php?product='.$_POST['product'].'"</script>';
}
if(isset($_POST["search"])){
echo '<script>window.location="search_result1.php?product='.$_POST['product'].'"</script>';
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="index.php"> Homyneeds</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="home.php"><i class="bi bi-house"></i>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="navbar-nav nav-item">
          <a class="nav-link" href="yourorder.php">  Orders</a>
        </li>
        <li class="navbar-nav nav-item">
          <a class="nav-link" href="track.php">Track</a>
        </li>
        <li class="navbar-nav nav-item">
          <a class="nav-link" href="logout.php"><i class="bi bi-box-arrow-right"></i> Log out</a>
        </li>
      </ul>
      <form class="d-flex" method="post">
        <input class="form-control me-2" type="search" placeholder="Search" name="product" aria-label="Search">
        <button class="btn btn-outline-success me-2" name="search" type="submit">Search</button>
        <button class="btn btn-outline-danger" name="vsearch" type="submit">VSearch</button>
      </form>
    </div>
  </div>
</nav>