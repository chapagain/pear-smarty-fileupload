<?php
/**
* You need to download smarty
* extract the downloaded smarty package
* rename the extracted directory as 'smarty'
* put that smarty directory in your root directory
*/

/**
* Loading Smarty library
*/
require_once 'smarty/libs/Smarty.class.php';

/**
* Connection to Smarty package
* 
*/

class ConnectSmarty extends Smarty 
{
	/**
	* This function connects with smarty
	* manage paths to smarty directories
	* @access public
	*/		
   function ConnectSmarty()
   {		
        $this->Smarty();

		$this->template_dir = 'smarty_temp/templates'; 
		$this->config_dir = 'smarty_temp/configs';
		$this->cache_dir = 'smarty_temp/cache';
		$this->compile_dir = 'smarty_temp/templates_c';	
   }
}

?>