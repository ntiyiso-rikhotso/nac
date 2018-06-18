<?php

class Url_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	function parse($name){
		$specChars = array(
						'!' => '%21',    '"' => '%22', '/' => '_', '-' => '_',
						'#' => '%23',    '$' => '%24',    '%' => '%25',
						'&' => '%26',    '\'' => '%27',   '(' => '%28',
						')' => '%29',    '*' => '%2A',    '+' => '%2B',
						',' => '%2C',    '-' => '%2D',    '.' => '%2E',
						'/' => '%2F',    ':' => '%3A',    ';' => '%3B',
						'<' => '%3C',    '=' => '%3D',    '>' => '%3E',
						'?' => '%3F',    '@' => '%40',    '[' => '%5B',
						'\\' => '%5C',   ']' => '%5D',    '^' => '%5E',
						'_' => '%5F',    '`' => '%60',    '{' => '%7B',
						'|' => '%7C',    '}' => '%7D',    '~' => '%7E',
						',' => '%E2%80%9A',  ' ' => '%20'
					);
						
		foreach ($specChars as $k => $v) {
			$name = str_replace($k, '_', $name);
		}
		
		return strtolower($name);
	}
	
	
}