<?php
include 'connection.php';
$title = "Add Category";
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
 $cat_name  = $_POST["cat_name"];
 $cat_input = $_POST["cat_input"];

 $sql = "INSERT INTO category (cat_name, cat_input) VALUES('$cat_name','$cat_input')";

 $sql_query = $conn->query($sql);

 if ($sql_query) {
  echo "<div class='alert alert-success'>
  <strong>Success!</strong> Indicates a successful or positive action.
</div>";

  // header('location: cat_list.php');
  echo "<meta http-equiv='refresh' content='0; URL=cat_list.php'>";
 } else {
  echo "Not Inserted!";

 }

} ?>
              <h2>Category Table</h2>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cat_name" class="form-label">Category Name</label>
              <input type="text" name="cat_name" id="cat_name" class="form-control" placeholder="Category Name">
            </div>


            <div class="col-md-6 mb-3">
              <label for="cat_input" class="form-label">Category Input</label>
              <input type="date" name="cat_input" id="cat_input" class="form-control">
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
