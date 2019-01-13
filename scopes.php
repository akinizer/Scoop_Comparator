
<html>
<body>
<?php
	//global variables
	$x = 7;
	$y = 9;
	$p = 3;
	$q = 5;
	//global result
	$res = 55;
	
	//goo function that initializes static y and results with x + y
	function goo($x) {
			static $y;			
			$y = 315;
			global $res;
			$res = $x+$y;
	}
	goo($x);
	
	//staticSCP function that initializes static x and calls goo function
	function staticSCP(){
		static $x;
		$x = 513;		
	}
	
	/*	because x and y are static, they need to be in same scope to be updated
		res is in same scope with y so it will take static y, however static x is not in same scope with goo
		so, x of goo will be taken from outer x, that is global x
	*/
	staticSCP();
	
	//print static calculation result: res = x + y = 7 + 315 = 322
	echo "<p>staticSCP: $res</p>";	
	
	echo "<p>\n\n</p>";	
	
	//foo function that initializes dynamic y and results with x + y
	function foo($p){
			global $q;
			$q = 316;
			global $res;
			$res = $p+$q;
	}
		
	//dynamicSCP function that initializes dynamic x and calls foo function
	function dynamicSCP(){
		global $p;
		$p = 513;
		
		foo($p);
	}
	
	/*	because x and y are dynamic, they need to be in same scope or sub scope to be updated
		res is in same scope with y so it will take dynamic y, however dynamic x is also used by calling foo that sees dynamic x
		so, x of foo will be taken from outer x, that is dynamic x
	*/
	dynamicSCP();
	
	//print static calculation result: res = x + y = 513 + 315 = 828	
	echo "<p>dynamicSCP: $res</p>";	
?>	
</body>
</html>