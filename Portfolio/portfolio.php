<?php include('header.php'); ?>
<?php include('connection.php') ?>
<?php
if($_POST){
    //print_r($_FILES);
    $objConnect = new connection();
    $project = $_POST['project'];
    $image = $_FILES['image']['name'];
    $description = $_POST['description'];
    $sql = "INSERT INTO projects (name, image, description) VALUES (:name, :image, :description)";
    $params = [
        ':name' => $project,
        ':image' => $image,
        ':description' => $description
    ];
    $objConnect->executeSQL($sql, $params);

}

if ($_GET){
    $objConnect = new connection();
    $sql = "DELETE FROM projects WHERE id =".$_GET['delete'];
    try {
        $objConnect->executeSQL($sql);
    } catch (Exception $e) {
    }
}
$objConnect = new connection();
$result = $objConnect->listAll("SELECT * FROM projects");
//print_r($result);

?>

<div class="container">

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Project Details</h5>
                </div>
                <div class="card-body">
                    <form action="portfolio.php" method="post" enctype="multipart/form-data">
                        <label for="project">Project's Name: </label>
                        <input class="form-control" type="text" name="project" id="txtProject"><br>
                        <label for="image">Project's Image</label>
                        <input class="form-control" type="file" name="image" id="imgProject"><br>
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="txtDescription" cols="30" rows="3"></textarea><br>
                        <button class="btn btn-success" type="submit">Save Project</button>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($result as $item) {?>
                    <tr>
                        <td><?php echo $item['id'];?></td>
                        <td><?php echo $item['name'];?></td>
                        <td><?php echo $item['description'];?></td>
                        <td><?php echo $item['image'];?></td>
                        <td><a href="?delete=<?php echo $item['id'];?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>




</div>


<?php include 'footer.php' ?>

