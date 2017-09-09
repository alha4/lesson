<?php
declare(strict_types=1);

const APIKEY = '12121';

function debug(?int $id) : array {
	
	
	return [1,23,4,$id];
}

function Users(array $data) : iterable {
	
	foreach($data as $item) {
		 yield $item; 
	}
}

$command = $_GET['cmd'] ?? 'not defined';

try {
	
   $date = Users(debug(333));
   //echo APIKEY;
   
   $res = $date->current();
   $res = $date->next();
   $res2 = $date->current();
   print_r($res2);
   

   echo $command;
   
} catch(Exception $e) {
	
	echo $e->getMessage();
}
?>

