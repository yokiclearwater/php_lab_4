<?php
include 'config.php';
session_start();

if(!isset($_SESSION['id'])) {
    header('Location: login.php');
} else {
    $id = $_SESSION['id'];
}

$query = $fluent->from('products')->where('user_id', $id);
$products = $query->fetchAll();

if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = $fluent->delete()->from('products')->where('id', $id);
    $delete = $query->execute();
    header('Location: index.php');
}
// if(isset($_GET['view'])){
//     $id = $_GET['view'];
//     $_SESSION['product_id']=$_GET['view'];
//     header('Location: view_product.php');
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 pt-5">
        <div class="col-8 m-auto">
            <div class="card border-5px shadow">
                <div class="card-body">
                    <h2 class="text-muted ms-1"> Table </h2>
                    <a href="add_product.php"><button type="button" class="btn btn-primary my-3">+Add New</button></a>
                    <div class=" table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">User_Id</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($products as $row) {
                                    echo "<tr>";
                                    echo "<th scope='row'>{$row['id']}</th>";
                                    echo "<td>{$row['name']}</td>";
                                    echo "<td>{$row['amount']}</td>";
                                    echo "<td>{$row['user_id']}</td>";
                                    echo "<td>{$row['price']}</td>";
                                    echo "<td>
                                        <a href='view_product.php?view={$row['id']}'><button type='button' class='btn btn-info'>View</button></a>
                                        <button type='button' class='btn btn-success'>Update</button>
                                        <a href='index.php?delete={$row['id']}'><button type='button' class='btn btn-danger'>Delete</button></a>
                                    </td>";
                                    echo "</tr>";
                                }
                                
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>