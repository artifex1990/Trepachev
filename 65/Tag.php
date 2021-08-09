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

        public function setAttrs($attrs)
        {
            foreach($attrs as $name => $value) {
                $this->attr[$name] = $value;
            }
            
            return $this;
        }

        public function removeAttr($name)
        {
            if (!empty($this->attr[$name])) {
                unset($this->attr[$name]);
            } 

            return $this;
        }

        public function addClass($className) 
        {
            if (isset($this->attr['class'])) {
                $classNames = explode(' ', $this->attr['class']);

                if (!in_array($className, $classNames)) {
                    $classNames[] = $className;
                }

                $this->attr['class'] = implode(' ', $classNames);
            } else {
                $this->attr['class'] = $className;
            }

            return $this;
        }

        public function removeClass($className) 
        {
            if (isset($this->attr['class'])) {
                $classNames = explode(' ', $this->attr['class']);

                if (in_array($className, $classNames)) {
                    $classNames = $this->removeElem($className, $classNames);
                }

                $this->attr['class'] = implode(' ', $classNames);
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

        private function getAttrsStr($attrs)
        {
            $result = '';

            if (!empty($attrs)) {
                foreach($attrs as $name => $value) {
                    $result .= ($value === true) ? " $name" : " $name=\"$value\"";
                }
            }

            return $result;
        }

        private function removeElem($elem, $arr) 
        {
            $key = array_search($elem, $arr);
            array_splice($arr, $key, 1);

            return $arr;
        }
    }