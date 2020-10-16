<?php
function displayTemperature ( $strInput )
{
	$a = explode(",",$strInput);
	
    
    for ($i = 0; $i < count($a) ; $i++) {
        if($a[$i]==0)
        {	
        	$closest = 0;
        	return $closest;
        	exit;
        }
        else if ($a[$i] > 0) {
             $plus[] = $a[$i];
        } else if ($a[$i] < 0 ) {
             $minus[] = $a[$i];
        }
    }

    // print_r($plus);
    // print_r($minus);
    

	if(!empty($plus) && !empty($minus))
	{	
		sort($plus);
		rsort($minus);
		if($plus[0] < abs($minus[0]))
		{
			$closest = $plus[0];
		}else{
			$closest = $minus[0];
		}
	}else if(empty($plus))
	{
		rsort($minus);
		$closest = $minus[0];
	}else if(empty($minus))
	{
		sort($plus);
		$closest = $plus[0];
	}
    return $closest;
}
print displayTemperature('-2,-8,-5,-3,-6,2');
print displayTemperature('7,-10,13,8,4,-7,-12,-3,-9,6,-1,-6,7');
?>