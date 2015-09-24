<?php
class Calculator{
	
	private $number;
	
	
	public function sum($number){
	
	$this->number=$number;
	$odd=0;
	$even=0;
	
	for($i=0; $i<=$this->number; $i++){
		if($i%2==1){
		$odd=$odd+$i;		
		}
		
		else{
			
			$even=$even+$i;
		}
	
	}
	
	echo "sum of odd number between 1 to ". $this->number. "is".$odd."<br />";
	echo "sum of even number between 1 to ".$this->number. "is ". $even;
	}
	
	
	
}

 $calc=new Calculator();
 $calc->sum(100);
 

?>