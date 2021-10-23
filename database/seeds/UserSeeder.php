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
              'lname'=>'Moreno',
              'fname'=>'Mariel',
              'address'=>'Banlasan, Tubigon, Bohol',
              'phone'=>'0966.615.9923',
              'email'=>'morenomariel@yahoo.com',
              'password'=>bcrypt('morenomariel')
          ],
          [
              'lname'=>'Cubio',
              'fname'=>'Jan',
              'address'=>'Matabao, Tubigon, Bohol',
              'phone'=>'0999.452.1212',
              'email'=>'Jan34@yahoo.com',
              'password'=>bcrypt('morenomariel')
          ],
          [
              'lname'=>'Batausa',
              'fname'=>'Marmae',
              'address'=>'Panadataran, Tubigon, Bohol',
              'phone'=>'0997.776.0077',
              'email'=>'B.M21@yahoo.com',
              'password'=>bcrypt('morenomariel')
          ],
            
      ];
  
          foreach($data as $user){
          \App\User::create($user);
        }
      }
  }