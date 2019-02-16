<<?php

// Get client data based on an email address
function getVegNames($clientEmail){
 $db = acmeConnect();
 $sql = 'SELECT clientId, clientFirstname, clientLastname, clientEmail, clientLevel, clientPassword
         FROM clients
         WHERE clientEmail = :email';
 $stmt = $db->prepare($sql);
 $stmt->bindValue(':email', $clientEmail, PDO::PARAM_STR);
 $stmt->execute();
 $clientData = $stmt->fetch(PDO::FETCH_ASSOC);
 $stmt->closeCursor();
 return $clientData;
}
function getNames () {
foreach ($db->query('SELECT vegetable_name, description FROM names') as $row)
{
  echo 'Veggie Name: ' . $row['vegetable_name'];
  echo ' Description: ' . $row['description'];
  echo '<br/>';
}
}
 ?>
