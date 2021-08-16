<?php
    class TagHelper
    {
        public function open($name, $attrs = [])
        {
            $allAttrs = $this->getAttrs($attrs);
            return "<$name$allAttrs>";
        }

        public function close($name)
        {
            return "</$name>";
        }

        public function show($name, $text)
        {
            return "{$this->open($name)}$text{$this->close($name)}";
        }

        private function getAttrs($attrs)
        {
            $result = '';

            if (!empty($attrs)) {
                foreach($attrs as $key => $value) {
                    if ($value === true) {
                        $result .= " $key";
                    } else {
                        $result .= " $key=\"$value\"";
                    }
                }
            }

            return $result;
        }
    }