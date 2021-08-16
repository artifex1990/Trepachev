<?php
    class Image extends Tag 
    {
        public function __construct($src = '', $alt = '')
        {
            parent::__construct('img');
            $this->setAttrs(['src' => $src, 'alt' => $alt]);
        }

        public function __toString()
        {
            return parent::open();
        }
    }