
<form action="index.php" method="post">
	apples: <input type="checkbox" name="favFoodList[]" value="apples"><br>
	oranges: <input type="checkbox" name="favFoodList[]" value="oranges"><br>
	bananas: <input type="checkbox" name="favFoodList[]" value="bananas"><br>
	<input type="submit" name="addCheckBxBtn">
 </form>

<!-- echo array list  -->
<?php
	$itemListVar = $_POST["favFoodList"];

	# test arr
	$items = array("item1", "item2", "item3");

	function echoArray($arrayArg){
		echo "Your choices: ".'<br>';
		for($x = 0; $x <= count($arrayArg); $x++){
			echo $arrayArg[$x].'<br>';
		}
	}

	echoArray($itemListVar);
?>

<?php   
	$qFavAnimal = new Questionaire("Fav animal? ", "Dog", "Cat", "Squirrel");	
	echo $qFavAnimal->getQq();

	include "questionaire.php"
?>

<?php include "footer.html"?>
</body>
</html> 

