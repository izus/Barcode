<?php

App::uses('AppHelper', 'View/Helper');

class BarcodeHelper extends AppHelper {

	public function display($code){
		$p_text = $code;
		$p_bcType = 2;
		$p_xDim = 1.5;
		$p_charHeight = 67;
		$p_w2n = 3;
		$p_type = 1;
		$p_label = "N";	
		$p_invert = "N";
		$p_checkDigit = "N";	
		$p_rotAngle = 0;
		$p_textEnc = rawurlencode($p_text);
		$p_charGap = $p_xDim;
		
		$dest = "/barcode/barcode/wrapper?p_bcType=".$p_bcType."&p_text=".$p_textEnc. 
			"&p_xDim=".$p_xDim."&p_w2n=".$p_w2n."&p_charGap=".$p_charGap."&p_invert=".$p_invert."&p_charHeight=".$p_charHeight.
			"&p_type=".$p_type."&p_label=".$p_label."&p_rotAngle=".$p_rotAngle."&p_checkDigit=".$p_checkDigit;

		

		return '<img src="'.$dest.'" alt="'.strtoupper($p_text).'" />';

		//return $this->Html->image($dest, array('alt' => strtoupper($p_text) ));
	}	
	
}