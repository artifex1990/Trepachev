<?php
    Class ListItem extends Tag
    {
        public function __construct($text = '')
        {
            parent::__construct('li', $text);
        }

        public function __toString()
        {
            return $this->show();
        }
    }