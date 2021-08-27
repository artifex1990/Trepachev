<?php
    namespace App\Http\Controllers;

    class MyController extends Controller
    {
        public function showCycle()
        {
            $employees = [
                [
                    'name' => 'user1',
                    'surname' => 'surname1',
                    'salary' => 1000,
                ],
                [
                    'name' => 'user2',
                    'surname' => 'surname2',
                    'salary' => 2000,
                ],
                [
                    'name' => 'user3',
                    'surname' => 'surname3',
                    'salary' => 3000,
                ],
            ];

            return view('my.cycle', [
                'arr' => [1, 2, 3, 4, 5],
                'aStr' => ['one', 'two', 'three', 'four', 'five'],
                'data' => [1, 2, 3],
                'nums' => [
                    [1,  2,  3,  4,  5],
                    [6,  7,  8,  9,  10],
                    [11, 12, 13, 14, 15],
                    [16, 17, 18, 19, 20],
                    [21, 22, 23, 24, 25],
                ],
                'employees' => $employees,
                'aEmpty' => [],
            ]);
        }
    }