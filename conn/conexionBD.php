
<?php


function AbrirBD()
 {
		 $dbstr ="(DESCRIPTION =(ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521)) 
		 (CONNECT_DATA = 
		 (SERVER = DEDICATED) 
		 (SERVICE_NAME = orcl) 
		 (INSTANCE_NAME = orcl)))";

		 $conn = oci_connect("MARCELO","Chelo1316",$dbstr);
		 if($conn){
			$errmsg = oci_error();
			//print ' connection exitosa' . $errmsg['message'];
		 }else{
			 $errmsg = oci_error();
			 print 'Oracle connection failed' . $errmsg['message'];
		 }


	 return $conn;          
 }
 


 function CerrarBD($conexion)
 {
	 oci_close($conexion);
 }	









?>