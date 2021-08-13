<?php
    class Select extends Tag
    {
        private $listOption = [];

        public function __construct()
        {
            parent::__construct('select');
        }

        public function add(Option $option)
        {
            $this->listOption[$option->getText()] = $option;
            return $this;
        }

        public function show()
        {
            $result = $this->open();
            $name = $this->getAttr('name');

            foreach($this->listOption as $option) {
                $result .= ($_REQUEST[$name] === $option->getText()) ? $option->setSelected()->show() : $option->show();
            }

            $result .= $this->close();

            return $result;
        }
    }