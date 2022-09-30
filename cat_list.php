<?php
include 'connection.php';
$title = "Category List";
include 'header.php';
?>

<section class="container-fluid mt-3">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">

        <table class="table table-dark table-hover">
          <thead class="thead-dark">
            <tr>
              <th>Category ID</th>
              <th>Category Name</th>
              <th>Category Input Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

            <?php
$sql   = "SELECT * FROM category";
$query = $conn->query($sql);
while ($data = $query->fetch_assoc()) { ?>
            <tr>
              <td><?php echo $data["cat_id"]; ?></td>
              <td><?php echo $data["cat_name"]; ?></td>
              <td><?php echo $data["cat_input"]; ?></td>
              <td>
                <a href="edit_cat.php?edit_id=<?php echo $data["cat_id"]; ?>" class="btn btn-success"><i
                    class="far fa-edit"></i></a>
                <a href="edit_cat.php?edit_id=<?php echo $data["cat_id"]; ?>" class="btn btn-success">Edit</a>
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
