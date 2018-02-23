<?php 


// GET ALL DATA -> array($publications)

require_once "classes.php";
require_once"db.php";

$publications = array();






$con = db::getConnection();



$result = $con->query('SELECT * FROM news' ); 


while($row = $result->fetch() ) {
	$publications[] = new $row['type']($row);
	
}




