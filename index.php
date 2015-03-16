<?php
require_once('classes/ConnectSmarty.class.php');
require_once ('classes/files.class.php');

// create an object of the class included above
$smarty = new ConnectSmarty;

if(isset($_POST['submit']))
{
	$post = $_POST;
	$keys = "";
	
	$type = $_FILES['logo']['type'];
	
	// Only allowing jpeg and gif image to be uploaded
	if($type == "image/jpeg" || $type == "image/gif")
	{
		/**
		* file upload part
		* creating an object of the class Files
		* calling the upload function of the class Files
		* the destination directory is to be created at first
		* in this case, the destination directory is created and named 'uploads'
		*/
		$file =& new Files;
		$fieldName = "logo";
		$dest = "uploads";
		$file->upload($fieldName,$dest);
		
		// assign success message
		$smarty->assign('success','File Uploaded Successfully');
	}
	else
	{
		// assign error message
		$smarty->assign('error','Only jpge and gif image are supported.');
		
		// display error message and exit
		$smarty->display('index.tpl');
		exit();
	}
}

// display the content
$smarty->display('index.tpl');

?>