<?php
    class Tag 
    {
        private $name = '';
        private $attr = '';

        public function __construct($name, $attr = []) 
        {
            $this->name = $name;
            $this->attr = $this->getAttrsStr($attr);
        }

        public function open() 
        {
            return "<{$this->name}{$this->attr}>";
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