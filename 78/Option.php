<?php
    class Option extends Tag
    {
        public function __construct($text = '')
        {
            parent::__construct('option', $text);
        }

        public function setSelected()
        {
            $this->setAttr('selected');
            return $this;
        }
    }