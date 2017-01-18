<?php
	if (!defined ('PMA_GRAB_GLOBALS_INCLUDED'))
	{
		define ('PMA_GRAB_GLOBALS_INCLUDED', 1);
		if (!empty ($_GET))
		{
			extract ($_GET);
		}
		else
		{
			if (!empty ($HTTP_GET_VARS))
			{
				extract ($HTTP_GET_VARS);
			}
    	}

		if (!empty ($_POST))
		{
      		extract ($_POST);
		}
		else
		{
			if (!empty ($HTTP_POST_VARS))
			{
				extract ($HTTP_POST_VARS);
			}
		}

		if (!empty ($_FILES))
		{
			while (list ($name, $value) = each ($_FILES))
			{
				$$name = $value['tmp_name'];
			}
		}
		else
		{
			if (!empty ($HTTP_POST_FILES))
			{
				while (list ($name, $value) = each ($HTTP_POST_FILES))
				{
					$$name = $value['tmp_name'];
				}
			}
		}
	}
?>
