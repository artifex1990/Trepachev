<?php
    Class Link extends Tag
    {
        const LINK_ACTIVE = 'active';
        public function __construct($src = '')
        {
            parent::__construct('a');
            $this->setAttr('href', $src);
        }

        public function open()
        {
            $this->activateSelf();
            return parent::open();
        }

        private function activateSelf()
        {
            $fixSymLink = "/Trepachev/69/{$this->getAttr('href')}";
            if ($fixSymLink === $_SERVER['REQUEST_URI']) {
                $this->addClass(self::LINK_ACTIVE);
            }
        }
    }