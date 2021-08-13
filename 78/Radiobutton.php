<?php
    class Radiobutton extends Tag
    {
        public function __construct()
        {
            parent::__construct('input');
            $this->setAttr('type', 'radio');
        }

        public function open()
        {
            $name = $this->getAttr('name');
            
            if ($name) {
                if (isset($_REQUEST[$name])) {
                    $value = $this->getAttr('value');

                    if($_REQUEST[$name] === $value) {
                        $this->setAttr('checked');
                    } else {
                        $this->removeAttr('checked');
                    }    
                }
            } 

            return parent::open();
        }

        public function __toString()
        {
            return (string)$this->open();
        }
    }