<?php $title= "Connexion";
include('partials/_header.php');
include('partials/_errors.php');
?>

<div class="container mt-auto mb-auto p-md-5">
     <?php include('partials/_flash.php'); ?>

  <form method="post" class="col-md-6 d-block ml-auto mr-auto mt-5">

    <h3>Login</h3>

    <div class="content">

      <!-- Identifiant -->
      <div class="form-group">
        <label for="identifiant" class="control-label">Pseudo or Email:</label>
        <input type="text" name="identifiant" class="form-control" id="identifiant" value="<?php if (isset($_POST['identifiant'])){echo $_POST['identifiant'];} ?>" required>
      </div>

      <!-- Mot de passe -->
      <div class="form-group">
        <label for="password" class="control-label">Passworld:</label>
        <input type="password" name="password" class="form-control" id="password" required autocomplete="off">
      </div>

      <input type="submit" class="btn btn-primary d-block ml-auto" value="login" name="login">

    </div>

  </form>
  <form name="index," action="index.php" method="Post" style="margin-left: 280px";>
      <input type="submit" class="btn btn-default mt-3" value="Home">
    </form>

</div>

<?php include('partials/_footer.php'); ?>
