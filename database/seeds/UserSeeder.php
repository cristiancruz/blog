<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
       	'name' => 'Cristian Alejandro',
       	'email' => 'vencees.dlp@hotmail.com',
       	'password' => bcrypt('87411'),
       	'type' =>'admin'


       	]);
       	//crear varios usarios a la vez
       //	factory(App\User::class,50)->create();
    }
}
