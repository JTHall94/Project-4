<?php

use Illuminate\Database\Seeder;

class ExhibitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jacob = \App\User::where('name', 'Jacob')->first();

            $temp = new \App\Exhibits;
            $temp->user_id = $jacob->id;
            $temp->name = 'Nature Photos';
            $temp->year_created = '1999';
            $temp->artist= 'Bob';
            $temp->url= 'google.com';
            $temp->description = 'This is a beautiful forest photo.';
            $temp->save();
    }
}
