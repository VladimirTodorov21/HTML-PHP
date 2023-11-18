<!DOCTYPE html>

<html>
	<body>
    	<?php
        	$UserName = $_POST['UserName'];
            $Phone = $_POST['Phone'];
            
            if (preg_match("/[0-9][0-9][0-9]-[0-9][0-9][0-9]-[0-9][0-9][0-9][0-9]/",$Phone)) {
            	print "$UserName: You have entered valid phone number.";
            } else {
            	print "Invalid phone number.";
            }
        ?>
    </body>
</html>
