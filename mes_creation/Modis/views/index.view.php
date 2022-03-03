<?php
require('partials/_header.php');
?>

<div class="container">
  <h1 class="text-center m-5">Partie Client</h1>
  <?php include('partials/_flash.php'); ?>
</div>
<section class=" text-center p-5 mt-4">
  <div class="container p-3">
    <img class="img" src="assets/image/modis.png">
    <h3 class="text-white mb-3">Souscrire</h3>
    <form action="#" method="Post">
      <input type="email" name="email" class="form-control" placeholder="Entrer un mail valide">
      <input type="submit" name="send_new_client" class="btn btn-default mt-3" value="Souscrire">
    </form>
  </div>
</section>

<?php
require('partials/_footer.php');
?>
