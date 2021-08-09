<?php
    class Tag 
    {
        private $name = '';

        public function __construct($name) 
        {
            $this->name = $name;
        }

        public function open() 
        {
            return "<{$this->name}>";
        }

        public function close() 
        {
            return "</{$this->name}>";
        }
    }