<?php
    require_once __DIR__ . "/Database.php";
    require_once __DIR__ . "/department.php";
    
    $id = $_GET["id"];
    $sql = "SELECT * FROM `departments` WHERE `id` = $id;";
    $result = $conn->query($sql);

    $departments = [];
    //controllo della query
    if ($result && $result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $curr_department = new department($row['id'], $row['name']);
        $curr_department->getContactData($row['adress'], $row['phone'], $row['email'], $row['website']);
        $curr_department->head_of_department = $row['head_of_department'];
        $departments[] = $curr_department;
      }
      var_dump($departments);
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
  
</body>
</html>