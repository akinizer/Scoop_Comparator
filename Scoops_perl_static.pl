	#global variables
	$x = 7;
	$y = 9;
	
	#goo function, initializes static y, returns x + y
	# defined y is used as it is in the scope with x + y but x is called from global
	sub goo{
		my $y = 315;
		return $x+$y;
	}
	
	#staticSCP
	#static x is defined and goo is called but static x value cannot be carried to sub function
	sub staticSCP{
		my $x = 513;
		return goo();
	}
	
	#prints out result res = x + y = 315 + 7 = 322
	print staticSCP();