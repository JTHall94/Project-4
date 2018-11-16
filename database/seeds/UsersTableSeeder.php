<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jacob = new \App\User;
        $jacob->name = 'Jacob';
        $jacob->email = 'jacobthall94@gmail.com';
        $jacob->password = bcrypt('jacob');
        $jacob->save();
    }
}
