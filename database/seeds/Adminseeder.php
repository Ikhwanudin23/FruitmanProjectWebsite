<?php

use App\Admins;
use Illuminate\Database\Seeder;

class Adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admins::create([
            'name' => 'Administrator',
            'email' => 'fruitmanapp@gmail.com',
            'password' => bcrypt(12345678)
        ]);
    }
}
