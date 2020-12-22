<?php
	$a =[1,3,4,2,5,3,4,3];
	// $a = ['a','c','d','b','e','c','d','c'];
	// print_r(array_unique($a));
	// print_r(array_diff_assoc($a, array_unique($a)));
	// for ($i=0; $i < count($a); $i++) { 
	// 	for ($j=0; $j < count($a); $j++) { 
	// 		if($a[$i]==$a[$j] && $i!=$j)
	// 		{
	// 			$s[$j]=$a[$j];
	// 		}
	// 	}
	// }
	// print_r($s);

// find dublicate numbers only
	foreach ($a as $key => $value) {
		foreach ($a as $keys => $values) {
			if($value==$values && $key!=$keys)
				$s[$values]=$values;
		}
	}
	print_r(array_values($s));

//find number or count of occurance in array
	foreach ($a as $key => $value) {
				@$w[$value]++;
	}
	print_r($w);

// find unique element from array
	foreach ($a as $key => $value) {
		$g[$value]=$value;
	}
	print_r(array_values($g));



// sort array without using inbuild function
	$a = [6,5,2,1,3,4,2,5];

	for($i = 0; $i < count($a); $i ++) {
    for($j = 0; $j < count($a)-1; $j ++){

        if($a[$j] > $a[$j+1]) {
            $temp = $a[$j+1];
            $a[$j+1]=$a[$j];
            $a[$j]=$temp;
        }       
    }
}

	echo "Sorted Array is: ";
	echo "<br />";
	print_r($a);



// insert record into mid of table
UPDATE emp_details SET id = -id-1 WHERE id >= 2;
UPDATE emp_details SET id = -id WHERE id < 0;
INSERT INTO emp_details(id,emp_name,username) VALUES (2,'akash','akash@gmail.com');
?>