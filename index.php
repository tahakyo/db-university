<?php
define('DB_SERVERNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'db_university');
define('DB_PORT', 8889);

$conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

if ($conn && $conn->connect_error) {
  echo "DB connection error", $conn->connect_error;
  die();
}

//Query per il database
$sql = "SELECT * FROM `departments`;";
$result = $conn->query($sql);


$departments = [];

//controllo della query
if ($result && $result->num_rows > 0) {
  // ci ono dei risultati nella query
  while ($row = $result->fetch_assoc()) {
    $departments[] = $row;
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
      <h3><?php echo $department["name"] ?></h3>
      <a href="">Maggiori informazioni</a>
    </div>
  <?php } ?>
</body>

</html>