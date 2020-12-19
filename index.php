  <?php
  require_once 'dbFunctions.php' ;
  $query = "SELECT * FROM os2";
  $record = getRecord($query,[]);
  echo $record["id"]." ";
  echo $record["first_name"]." ";
  echo $record["last_name"]." ";

  ?>