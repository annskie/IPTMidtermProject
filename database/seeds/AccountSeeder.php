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
              'user_id'=> 1,
              'acct_name'=> 'Moreno M. Regular Account',
              'init_invest'=> 15000,
              'start_date'=> '2020-05-10',
              'remarks'=> 'Done with normal transaction',
  
          ],
          [
            'user_id'=> 2,
            'acct_name'=> 'Cubio J. Regular Account',
            'init_invest'=> 18500,
            'start_date'=> '2020-09-11',
            'remarks'=> 'Done with normal transaction',
          ],
          [
            'user_id'=> 3,
            'acct_name'=> 'Batausa Trust Fund',
            'init_invest'=> 10000,
            'start_date'=> '2020-08-18',
            'remarks'=> 'Done with normal transaction',
          ]

        ];
  
        foreach($data as $accnt){
            \App\Account::create($accnt);
        }

    }
}
