<?php
    Class HtmlList extends Tag
    {
        private $list = [];

        public function addItem(ListItem $item)
        {
            $this->list[] = $item;
            return $this;
        }

        public function __toString()
        {
            $result = $this->open();

            foreach($this->list as $item) {
                $result .= $item;
            }

            $result .= $this->close();

            return $result;
        }
    }