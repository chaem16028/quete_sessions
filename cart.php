<?php require 'inc/head.php';


if (!isset($_SESSION['nom'])){
    header('Location: /index.php');
}


?>

<section class="cookies container-fluid">
    <div class="row">
        <?php echo"<br>VOUS AVEZ CHOISI  ".$_SESSION['name']."  ". $_SESSION['description'];?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
