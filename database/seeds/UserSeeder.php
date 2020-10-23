<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'lname' => 'Arcayos',
                'fname' => 'Alyssa Mae',
                'address' => 'Buacao, Clarin, Bohol',
                'phone' => '0912.456.7432',
                'email' => 'alyssaarcayos@gmail.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname' => 'Aspe',
                'fname' => 'Joy',
                'address' => 'Buacao, Clarin, Bohol',
                'phone' => '0912.675.3456',
                'email' => 'joyaspe@gmail.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname' => 'Aspe',
                'fname' => 'Novie Jhen',
                'address' => 'Buacao, Clarin, Bohol',
                'phone' => '0946.786.453',
                'email' => 'novieaspe@gmail.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname' => 'Ingente',
                'fname' => 'Cristy',
                'address' => 'Buacao, Clarin, Bohol',
                'phone' => '0948.765.3454',
                'email' => 'cristyingente@gmail.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname' => 'Aspe',
                'fname' => 'Joey',
                'address' => 'Buacao, Clarin, Bohol',
                'phone' => '0946.767.8767',
                'email' => 'joeyaspe@gmail.com',
                'password' => bcrypt('password123')
            ]
        ];
        DB::table('users')->insert($data);
    }
}
