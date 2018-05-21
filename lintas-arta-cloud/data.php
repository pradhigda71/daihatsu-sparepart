<?php

include('conn.php');

$sql = "SELECT * FROM datalead WHERE type = 2";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lintas Arta Cloud Service</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<table class="table table-striped">
  <thead>
    <th>Id</th>
    <th>Nama</th>
    <th>Perusahaan</th>
    <th>Jabatan</th>
    <th>No.HP</th>
    <th>Email</th>
    <th>Kebutuhan</th>
    <th>Create Date</th>
  </thead>
  <tbody>
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
            <tr>
              <td><?php echo $row["id"] ; ?></td>
              <td><?php echo $row["nama"] ; ?></td>
              <td><?php echo $row["perusahaan"] ; ?></td>
              <td><?php echo $row["jabatan"] ; ?></td>
              <td><?php echo $row["no_hp"] ; ?></td>
              <td><?php echo $row["email"] ; ?></td>
              <td><?php echo $row["kebutuhan"] ; ?></td>
              <td><?php echo $row["create_date"] ; ?></td>
            </tr>
        <?php
    }
    ?>
  </tbody>
</table>
    <?php
} else {
    echo "0 results";
}
$conn->close();

?>
</body>
</html>
