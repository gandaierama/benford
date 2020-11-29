<?php
$arr_numbers=[1777, 166, 277, 37, 5777, 299, 399, 
	849, 34344, 1345, 506, 16, 206, 
	849, 34344, 1345, 506, 16, 206, 
	849, 94344, 4345, 506, 16, 206, 
	849, 94344, 5345, 506, 16, 206, 
	849, 94344, 8345, 806, 16, 206, 
	849, 34344, 9345, 506, 16, 206, 
	949, 54344, 1345, 506, 16, 606, 
	306, 706, 706, 506];


///////////////////////



function benfordLaw($leading){
  	if($leading > 0){
  		return (log(1+(1/$leading))/log(10));
	}else{
		return 0;
	}
}
function benfordVerify($arr_numbers){
	$counts = [
	    '1' => 0,
	    '2' => 0,
	    '3' => 0,
	    '4' => 0,
	    '5' => 0,
	    '6' => 0,
	    '7' => 0,
	    '8' => 0,
	    '9' => 0
	];

	$arr=array();
	$limit=count($arr_numbers);

	for ($current = 0; $current < $limit; $current++) {
	    $number = $arr_numbers[$current];
	    @$counts[$number[0]]++;
	}

	foreach ($counts as $number => $count) {
		if($number!=""){
	    	$arr[]=[$number => benfordLaw($number)];
		}
	}
	return $arr;

}

$result=json_encode(benfordVerify($arr_numbers), true);


print_r($result);
?>