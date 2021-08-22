<?php
    namespace Core;

    class Hello 
    {
        private $hello;

        public function __construct()
        {
            return $this->hello = 'Hello, world<br>';
        }

        public function __toString()
        {
            return $this->hello;
        }
    }