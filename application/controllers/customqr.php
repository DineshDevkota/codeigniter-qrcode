
<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class customqr extends CI_Controller {
	public function getqrcode($patientid=" ") {
		if($patientid==" "){
			echo "<h3> Please pass a information to encode.</h3>";
			die();
		}
		$this->load->library ( 'ciqrcode' );
		

		$params ['data'] = $patientid;
		echo "&lt;p&gt;Message Incoded\n&lt;/p&gt;<br>";
		echo "&lt;div&gt;".$patientid."&lt;/div&gt;<br>";
		echo "&lt;p&gt;Qr image information \n&lt;/p&gt;&lt;div&gt;<br>";
		echo $this->ciqrcode->generate ( $params );
		echo "&lt;/div&gt;<br>";
	}



	public function getjson($patientid=" "){

		if($patientid==" "){
			echo "<h3> Please pass a information to encode.</h3>";
			die();
		}
		$this->load->library ( 'ciqrcode' );
		

		$params ['data'] = $patientid;

				$arrayDateAndMachine = array(
    "Label"=>"Message to Encode", 
    "Data"=>$patientid
);   

$arr = array(
    "label" => "PNG", 
    "data" => $this->ciqrcode->generate ( $params )
);

var_dump(json_encode($arr));
	}
}
?>