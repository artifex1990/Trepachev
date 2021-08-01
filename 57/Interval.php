<?php
	class Interval
	{
		private const AVG_DAYS = 29.3;
		private const AVG_MONTH = 12;
		private $date1 = null;
		private $date2 = null;
		private $days = 0;
		private $months = 0;
		private $years = 0;

		public function __construct(Date $date1, Date $date2)
		{
			try {
                $this->date1 = new DateTime($date1);
				$this->date2 = new DateTime($date2);

				$this->days = $this->date1->diff($this->date2)->format('%a');
				$this->months = round($this->days / self::AVG_DAYS, 0);
				$this->years = round($this->days / self::AVG_DAYS / self::AVG_MONTH, 0);
            } catch (Exception $e) {
                echo $e->getMessage() . PHP_EOL;
                exit(1);
            }
		}
		
		public function toDays()
		{
			return $this->days;
		}
		
		public function toMonths()
		{
			return $this->months;
		}
		
		public function toYears()
		{
			return $this->years;
		}
		
		public function __toString()
		{
			return ['years' => $this->years, 'months' => $this->months, 'days' => $this->days];
		}
	}