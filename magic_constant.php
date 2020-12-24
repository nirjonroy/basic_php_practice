<?php 
	echo "<h3> Example for __LINE__ </h3>";
	echo "you are at line number ". __LINE__ . "<br> <br>";
	echo "<h3> Example for __FILE__  </h3>";
	echo __FILE__ . "<br> <br>";
	echo "<h3> Example for __DIR__ </h3>";
	echo __DIR__ . "<br> <br/>";

	function cash(){
		echo 'the function name is'. __FUNCTION__. "<br> <br/>";
	}
	cash();
	function test_function(){
		echo 'HYIII';
	}
	test_function();
	echo __FUNCTION__ . "<br> <br>"; 
	echo "<h3> Example for __CLASS__ </h3>";

	class abc 
	{

		public function __construct(){
			"developer";

		}
		function abc_method(){
			echo __CLASS__. "<br> <br> ";
		}

	}
	$t = new abc; 
	$t ->abc_method();
	class first{
		function test_first(){
			echo __CLASS__ ;
		}
	}
	class second extends first
	{
		public function __construct(){
			;
		}
	}
	$t = new second;
	$t->test_first();

	trait created_trait{
		function abc(){
			echo __TRAIT__;
		}
	}
		class anew{
			use created_trait;
		}
		$a = new anew;
		$a->abc();
	class meth{
		public function __construct(){
			echo __METHOD__ ;
		}
		public function meth_fun(){
			echo __METHOD__ ; 
		}
	}	

	$a = new meth;
	$a->meth_fun();
	echo "<h1> Example of namespace </h1>";
	class name{
		public function __construct(){
			echo 'This line will be printed on calling namespace';
		}
	}
	$class_name = __NAMESPACE__ . '\name';
	$a = new $class_name;
?>