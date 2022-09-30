<?php
include 'connection.php';
$title = "Store Product";
include 'header.php';
include 'my_function.php';
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
 $store_product_name     = $_POST["store_product_name"];
 $store_product_quentity = $_POST["store_product_quentity"];
 $store_entry_date       = $_POST["store_entry_date"];

 $sql = "INSERT INTO store_product (store_product_name, store_product_quentity, store_entry_date)
 VALUES('$store_product_name','$store_product_quentity','$store_entry_date')";

 $sql_query = $conn->query($sql);

 if ($sql_query) {
  echo "<div class='alert alert-success'>
  <strong>Success!</strong> Indicates a successful or positive action.
</div>";

  // echo "<meta http-equiv='refresh' content='0; URL=product_list.php'>";
 } else {
  echo "Not Inserted!";

 }

} ?>
              <h2><?php echo $title; ?></h2>
            </div>

            <div class="col-md-6 mb-3">
              <label for="store_product_name" class="form-label">Product Name</label>
              <select name="store_product_name" id="store_product_name" class="form-select">
                <?php data_liat('product', 'product_id', 'product_name'); ?>
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label for="store_product_quentity" class="form-label">Product Quentity</label>
              <input type="text" name="store_product_quentity" id="store_product_quentity" class="form-control"
                placeholder="Product Quentity">
            </div>

            <div class="col-md-6 mb-3">
              <label for="store_entry_date" class="form-label">Story Entry Date</label>
              <input type="date" name="store_entry_date" id="store_entry_date" class="form-control">
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
