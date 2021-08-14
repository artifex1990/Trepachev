<?php
	class Validator
	{
		public function isEmail($str)
		{
			return filter_var($str, FILTER_VALIDATE_EMAIL) !== false;
		}
		
		public function isDomain($str)
		{
			return filter_var($str, FILTER_VALIDATE_DOMAIN) !== false;
		}
		
		public function inRange($num, $from, $to)
		{
			return $from <= $num && $num <= $to;
		}
		
		public function inLength($str, $from, $to)
		{
			return $from <= strlen($str) && strlen($str) <= $to;
		}
	}