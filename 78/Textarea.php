<?php
    class Textarea extends Tag
    {
        public function __construct($text = '')
        {
            parent::__construct('textarea', $text);
        }

        public function open()
        {
            $textareaName = $this->getAttr('name');

            if ($textareaName) {
                if (isset($_REQUEST[$textareaName])) {
                    $this->setText($_REQUEST[$textareaName]);
                }
            }

            return parent::open();
        }
    }