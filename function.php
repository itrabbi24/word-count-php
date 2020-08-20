<?php
	if(ISSET($_POST['count'])){
		$words=$_POST['words'];
		function countWords($string) {
			$string = preg_replace('/\s+/', ' ', trim($string));
			$words = explode(" ", $string);
			return count($words);
		}
		
	
		echo "<h3>Total Word: <span class='text-danger'>".countWords($words)."</span></h3>";
	}
?>