<?php include 'header.php';
require_once 'connection.php';
$objConnect = new Connection();
$result = $objConnect->listAll("SELECT * FROM projects");
?>

<div class="p5 bg-light">
    <div class="container">
        <h1 class="display-3">Welcome</h1>
        <p class="lead">Jumbo Helper Text</p>
        <hr class="my-2">
        <p>More Info</p>
        <?php foreach ($result as $item) {?>
        <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header"><?php echo 'Details project #'.$item['id']?></div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $item['name']?></h5>
                <p class="card-text"><?php echo $item['description']?></p>
            </div>
        </div>
        <?php }?>

    </div>
</div>

</div>

<?php include 'footer.php' ?>

