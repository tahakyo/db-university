<?php
require_once __DIR__ . "/department.php";
require_once __DIR__ . "/Database.php";

//Query per il database
$sql = "SELECT `id`, `name` FROM `departments`;";
$result = $conn->query($sql);


$departments = [];

//controllo della query
if ($result && $result->num_rows > 0) {
  // ci ono dei risultati nella query
  while ($row = $result->fetch_assoc()) {
    $curr_department = new department($row['id'], $row['name']);
    $departments[] = $curr_department;
  }
} elseif ($result) {
  // Query funziona ma senza risultati
} else {
  // Query non fumzionante. c'è un errore di sintassi nella query.
  echo "Query error";
  die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DB_University</title>
</head>

<body>
  <h1>Lista dipartimenti</h1>
  <?php foreach ($departments as $department) { ?>
    <div>
      <h3><?php echo $department->name; ?></h3>
      <a href="single-department-details.php">Maggiori informazioni</a>
    </div>
  <?php } ?>
</body>

</html>