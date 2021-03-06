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

        public function showDay($numDay)
        {
            return view('employee.day', ['numberDay' => $numDay]);
        }

        public function showMonth($numberMonth)
        {
            return view('employee.month', ['numberMonth' => $numberMonth]);
        }

        private function checkUser($id)
        {
            if (!isset($this->employees[$id])) {
                throw new \Exception("Пользователь $id не найден!");
            }
        }

        private function renderEmployee($id)
        {
            return view('employee.showOne', [
                "user" => [
                    "name" => $this->renderField($id, 'name'),
                    "surname" => $this->renderField($id, 'surname'),
                    "salary" => $this->renderField($id, 'salary'),
                    'location' => [
                        "country " => 'Польша',
                        "city" => 'Краков',
                    ],
                    'age' => 17,
                ],
                "str" => '<b>строка</b>',
                "class" => 'name',
                "style" => 'color: red',
                "link" => ["text" => "ссылка", "href" => "/"],
                'arrayNumber' => [1, 2, 3, 4, 5],
            ]);
        }

        private function renderField($id, $field)
        {
            return $this->employees[$id][$field] ?? '';
        }
	}