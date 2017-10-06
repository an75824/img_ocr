<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('getPhrases'))
{
	function getPhrases()
	{
		$ci=& get_instance();
		$ci->load->helper('file');
		$json = read_file('products.json');
		$arr = json_decode($json,true);
		return $arr;
	}//end of function
}//end if
?>
