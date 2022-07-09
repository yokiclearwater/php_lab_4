<?php
include 'config.php';
session_start();


if (isset($_REQUEST['id'])) {

    $id = $_REQUEST['id'];

    $query = $fluent->from('products')->where('id', $id);
    $row = $query->fetch();

    $name = $row['name'];
    $amount = $row['amount'];
    $price = $row['price'];
    $pd_id=$row['id'];
  
}


if (isset($_POST['submit'])) {
    $product_id=$_POST['productid'];
    $name = $_POST['name'];
    $amount = $_POST['amount'];
    $price = $_POST['price'];
    
    $set =array('name' => $name,'amount'=> $amount, 'price' => $price);
    $query=$fluent->update('products')->set($set)->where('id', $product_id)->execute();
    
    header('Location: index.php');
     
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 pt-5">
        <div class="col-8 m-auto">
            <div class="card border-5px shadow">
                <div class="card-body">
                    <h2 class="text-muted ms-1"> Edit Product </h2>

                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                        <input type="hidden" name="productid" value="<?php echo $pd_id ?>" >
                        <input type="text" name="name" id="" class="form-control my-4 py-2" placeholder="Product Name" value="<?php echo $name ?>">
                        <input type="text" name="amount" id="" class="form-control my-4 py-2" placeholder="Amount" value="<?php echo $amount ?>">
                        <input type="text" name="price" id="" class="form-control my-4 py-2" placeholder="Price" value="<?php echo $price ?>">
                        <button name="submit" type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>