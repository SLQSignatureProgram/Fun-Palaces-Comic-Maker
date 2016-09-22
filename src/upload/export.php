<?php

	/**
	 * More info about this script on: 
	 * http://stackoverflow.com/questions/11511511/how-to-save-a-png-image-server-side-from-a-base64-data-string
	 */

	$data = $_REQUEST['base64data']; 
	echo $data;

	$image = explode('base64,',$data); 

	file_put_contents(time() . '.png', base64_decode($image[1]));

?>