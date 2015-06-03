<?php

App::uses('AppHelper', 'View/Helper');

class BarcodeHelper extends AppHelper {

	public $helpers = array('Html');

	public function display($code, $options = array(), $attr = array()) {
		$defaults = array(
			'p_bcType'           	=> 2,
			'p_xDim'        		=> 1.5,
			'p_charHeight'     		=> 67,
			'p_w2n'		           	=> 3,
			'p_type'               	=> 1,
			'p_label'     			=> "N",
			'p_invert'  			=> "N",
			'p_checkDigit' 			=> "N",
			'p_rotAngle'           	=> 0,
			'p_charGap'        		=> 1.5
		);
		$options = array_merge($defaults, $options);

		$dest = array(
			'controller' => 'barcode', 
			'plugin' => 'barcode', 
			'action' => 'wrapper',
			'p_bcType' => $options['p_bcType'],
			'p_text' => rawurlencode($code),
			'p_xDim' => $options['p_xDim'],
			'p_w2n' => $options['p_w2n'],
			'p_charGap' => $options['p_charGap'],
			'p_invert' => $options['p_invert'],
			'p_charHeight' => $options['p_charHeight'],
			'p_type' => $options['p_type'],
			'p_label' => $options['p_label'],
			'p_rotAngle' => $options['p_rotAngle'],
			'p_checkDigit' => $options['p_checkDigit']
		 );
		
		$attr = array_merge(
			array('alt' => strtoupper($code)), 
			$attr
		);

		return $this->Html->image($dest, $attr);
	}	
	
}