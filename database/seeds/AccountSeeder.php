<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
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
                'user_id' => '1',
                'acct_name' => 'Arcayos A. Account',
                'init_invest' => '25432',
                'start_date' => '2020-10-22',
                'remarks' => 'Done with normal transactions.'
            ],
            [
                'user_id' => '1',
                'acct_name' => 'Aspe J. Account',
                'init_invest' => '21564',
                'start_date' => '2020-10-21',
                'remarks' => 'Done with normal transactions.'
            ],
            [
                'user_id' => '1',
                'acct_name' => 'Aspe N. Account',
                'init_invest' => '24235',
                'start_date' => '2020-10-20',
                'remarks' => 'Done with normal transactions.'
            ],
            [
                'user_id' => '4',
                'acct_name' => 'Ingente C. Account',
                'init_invest' => '26725',
                'start_date' => '2020-10-19',
                'remarks' => 'Done with normal transactions.'
            ],
            [
                'user_id' => '5',
                'acct_name' => 'Aspe J. Account',
                'init_invest' => '22863',
                'start_date' => '2020-10-18',
                'remarks' => 'Done with normal transactions.'
            ]
        ];
        DB::table('accounts')->insert($data);
    }
}
            