<?php
  class FrontController {
	  
	 private const SECRET_KEY = 'ash4h5hdsnshagwsf5452';
	 
	 
	 
	 function __construct() {
		 echo self::SECRET_KEY;
	 }
  }
 try {
  $contrll = new FrontController();
 } catch(Exception $e) {
	echo $e->getMessage(); 
 }
 
 phpinfo();
?>
