<?php
    namespace Project\Controllers;
    use \Core\Controller;

    class UserController extends Controller
    {
        private $users;

        public function __construct()
        {
            $this->users = [
                1 => ['name'=>'user1', 'age'=>'23', 'salary' => 1000],
                2 => ['name'=>'user2', 'age'=>'24', 'salary' => 2000],
                3 => ['name'=>'user3', 'age'=>'25', 'salary' => 3000],
                4 => ['name'=>'user4', 'age'=>'26', 'salary' => 4000],
                5 => ['name'=>'user5', 'age'=>'27', 'salary' => 5000],
            ];
        }

        public function show($params)
        {
            if (isset($this->users[$params['id']])) {
                echo "Имя пользователя: {$this->users[$params['id']]['name']}<br>";
                echo "Возраст пользователя: {$this->users[$params['id']]['age']}<br>";
                echo "Зарплата пользователя: {$this->users[$params['id']]['salary']}<br>";
            } else {
                echo "Пользователь с id: {$params['id']}, не найден!<br>";
            }
        }

        public function info($params)
        {
            if (isset($this->users[$params['id']])) {
                switch($params['key']) {
                    case 'name':
                        echo "Имя пользователя: {$this->users[$params['id']]['name']}<br>";
                        break;
                    case 'age':
                        echo "Возраст пользователя: {$this->users[$params['id']]['age']}<br>";
                        break;
                    case 'salary':
                        echo "Зарплата пользователя: {$this->users[$params['id']]['salary']}<br>";
                        break;
                    default:
                        echo "Ключ {$params['key']} не распознан!<br>";
                }
            } else {
                echo "Пользователь с id: {$params['id']}, не найден!<br>";
            }
        }

        public function all()
        {
            foreach($this->users as $key => $user) {
                echo "Пользователь №{$key}<br>";
                echo "Имя пользователя: {$user['name']}<br>";
                echo "Возраст пользователя: {$user['age']}<br>";
                echo "Зарплата пользователя: {$user['salary']}<br>";
                echo "<hr>";
            }
        }

        public function first($params)
        {
            if (is_numeric($params['n'])) {
                $n = count($this->users) < $params['n'] ? count($this->users) : $params['n'];
                foreach(array_splice($this->users, 0, $n) as $key => $user) {
                    $key++;
                    echo "Пользователь №{$key}<br>";
                    echo "Имя пользователя: {$user['name']}<br>";
                    echo "Возраст пользователя: {$user['age']}<br>";
                    echo "Зарплата пользователя: {$user['salary']}<br>";
                    echo "<hr>";
                }
            }
        }
    }