<?php 

///////////////////////////////////// Static $x /////////////////////////////////////	
	
	
	function num(){
		if(!isset($x)){
			static $x=0;
		}
		
		$x++;
		echo $x;
	
	
	}
	
	
	for ($i=0; $i<10; $i++){
		num();
	}
	
	////////////////////////////////////// Singleton //////////////////////////////////
	
	class A {
		public static $x=0;
		
		function __construct(){
			self::$x;
			self::$x++;
			if(self::$x>1){
				echo "Eror";
			}
		}
		
	}
	
	
	
	$a1 = new A();
	
	
	
	
	
	




?>