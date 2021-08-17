<?php
    class FileManipulator 
    {
        public function create($filePath)
		{
            if (!file_exists($filePath)) {
                fclose(fopen($filePath, "w+"));
            }
		}

        public function delete($filePath)
        {
            try {
                if (!unlink($filePath)) {
                    throw new Exception("Failed delete file {$filePath}...\n");
                }
            } catch (Exception $e) {
                echo $e->getMessage() . PHP_EOL;
                exit(1);
            }
        }

		public function copy($filePath, $copyPath)
        {
            try {
                if (!copy($filePath, $copyPath)) {
                    throw new Exception("Failed to copy {$filePath}...\n");
                }
            } catch (Exception $e) {
                echo $e->getMessage() . PHP_EOL;
                exit(1);
            }
        }
        
		public function rename($filePath, $newName)
        {
            $newCurrentFilePath = implode('/', [dirname($filePath), $newName]);
            $this->replace($filePath, $newCurrentFilePath);
        }
        
		public function replace($filePath, $newPath)
        {
            try {
                if (!rename($filePath, $newPath)) {
                    throw new Exception("Failed in move file {$filePath}...\n");
                } 
            } catch (Exception $e) {
                echo $e->getMessage() . PHP_EOL;
                exit(1);
            }
        }
        
        public function weight($filePath)
        {
            return filesize($filePath);
        }
    }