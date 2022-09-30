<?php
include 'connection.php';
$title = "Store Product";
include 'header.php';
?>

<section class="container-fluid">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
          <div class="row">
            <div class="col-md-12 text-center">
              <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $product_name       = $_POST["product_name"];
 $product_category   = $_POST["product_category"];
 $product_code       = $_POST["product_code"];
 $product_entry_date = $_POST["product_entry_date"];

 $sql = "INSERT INTO product (product_name, product_category, product_code, product_entry_date) VALUES('$product_name','$product_category','$product_code','$product_entry_date')";

 $sql_query = $conn->query($sql);

 if ($sql_query) {
  echo "<div class='alert alert-success'>
  <strong>Success!</strong> Indicates a successful or positive action.
</div>";

  // header('location: cat_list.php');
  echo "<meta http-equiv='refresh' content='0; URL=product_list.php'>";
 } else {
  echo "Not Inserted!";

 }

} ?>
              <h2><?php echo $title; ?></h2>
            </div>
            <div class="col-md-6 mb-3">
              <label for="product_name" class="form-label">Product Name</label>
              <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Product Name">
            </div>


            <div class="col-md-6 mb-3">
              <label for="product_category" class="form-label">Product Category</label>

              <select name="product_category" id="product_category" class="form-select">
                <!-- <option selected>Select Product's Category</option> -->
                <?php
$sql   = "SELECT * FROM category";
$query = $conn->query($sql);
while ($data = $query->fetch_assoc()) { ?>
                <option value="<?php echo $data['cat_id']; ?>"><?php echo $data['cat_name']; ?></option>
                <?php } ?>
              </select>
            </div>


            <div class="col-md-6 mb-3">
              <label for="product_code" class="form-label">Product Code</label>
              <input type="text" name="product_code" id="product_code" class="form-control" placeholder="Product Code">
            </div>
            <div class="col-md-6 mb-3">
              <label for="product_entry_date" class="form-label">Product Entry Date</label>
              <input type="date" name="product_entry_date" id="product_entry_date" class="form-control">
            </div>

            <div class="col-md-12 text-center">
              <input type="submit" value="Submit">
            </div>

          </div>
        </form>


      </div>
    </div>
  </div>
</section>

<?php
include 'footer.php';
?>
