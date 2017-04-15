<?php

namespace MiBundle\Twig;

/**
* 
*/
class HelperVistas extends \Twig_Extension
{
	public function getFunctions () 
	{
		return array(
			'generateTable' => new \Twig_Function_Method($this, 'generateTable')
		);
	}

	public function generateTable ($num_rows, $num_cols)
	{
		$table = "<table class='table'>";
		for ($i=0; $i <$num_rows ; $i++) { 
			$table .= "<tr>";
			for ($j=0; $j <$num_cols ; $j++) { 
				$table .= "<td>Columna</td>";
			}
			$table .= "</tr>";
		}
		$table .= "</table>";
		return $table;
	}

	public function getName ()
	{
		return "MiBundle";
	}
}

