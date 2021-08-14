<?php
    class CookieShell 
    {
        public function set($name, $value, $time)
		{
			setcookie($name, $value, $time);
			$_COOKIE[$name] = $value;
		}
		
		public function get($name)
		{
			return $_COOKIE[$name];
		}
		
		public function del($name)
		{
			setcookie($name, '', time() - 3600);
			unset($_COOKIE[$name]);
		}
		
		public function exists($name)
		{
			return isset($_COOKIE[$name]);
		}
    }