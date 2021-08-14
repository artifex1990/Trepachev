<?php
    class SessionShell
    {
        // Удобно стартуем сессию в конструкторе класса:
		public function __construct()
		{
			if (!isset($_SESSION)) {
				session_start();
			}
		}
		
		public function set($name, $value)
		{
			$_SESSION[$name] = $value;
		}
		
		public function get($name)
		{
			return $_SESSION[$name];
		}
		
		public function del($name)
		{
            if ($this->exists($name)) {
			    unset($_SESSION[$name]);
            }
		}
		
		public function exists($name)
		{
			return isset($_SESSION[$name]);
		}
		
		public function destroy()
		{
			if (isset($_SESSION)) {
				session_destroy();
			}
		}
    }