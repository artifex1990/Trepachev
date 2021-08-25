<?php
    namespace App\Http\Controllers;

    class Employee extends Controller
	{
		private $employees;
		
		public function __construct()
		{
			$this->employees = [
				1 => [
					'name' => 'user1',
					'surname' => 'surname1',
					'salary' => 1000,
				],
				2 => [
					'name' => 'user2',
					'surname' => 'surname2',
					'salary' => 2000,
				],
				3 => [
					'name' => 'user3',
					'surname' => 'surname3',
					'salary' => 3000,
				],
				4 => [
					'name' => 'user4',
					'surname' => 'surname4',
					'salary' => 4000,
				],
				5 => [
					'name' => 'user5',
					'surname' => 'surname5',
					'salary' => 5000,
				],
			];
		}

        public function showOne($id) 
        {
            $this->checkUser($id);

            return $this->renderEmployee($id);
        }

        public function showField($id, $field) 
        {
            $this->checkUser($id);

            $result = $this->renderField($id, $field);

            if (!empty($result)) {
                return "Значение поля $field: $result";
            }

            return "Поле $field не найдено!";
        }

        private function checkUser($id)
        {
            if (!isset($this->employees[$id])) {
                throw new \Exception("Пользователь $id не найден!");
            }
        }

        private function renderEmployee($id)
        {
            $result  = "Имя пользователя: {$this->renderField($id, 'name')} <br>";
            $result .= "Фамилия пользователя: {$this->renderField($id, 'surname')} <br>";
            $result .= "Зарплата пользователя: {$this->renderField($id, 'salary')} <br>";

            return $result;
        }

        private function renderField($id, $field)
        {
            return $this->employees[$id][$field] ?? '';
        }
	}