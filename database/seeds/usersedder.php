<?php

use Illuminate\Database\Seeder;
use App\user;

class usersedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        
        user::create(array(
        'name'          => 'ilyas',
        'type'          => '1',
        'email'         => 'ilyasbayuaji@gmail.com',
        'password'      => 'ilyas',
        ));
        
        user::create(array(
        'name'          => 'consumer',
        'type'          => '0',
        'email'         => 'comsumer@gmail.com',
        'password'      => 'consumer',
        ));
    }
}
