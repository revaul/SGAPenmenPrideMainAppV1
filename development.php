<?php
$email = 'ry.evaul@snhu.edu';
$findmefirst   = '.';
		$firstnamepos = strpos($email, $findmefirst);
		$firstname = substr($email,0,$firstnamepos);
		$findmelast   = '@';
		$lastnamepos = strpos($email, $findmelast);
		$lastname = substr($email,$firstnamepos+1,$lastnamepos-$firstnamepos-1);
		$faculty=0;
		$senator=0;
		if($firstnamepos==1){
			$faculty=1;
		}
?>