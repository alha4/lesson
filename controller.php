<?
  class FrontController {
	  
	 private const SECRET_KEY = 'ash4h5hdsnshagwsf5452';
	 
	 
	 
	 function __construct() {
		 echo self::SECRET_KEY;
	 }
  }
  
  $contrll = new FrontController();
?>
