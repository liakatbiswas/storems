<?php
include 'connection.php';
$title = "Edit Product";
include 'header.php';
?>
<?php
if (isset($_GET['edit_id'])) {
 $edit_id = $_GET['edit_id'];

 $sql   = "SELECT * FROM product WHERE product_id = '$edit_id'";
 $query = $conn->query($sql);
 $row   = $query->fetch_assoc();

 $product_id         = $row["product_id"];
 $product_name       = $row["product_name"];
 $product_category   = $row["product_category"];
 $product_code       = $row["product_code"];
 $product_entry_date = $row["product_entry_date"];

}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $product_name       = $_POST["product_name"];
 $product_category   = $_POST["product_category"];
 $product_code       = $_POST["product_code"];
 $product_entry_date = $_POST["product_entry_date"];

 $sql_update = "UPDATE product SET
 product_name= '$product_name',
 product_category= '$product_category',
 product_code= '$product_code',
 product_entry_date= '$product_entry_date'
 WHERE product_id = '$edit_id'";

 $query_update = $conn->query($sql_update);

 if ($query_update) {
  echo "<div class='alert alert-success'>
  <strong>Success!</strong> Indicates a successful or positive action.
</div>";

  // header('location: cat_list.php');
  // echo "<meta http-equiv='refresh' content='0; URL=edit_product.php'>";
 } else {
  echo "Not Inserted!";

 }

} ?>



<section class="container-fluid">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <form action="" method="POST">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2><?php echo $title; ?></h2>
            </div>

            <div class="col-md-6 mb-3">
              <label for="product_name" class="form-label">Product Name</label>
              <input type="text" name="product_name" id="product_name" class="form-control"
                value="<?php if (isset($product_name)) {echo $product_name;} ?>">
            </div>


            <div class="col-md-6 mb-3">
              <label for="product_category" class="form-label">Product Category</label>
              <select name="product_category" id="product_category" class="form-select">
                <?php
$sql   = "SELECT * FROM category";
$query = $conn->query($sql);
while ($data = $query->fetch_assoc()) { ?>
                <option value="<?php echo $data['cat_id']; ?>"
                  <?php if ($data['cat_id'] == $product_category) {echo 'selected';} ?>><?php echo $data['cat_name']; ?>
                </option>
                <?php } ?>
              </select>
            </div>

            <div class="col-md-6 mb-3">
              <label for="product_code" class="form-label">Product Code</label>
              <input type="text" name="product_code" id="product_code" class="form-control"
                value="<?php if (isset($product_code)) {echo $product_code;} ?>">
            </div>

            <div class="col-md-6 mb-3">
              <label for="product_entry_date" class="form-label">Product Entry Date</label>
              <input type="date" name="product_entry_date" id="product_entry_date" class="form-control"
                value="<?php if (isset($product_entry_date)) {echo $product_entry_date;} ?>">
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
