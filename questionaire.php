<!DOCTYPE html>
<html>
<body>


<?php 
	class Questionaire{
		public var $question;
		public $option1;
		public $option2;
		public $option3;
	
		function __construct($aQ, $o1, $o2, $o3){
			$this->question = $aQ;
			$this->option1 = $o1;
			$this->option2 = $o2;
			$this->option3 = $o3;
		}

		function getQq(){return $this->quesiton;}
		function getO1(){return $this->option1;}
		function getO2(){return $this->option2;}
		function geto3(){return $this->option3;}
	}

	$questionaire1 = new Questionaire("Favorite animal?", "Cat", "Dog", "Bird");
	
	echo $questionaire1->getQq();
?>
</body>
</html>
