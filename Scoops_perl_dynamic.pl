	#global variables
	$p = 3;
	$q = 5;

	#foo function, initializes dynamic p, returns p + q
	# defined y is used as it is in the scope with p + q and p is called from outer function, dynamicSCP
	
	sub foo{
		local $q = 315;
		return $p+$q;
	}
	
	#dynamicSCP
	#dynamic x is defined and foo is called. Dynamic x value is carried to sub function as a dynamic variable
	sub dynamicSCP{
		local $p = 513;
		return foo();
	}
	
	#prints out result res = x + y = 315 + 513 = 828
	print dynamicSCP();