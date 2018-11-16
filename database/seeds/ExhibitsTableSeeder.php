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
            $bob = \App\User::where('name', 'Bob')->first();

            $temp = new \App\Exhibits;
            $temp->user_id = $jacob->id;
            $temp->name = 'Alcazar in Summer';
            $temp->year_created = '2014';
            $temp->artist= 'Jacob Hall';
            $temp->url= '/images/IMG_3291.JPG';
            $temp->description = 'This is a photo of Spanish poppies in the summer sunshine, framed by the Alacazar castle of Segovia in the background.';
            $temp->save();

            $temp2 = new \App\Exhibits;
            $temp2->user_id = $jacob->id;
            $temp2->name = 'Fingvilir';
            $temp2->year_created = '2016';
            $temp2->artist= 'Jacob Hall';
            $temp2->url= '/images/DSC_0095.JPG';
            $temp2->description = 'This is a photo of a waterfall in Iceland where the North American and European tectonic plates meet.';
            $temp2->save();

            $temp3 = new \App\Exhibits;
            $temp3->user_id = $jacob->id;
            $temp3->name = 'Fingvilir';
            $temp3->year_created = '2016';
            $temp3->artist= 'Jacob Hall';
            $temp3->url= '/images/DSC_0094.JPG';
            $temp3->description = 'This waterfall was hidden away at the base of a volcano in Iceland, falling down into a cave system beneath the rocks.';
            $temp3->save();

            $temp4 = new \App\Exhibits;
            $temp4->user_id = $jacob->id;
            $temp4->name = 'Fingvilir';
            $temp4->year_created = '2016';
            $temp4->artist= 'Jacob Hall';
            $temp4->url= '/images/DSC_0304.JPG';
            $temp4->description = 'A stream in Red River Gorge, KY.';
            $temp4->save();

            $temp5 = new \App\Exhibits;
            $temp5->user_id = $bob->id;
            $temp5->name = 'Squirrel in My Backyard';
            $temp5->year_created = '2018';
            $temp5->artist= 'Bob';
            $temp5->url= 'https://media.npr.org/assets/img/2017/04/25/istock-115796521-fcf434f36d3d0865301cdcb9c996cfd80578ca99-s800-c85.jpg';
            $temp5->description = 'This is a squirrel in my backyard.';
            $temp5->save();
    }
}
