<?php
	class Date
	{
        const FORMAT_DATE = 'Y-m-d';
        private $date = null;
        private $monthRu = ['January' => 'Январь', 
                            'February' => 'Февраль', 
                            'March' => 'Март', 
                            'April' => 'Апрель', 
                            'May' => 'Май', 
                            'June' => 'Июнь', 
                            'July' => 'Июль', 
                            'August' => 'Август', 
                            'September' => 'Сентябрь', 
                            'October' => 'Октябрь', 
                            'November' => 'Ноябрь', 
                            'December' => 'Декабрь'];
        private $weekRu = ['Monday' => 'Понедельник', 
                            'Tuesday' => 'Вторник', 
                            'Wednesday' => 'Среда', 
                            'Thursday' => 'Четверг', 
                            'Friday' => 'Пятница', 
                            'Saturday' => 'Суббота', 
                            'Sunday' => 'Воскресенье'];

		public function __construct($date = null)
		{
			try {
                $this->date = new DateTime($date);
            } catch (Exception $e) {
                echo $e->getMessage() . PHP_EOL;
                exit(1);
            }
		}
		
		public function getDay()
		{
			return $this->date->format('d');
		}
		
		public function getMonth($lang = null)
		{
            if (!empty($lang)) { 
                return $lang === 'ru' ? $this->monthRu[$this->date->format('F')] : $this->date->format('F');
            }
            
            return $this->date->format('m');
		}
		
		public function getYear()
		{
			return $this->date->format('Y');
		}
		
		public function getWeekDay($lang = null)
		{
			if (!empty($lang)) { 
                return $lang === 'ru' ? $this->weekRu[$this->date->format('l')] : $this->date->format('l');
            }
            
            return $this->date->format('N');
		}
		
		public function addDay($value)
		{
            try {
                $this->date->modify("+$value day");
            } catch (Exception $e) {
                echo $e->getMessage() . PHP_EOL;
                exit(1);
            }

            return $this;
		}
		
		public function subDay($value)
		{
			try {
                $this->date->modify("-$value day");
            } catch (Exception $e) {
                echo $e->getMessage() . PHP_EOL;
                exit(1);
            }

            return $this;
		}
		
		public function addMonth($value)
		{
			try {
                $this->date->modify("+$value month");
            } catch (Exception $e) {
                echo $e->getMessage() . PHP_EOL;
                exit(1);
            }

            return $this;
		}
		
		public function subMonth($value)
		{
			try {
                $this->date->modify("-$value month");
            } catch (Exception $e) {
                echo $e->getMessage() . PHP_EOL;
                exit(1);
            }

            return $this;
		}
		
		public function addYear($value)
		{
			try {
                $this->date->modify("+$value year");
            } catch (Exception $e) {
                echo $e->getMessage() . PHP_EOL;
                exit(1);
            }

            return $this;
		}
		
		public function subYear($value)
		{
			try {
                $this->date->modify("-$value year");
            } catch (Exception $e) {
                echo $e->getMessage() . PHP_EOL;
                exit(1);
            }

            return $this;
		}
		
		public function format($format)
		{
			try {
                return $this->date->format($format);
            } catch (Exception $e) {
                echo $e->getMessage() . PHP_EOL;
                exit(1);
            }
		}
		
		public function __toString()
		{
			return $this->date->format(self::FORMAT_DATE);
		}
	}