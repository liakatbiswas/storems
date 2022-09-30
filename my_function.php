<?php

function data_liat($table_name, $table_id, $table_col)
{
 include 'connection.php';
 $sql   = "SELECT * FROM $table_name";
 $query = $conn->query($sql);

 while ($data = $query->fetch_assoc()) {
  echo "<option value='$data[$table_id]'>$data[$table_col]</option>";
 }

}
// data_liat('product', 'product_id', 'product_name');
