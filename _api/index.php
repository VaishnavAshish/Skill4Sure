<?php 
include_once("basic.php"); 
$d = json_decode(file_get_contents("php://input"), false); 
$encryption_key="aksAKSPQKFD9456235547559632105487hay"; 
function encrypt($pure_string, $encryption_key) {
 return  openssl_encrypt($pure_string,"AES-128-ECB",$encryption_key);
}
function decrypt($encrypted_string, $encryption_key) {
	return openssl_decrypt($encrypted_string,"AES-128-ECB",$encryption_key);
}
	 
    if(isset($d->module) && $d->module!="")
    {
	
        if($query = mysql_query("SELECT * from module"))
		{
			while($row = mysql_fetch_array($query))
				{
						$res[] = $row;
				}
			echo json_encode($res);
		}
    }
	
	else if(isset($d->SelectedmoduleE))
	{
		$module_id = htmlspecialchars($d->SelectedmoduleE,ENT_QUOTES);
		$query = mysql_query("SELECT * from module join module_english on module.id = module_english.module_id where module.id = ".$module_id."");
		
		if(mysql_num_rows($query)>0)
		{
			while($row = mysql_fetch_array($query))
			{
				$res[] = $row;
			}
			echo json_encode($res);
		}
	}
	else if(isset($d->SelectedmoduleH))
	{
		$module_id = htmlspecialchars($d->SelectedmoduleH,ENT_QUOTES);
		$query = mysql_query("SELECT * from modulehindi where module_id = '".$module_id."'");
		if(mysql_num_rows($query)>0)
		{
			while($row = mysql_fetch_array($query))
			{
				$res[] = $row;
			}
			echo json_encode($res);
		}
	}
	 
?>
