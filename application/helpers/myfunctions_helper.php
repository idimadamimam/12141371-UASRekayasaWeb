<?php
	function comboCategory($name, $array_data){
		$cb = '<select name="'.$name.'">';
		foreach($array_data as $row=>$key){
			$cb.='<option value="'.$key->CategoryID.'">
			'.$key->CategoryName.'</option>';
		}
		$cb .='</select>';
		echo $cb;
	}
?>