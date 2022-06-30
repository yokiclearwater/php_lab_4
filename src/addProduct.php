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
                    <h2 class="text-muted ms-1"> Add Product </h2>

                    <input type="text" name="name" id=""  class="form-control my-4 py-2" placeholder="Product Name" required>
                    <input type="text" name="amount" id=""  class="form-control my-4 py-2" placeholder="Amount" required>
                    <input type="text" name="user_id" id=""  class="form-control my-4 py-2" placeholder="User_Id" required>
                    <input type="text" name="price" id=""  class="form-control my-4 py-2" placeholder="Price" required>
                    <button type="button" class="btn btn-primary">Add</button>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>