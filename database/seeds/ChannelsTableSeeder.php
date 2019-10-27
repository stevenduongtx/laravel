<?php


use App\Channel;
use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([
            'name'=>'Laravel 5.8',
            'slug'=>str_slug('Laravel 5.8')
        ]);

        Channel::create([
            'name'=>'Nodejs 3.2',
            'slug'=>str_slug('Nodejs 3.2')
        ]);

        Channel::create([
            'name'=>'Vuejs 3.0',
            'slug'=>str_slug('Vuejs 3.0')
        ]);

        Channel::create([
            'name'=>'Django 3.0',
            'slug'=>str_slug('Django 3.0')
        ]);
    }
}
