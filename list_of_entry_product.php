<?php
include 'connection.php';
$title = "Edit Product";
include 'header.php';
?>

<?php
$sql_cat   = "SELECT * FROM product";
$query_cat = $conn->query($sql_cat);

$cat_list = array();

while ($data_cat = $query_cat->fetch_assoc()) {
 $cat_id            = $data_cat['product_id'];
 $cat_name          = $data_cat['product_name'];
 $cat_list[$cat_id] = $cat_name;

} ?>


<section class="container-fluid mt-3">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">

        <table class="table table-dark table-hover">
          <thead class="thead-dark">
            <tr>
              <th>Store Product ID</th>
              <th>Store Product Name</th>
              <th>Store Product Quentity</th>
              <th>Store Product Entry Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

            <?php
$sql   = "SELECT * FROM store_product";
$query = $conn->query($sql);
while ($data = $query->fetch_assoc()) { ?>
            <tr>
              <td><?php echo $data["store_product_id"]; ?></td>
              <td><?php echo $cat_list[$data["store_product_name"]]; ?></td>
              <td><?php echo $data["store_product_quentity"]; ?></td>
              <td><?php echo $data["store_entry_date"]; ?></td>
              <td>
                <a href="edit_product.php?edit_id=<?php echo $data["store_product_id"]; ?>"> <i
                    class="fa fa-user-edit"></i>
                </a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>
</section>




<?php
include 'footer.php';
?>
