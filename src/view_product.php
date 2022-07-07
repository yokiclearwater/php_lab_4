<?php
session_start();
include 'config.php';

if(isset($_GET['view'])){
    $id = $_GET['view'];
    $query = $fluent -> from('products')->where('id',$id);
    $product = $query->fetch();
    
}else{
    $product = array('id'=> 0, 'name'=>'Empty','amount'=>0,'user_id'=>0,'price'=>0);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information_Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-5 pt-5" method="POST">       
    <div class="col-10 col-md-6 col-lg-4 m-auto">
        <div class="card border-5px shadow" >
            <div class="card-body">
            <h3 class="text-success ms-1"> Information </h3>
                <table class="table table-hover ">       
                <tbody>
                        <tr>
                            <th>ID: </th>
                            <td>
                               <?php
                               echo $product['id'];
                               ?>
                            </td>
                        </tr>
                        <tr>
                        <th >Name:</th>
                        <td>
                        <?php
                               echo $product['name'];
                        ?>
                        </td>
                        <tr>
                        <th >Amount:</th>
                        <td>
                        <?php
                               echo $product['amount'];
                         ?>
                        </td>
                        <tr>
                        <th >User_Id:</th>
                        <td> 
                        <?php
                               echo $product['user_id'];
                        ?>
                        </td>
                        <tr>
                        <th >Price:</th>
                        <td>
                        <?php
                               echo $product['price'];
                        ?>    
                        </td>     
                        </tr>
                                               
                    </tbody>
                </table>

                <a href="index.php">
                <button type="button" class="btn btn-info ">Back</button>
                </a>
            
            </div>    
        </div>  
    </div>  
</div>                
</body>
</html>

