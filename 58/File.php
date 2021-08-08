<?php
    class File implements iFile {
        private $currentFilePath = '';
        private $pathInfo = '';

        public function __construct($filePath) 
        {
            try {
                if (is_file($filePath)) {
                    $this->pathInfo = pathinfo($filePath);
                    $this->currentFilePath = $filePath;
                } else {
                    throw new Exception('File is not found');
                }
            } catch (Exception $e) {
                echo $e->getMessage() . PHP_EOL;
                exit(1);
            }
        }

		public function getPath()
        {
            return $this->currentFilePath;
        }

		public function getDir() 
        {
            return $this->pathInfo['dirname'];
        }

		public function getName()
        {
            return $this->pathInfo['basename'];
        }
        
		public function getExt()
        {
            return $this->pathInfo['extension'];
        }
        
		public function getSize()
        {
            return filesize($this->currentFilePath);
        }
        
		public function getText()
        {
            return file_get_contents($this->currentFilePath);
        }
        
		public function setText($text)
        {
            file_put_contents($this->currentFilePath, $text);
        }
        
		public function appendText($text)
        {
            file_put_contents($this->currentFilePath, $text, FILE_APPEND);
        }
        
		
		public function copy($copyPath)
        {
            try {
                if (!copy($this->currentFilePath, $copyPath)) {
                    throw new Exception("Failed to copy {$this->currentFilePath}...\n");
                }
            } catch (Exception $e) {
                echo $e->getMessage() . PHP_EOL;
                exit(1);
            }
        }
        
		public function delete()
        {
            try {
                if (!unlink($this->currentFilePath)) {
                    throw new Exception("Failed delete file {$this->currentFilePath}...\n");
                } else {
                    $this->pathInfo = '';
                    $this->currentFilePath = '';
                }
            } catch (Exception $e) {
                echo $e->getMessage() . PHP_EOL;
                exit(1);
            }
        }
        
		public function rename($newName)
        {
            $newCurrentFilePath = implode('/', [$this->getDir(), $newName]);
            $this->replace($newCurrentFilePath);
        }
        
		public function replace($newPath)
        {
            try {
                if (!rename($this->currentFilePath, $newPath)) {
                    throw new Exception("Failed in move file {$this->currentFilePath}...\n");
                } else {
                    $this->pathInfo = pathinfo($newPath);
                    $this->currentFilePath = $newPath;
                }
            } catch (Exception $e) {
                echo $e->getMessage() . PHP_EOL;
                exit(1);
            }
        }
        
    }