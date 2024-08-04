<?php include('header.php'); ?>
<?php include('connection.php') ?>
<?php
if($_POST){
    //print_r($_FILES);
    $objConnect = new Connection();
    $project = $_POST['project'];
    $date = new DateTime();
    $image = $date->getTimestamp()."_".$_FILES['image']['name'];
    $tempImage = $_FILES['image']['tmp_name'];
    move_uploaded_file($tempImage, "images/".$image);
    $description = $_POST['description'];
    $sql = "INSERT INTO projects (name, image, description) VALUES (:name, :image, :description)";
    $params = [
        ':name' => $project,
        ':image' => $image,
        ':description' => $description
    ];
    $objConnect->executeSQL($sql, $params);
    header("location:portfolio.php");
}
if ($_GET){
    $objConnect = new connection();
    $id=$_GET['delete'];
    $image = $objConnect->listAll("SELECT image FROM projects WHERE id =" . $id);
    unlink("images/".$image[0]['image']);
    $sql = "DELETE FROM projects WHERE id =".$_GET['delete'];
    header("location:portfolio.php");

    try {
        $objConnect->executeSQL($sql);
    } catch (Exception $e) {
    }
}
$objConnect = new Connection();
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
                        <input class="form-control" required type="text" name="project" id="txtProject"><br>
                        <label for="image">Project's Image</label>
                        <input class="form-control" required type="file" name="image" id="imgProject"><br>
                        <label for="description">Description</label>
                        <textarea class="form-control" required name="description" id="txtDescription" cols="30" rows="3"></textarea><br>
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
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($result as $item) {?>
                    <tr>
                        <td><?php echo $item['id'];?></td>
                        <td><?php echo $item['name'];?></td>
                        <td><?php echo $item['description'];?></td>
                        <td>
                            <img src="images/<?php echo $item['image']?>" alt="" width="30%", height="20%">
                        </td>
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

