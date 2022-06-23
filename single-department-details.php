<?php
    require_once __DIR__ . "/Database.php";
    require_once __DIR__ . "/department.php";
    //problema di sql injection
    // $id = $_GET["id"];
    // $sql = "SELECT * FROM `departments` WHERE `id` = $id;";
    // $result = $conn->query($sql);

    //Preparazione dello statement
    $stmt = $conn->prepare("SELECT * FROM `departments` WHERE `id` = ?");
    $stmt->bind_param("d", $id);
    $id = $_GET["id"];

    //Esecuzione della query
    $stmt->execute();
    $result = $stmt->get_result();

    $departments = [];
    //controllo della query
    if ($result && $result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $curr_department = new department($row['id'], $row['name']);
        $curr_department->getContactData($row['address'], $row['phone'], $row['email'], $row['website']);
        $curr_department->head_of_department = $row['head_of_department'];
        $departments[] = $curr_department;
      }
    }elseif ($result) {
      echo "Non ci sono risultati";
    }else {
      echo "errore nella query";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Department-info</title>
</head>
<body>
  <a href="index.php">Lista dei dipartimenti</a>
  <?php foreach ($departments as $department) { ?>
    <h1><?php echo $department->name; ?></h1>
    <p>--<?php echo $department->head_of_department; ?>--</p>

    <h3>Contatti</h3>
    <ul>
      <?php foreach($department->printContactData() as $key => $value) {?>
      <li><?php echo "$key : $value" ?></li>
      <?php } ?>
    </ul>
  <?php } ?>
</body>
</html>