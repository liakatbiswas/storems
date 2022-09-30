<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title><?php if (isset($title)) {echo $title;} ?></title>
    <!-- Bootstrap & CSS -->
    <link rel="stylesheet" href="./assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
  </head>

  <body>
    <section class="container-fluid mt-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">

            <header>
              <a href="./index.php" class="btn btn-primary ml-3">Home</a>
              <a href="./category.php" class="btn btn-primary ml-3">Add Category</a>
              <a href="./cat_list.php" class="btn btn-primary ml-3">Category List</a>
              <a href="./add_product.php" class="btn btn-primary ml-3">Add Product</a>
              <a href="./product_list.php" class="btn btn-primary ml-3">Product List</a>
            </header>

          </div>
        </div>
      </div>
    </section>
