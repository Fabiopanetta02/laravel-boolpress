<?php

use App\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $user = new User();
        $user->name = "fabio";
        $user->email = "fubal.scricchiolo20@gmail.com";
        $user->password = bcrypt("Fabietto20");
        $user->save();

        for ($i=0; $i < 9 ; $i++) { 
            $user = new User();
            $user->name = $faker->userName();
            $user->email = $faker->email();
            $user->password = bcrypt("Password");
            $user->save();
        }
    }
}
