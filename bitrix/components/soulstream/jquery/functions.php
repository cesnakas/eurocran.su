<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/**
 * JsToCss
 * 
 * Get
 * "jquery-1.2.6.css" 
 * From
 * "jquery-1.2.6.js"
 * "jquery-1.2.6.min.js"
 * "jquery-1.2.6-min.js"
 * "jquery-1.2.6.pack.js"
 * "jquery-1.2.6-pack.js"
 * and other variants...
 *
 * @param string $name
 * @return string or false
 */
if(!function_exists('JsToCss'))
{
	function JsToCss($name = NULL)
	{
		if($name)
		{
			$cssfilename = strtolower(str_replace('.js', '.css', $name));
			$cssfilename = strtolower(str_replace(array('.min', '.pack', '-min', '-pack'), '', $cssfilename));
			return $cssfilename;
		}
		return false;
	}	
}

/**
 * GetJs
 * 
 * Get array with directories from $path
 *
 * @param string $path
 * @return array or false
 */
if(!function_exists('GetJs'))
{
	function GetJs($path = NULL)
	{
		if($path)
		{
			if($handle = opendir($path))
			{
				while (false !== ($file = readdir($handle)))
				{
					if($file != "." && $file != "..")
					{
						if(is_dir($path.$file))
						{
							$a[] = array(
								'NAME'=>$file,
								'FILES' => GetJqueryFile($path.$file.'/')
							);
						}
					}
				}
				closedir($handle);
			}
		}
		
		if($a) return $a;
		else return false;
	}
}

/**
 * GetJqueryFile
 * 
 * Get array with js files from $path
 *
 * @param string $path
 * @return array or false
 */
if(!function_exists('GetJqueryFile'))
{
	function GetJqueryFile($path = NULL)
	{
		if($path)
		{
			if($handle = opendir($path))
			{
				while (false !== ($file = readdir($handle)))
				{
					if($file != "." && $file != "..")
					{
						if(is_file($path.$file) && ($ext = substr(strrchr($file, "."), 1)) == 'js'){
							$a[] = array(
								'NAME'=>$file,
							);
						}
					}
				}
				closedir($handle);
			}
		}
		if($a) return $a;
		else return false;
	}
}
?>