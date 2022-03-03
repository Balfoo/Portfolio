<?php
require('partials/_header.php');
?>

<div class="container">
  <h1 id="h1" class="text-center m-5">Welcome to Meet Mode</h1>
  <?php include('partials/_flash.php'); ?>
</div>
<section class=" text-center p-5 mt-4">
  <div class="container p-3">
  <img id="img" src="assets/image/logo clair.png">
    <h3 id="h3"class="text-center mb-3">Subscribe</h3>
    <form action="#" method="Post">
      <input type="email" name="email" class="form-control" placeholder="Enter a valid email">
      <input type="submit" name="send_new_client" class="btn btn-default mt-3" value="Ajouter">
    </form>
    <form id="site" name="site," action="../ptut/index.php" method="Post">
      <input type="submit" class="btn btn-default mt-3" value="Back to Site">
    </form>
  </div>
</section>

<?php
require('partials/_footer.php');
?>
