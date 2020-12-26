<?php
  require_once 'dbFunctions.php' ;
  $query = "SELECT * FROM sql7382995";
  $record = getRecord($query,[]);
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <title>Cserneczky Balint beadando</title>
  </head>
  <body>
  <div>
  Az adatbázisból kinyert adat (www.db4free.net): </br>
 ID: <?php echo $record["id"]." "; ?> </br>
 Vezetéknév: <?php echo $record["first_name"]." "; ?> </br>
 Keresztnév: <?php echo $record["last_name"]." "; ?> </br>
  </div>
  </body>
  </html>
 