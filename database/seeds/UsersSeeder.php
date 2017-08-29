<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Daniel','Doug','Alex','Jimmy','Johnny','Billy-E','Sally','Jill'];
        for ($i=1; $i <= 10 ; $i++) {
            $user = new App\User();
            $user->email = 'user'.$i.'@codeup.com';
            $key = array_rand($names,1);
            $user->name = $names[$key];
            $user->password = Hash::make('password123');
            $user->save();
        }
    }
}
