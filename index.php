<h1>App 2</h1>

<?php
try{
	$db = new PDO('mysql:host=database2;dbname=app2;port=3306', 'app2', 'app2');	
}catch(Exception $ex){
	echo "Database error";
}

echo "Connected !"; 
