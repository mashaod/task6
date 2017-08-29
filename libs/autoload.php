<?php

function __autoload($className)
{
	if(file_exists('libs/'.$className.'.php'))
	{
		include_once 'libs/'.$className.'.php';
	}
    else
    {
        die ('Class ' . $className . ' does not exist');
    }
}
