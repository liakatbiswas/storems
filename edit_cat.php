<?php
include 'connection.php';
$title = "Edit Category";
include 'header.php';
?>

<?php
if (isset($_GET["edit_id"])) {
 $edit_id = $_GET["edit_id"];
 $sql     = "SELECT * FROM category WHERE cat_id = '$edit_id'";
 $query   = $conn->query($sql);
 $data    = $query->fetch_assoc();

}
?>

<section class="container-fluid">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $cat_name_edit  = $_POST["cat_name"];
 $cat_input_edit = $_POST["cat_input"];
 $sql_update     = "UPDATE category SET cat_name= '$cat_name_edit', cat_input= '$cat_input_edit' WHERE cat_id = '$edit_id'";
 $query_update   = $conn->query($sql_update);

 if ($query_update) {
  echo "<div class='alert alert-success'>
  <strong>Success!</strong> Indicates a successful or positive action.
</div>";
  // header('location: cat_list.php');
  // echo "<meta http-equiv='refresh' content='0; URL=cat_list.php'>";
 } else {
  echo "Not Inserted!";
 }
} ?>

        <form action="" method="POST">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2>Category Table</h2>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cat_name" class="form-label">Category Name</label>
              <input type="text" name="cat_name" id="cat_name" class="form-control"
                value="<?php if (isset($data['cat_name'])) {echo $data['cat_name'];} ?>">
            </div>

            <div class="col-md-6 mb-3">
              <label for="cat_input" class="form-label">Category Input</label>
              <input type="date" name="cat_input" id="cat_input" class="form-control"
                value="<?php if (isset($data['cat_input'])) {echo $data['cat_input'];} ?>">
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
