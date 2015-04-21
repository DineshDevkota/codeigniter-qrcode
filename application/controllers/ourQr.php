<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class imageqr extends CI_Controller {
	public function getqrcode($patientid) {
		$this->load->library ( 'ciqrcode' );
		
		header ( "Content-Type: image/png" );
		$params ['data'] = $patientid;
		$this->ciqrcode->generate ( $params );
	}
}
?>