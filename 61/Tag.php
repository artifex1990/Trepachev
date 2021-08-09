<?php
    class Tag 
    {
        private $name = '';
        private $attr = [];

        public function __construct($name) 
        {
            $this->name = $name;
        }

        public function setAttr($name, $value)
        {
            $this->attr[$name] = $value;
            return $this;
        }

        public function removeAttr($name)
        {
            if (!empty($this->attr[$name])) {
                unset($this->attr[$name]);
            } 

            return $this;
        }

        public function open() 
        {
            return "<{$this->name}{$this->getAttrsStr($this->attr)}>";
        }

        public function close() 
        {
            return "</{$this->name}>";
        }

        private function getAttrsStr($attr)
        {
            $result = '';

            if (!empty($attr)) {
                foreach($attr as $key => $value) {
                    $result .= " $key=\"$value\"";
                }
            }

            return $result;
        }
    }