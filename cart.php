<?php require 'inc/head.php';


if (!isset($_SESSION['nom'])){
    header('Location: http://localhost:5000/login.php');
}


?>

<section class="cookies container-fluid">
    <div class="row">
        <?php echo"<br>VOUS AVEZ CHOISI  ".$_SESSION['name']."  ". $_SESSION['description'];?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
