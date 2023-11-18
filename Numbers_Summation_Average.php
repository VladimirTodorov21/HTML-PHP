<!DOCTYPE html>
	 
<html>
	<body>
    	<?php
        	function findSummation($num) {
            	if (is_numeric($num) && $num > 0) {
                	$total = 0;
                    for ($i=0;$i<=$num;$i++) {
                    	$total += $i;
                    }
                    return "The sum is: ".$total;
                } else {
                	return "This is not a valid number.";
                }
            }
            
            function uppercaseFirstAndLast($str) {
            	$new_str = strrev(ucwords(strrev(ucwords(strtolower($str)))));
                return $new_str;
            }
            
            function findAverage_and_Median(array $arr) {
            	$average = array_sum($arr) / count($arr);
                $length = count($arr);
                $half_length = $length / 2;
                $median_index = (int) $half_length;
                $median = $arr[$median_index];
                
                $output = array($average,$median);
                
                return $output;
            }
            
            function find4Digits($strOfnum) {
            	$numbers = explode(" ",$strOfnum);
                foreach($numbers as $number) {
                	if (strlen($number) == 4) {
                    	return "The 4Digits are: ".$number;
                    }
                }
            }
        ?>
        
        <h2> Function findSummation() result</h2>
        <?php echo findSummation(32); ?>
        
        <h2> Function uppercaseFirstAndLast() result </h2>
        <?php echo "The new string is: ".uppercaseFirstAndLast("software"); ?>
        
        <h2> Function findAverage_and_Median() result</h2>
        <?php  
        	$resArr = array(11,26,47,67,77,78,83,97);
            $res = findAverage_and_Median($resArr);
            echo "The average is: ".$res[0]."<br />The median is: ".$res[1];
        ?>
        
        <h2> Function find4Digits result </h2>
        <?php echo find4Digits('432 922 2125 12222'); ?>
    </body>
</html>
