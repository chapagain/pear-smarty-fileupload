<?php
require_once "HTTP/Upload.php";

class Files
{
	function upload($field_name,$dest)
	{
		$upload =& new HTTP_Upload("en");
		$file = $upload->getFiles($field_name);

		if ($file->isValid()) 
		{
		    $moved = $file->moveTo("$dest/");
		    if (PEAR::isError($moved)) 
			{
				require_once('ConnectSmarty.class.php');
				// create an object of the class included above
				$smarty = new ConnectSmarty;
					
				$error =& $moved->getMessage();
				
				// assign error message
				$smarty->assign('errmessage',$error);
				
				// display error message and exit
				$smarty->display('error.tpl');				
				exit();
		    }
		}
	}
}
?>