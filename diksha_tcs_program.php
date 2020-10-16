<style type="text/css">
td{
    text-align:center;
}
</style>
<?php
error_reporting(~E_ALL);
$resp =array( "OTA" => array
        (
            "club mahindra dharamshala" => array
                (
                    
                    "September" => array
                        (
                            "totroomnight" => 65
                        )

                ),

            "club mahindra munnar" => array
                (
                    "September" => array
                        (
                            "totroomnight" => 1
                        ),
					"December" => array
                        (
                            "totroomnight" => 1
                        )

                ),
				
			

        ),

    "Resort" => array
        (
            "club mahindra dharamshala" => array
                (
                    "September" => array
                        (
                            "totroomnight" => 4
                        ),

                    

                )

        ),

    "RSO" => array
        (
            "club mahindra dharamshala" => array
                (
                    "September" => array
                        (
                            "totroomnight" => 37
                        ),

                   

                    "November" => array
                        (
                            "totroomnight" => 2
                        ),

                ),

            "club mahindra manali" => array
                (
                    

                ),

            "club mahindra munnar" => array
                (
                    "November" => array
                        (
                            "totroomnight" => 2
                        ),

                ),

            "club mahindra varca beach, goa" => array
                (
                    "November" => array
                        (
                            "totroomnight" => 1
                        )

                ),

        ),

    "Voice" => array
        (
            "club mahindra dharamshala" => array
                (
                    "September" => array
                        (
                            "totroomnight" => 8
                        )

                ),

        ),
		"AAA" => array
        (
            "club mahindra varca beach, goa" => array
                (
                    "September" => array
                        (
                            "totroomnight" => 13
                        )

                ),

        )
		);
$i=0;
foreach ($resp as $key => $value) {
        $x=$key;
    foreach ($value as $keys => $val) {
        $b=$keys;
        if(empty($val))
        {
            $a[$b] = 0;
           continue;
        }
        echo "<br><br>";
        foreach ($val as $keya => $value) { 
            $c=$keya;
            $mon[$i]=$keya;$i++;
        foreach ($value as $keyss => $values) {
        $a[$b][$x][$c] = $values;
            }
        }
    }
}
$months=array_unique($mon);
$months = array_values($months);
echo "<table border='0'><tr><th>Resort Name</th>";
     $i=0;
    foreach ($resp as $key => $value) {  
        echo "<th colspan='".count($months)."'>$key</th>";
        $s[$i]=$key;$i++;
 } 
    echo "</tr><tr><td></td>";
for ($i=0; $i < count($resp); $i++) { 
    for ($j=0; $j < count($months); $j++) { 
        echo "<td>".$months[$j]."&nbsp;&nbsp;</td>";
    }
    // echo "<td>September</td><td>December</td><td>November</td>";
}
echo "</tr>";
foreach ($a as $key => $valuew) {
    echo "<tr><td style='text-align:left'>".$key."</td>";
    $count=0;$position=0;
    foreach ($valuew as $keyx => $valuex) {
                if($keyx!=$s[$position] && $count==0)
                    {
                        for ($k=0; $k < count($months); $k++) { 
                            echo "<td>&nbsp;</td>";
                        }
                        $count++;$position++;
                    }
                    if($keyx!=$s[$position] && $count==1)
                    {
                        for ($k=0; $k < count($months); $k++) { 
                            echo "<td>&nbsp;</td>";
                        }
                        $count++;$position++;
                    }
                    if($keyx!=$s[$position] && $count==2)
                    {
                        for ($k=0; $k < count($months); $k++) { 
                            echo "<td>&nbsp;</td>";
                        }
                        $count++;$position++;
                    }
                    if($keyx!=$s[$position] && $count==3)
                    {
                        for ($k=0; $k < count($months); $k++) { 
                            echo "<td>&nbsp;</td>";
                        }
                        $count++;$position++;
                    }
                    if($keyx!=$s[$position] && $count==4)
                    {
                        for ($k=0; $k < count($months); $k++) { 
                            echo "<td>&nbsp;</td>";
                        }
                        $count++;$position++;
                    }
            foreach ($valuex as $key => $value) {

                for ($j=0; $j < count($months); $j++) { 
                
                        if(array_key_exists($months[$j], $valuex))
                            echo "<td>".$valuex[$months[$j]]."</td>";
                            else if(!array_key_exists($months[$j], $valuex))
                            echo "<td>&nbsp;</td>";
                    }

                    // if(array_key_exists("September", $valuex))
                    // echo "<td>".$valuex['September']."</td>";
                    // else if(!array_key_exists("September", $valuex))
                    // echo "<td>&nbsp;</td>";  
                
                    // if(array_key_exists("December", $valuex))
                    //     echo "<td>".$valuex['December']."</td>";
                    //     else if(!array_key_exists("December", $valuex))
                    //     echo "<td>&nbsp;</td>";
                
                    // if(array_key_exists("November", $valuex))
                    //     echo "<td>".$valuex['November']."</td>";
                    //     else if(!array_key_exists("November", $valuex))
                    //     echo "<td>&nbsp;</td>";
                    break;
                }
                $count++;$position++;
             }
    echo "</tr>";
}
?>
</table>