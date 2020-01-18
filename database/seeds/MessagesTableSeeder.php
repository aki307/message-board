<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for($i = 1;$i <=100; $i++){
           DB::table('messages')->insert([
               'title' => 'test title'.$i,
               'content' => 'test content'.$i
               
               ]);
       }
       for($j =1;$j <=30; $j++){
           DB::table('messages')->insert([
                'title' => 'original title'.$j,   
                'content' => 'original content'.$j
            ]);
       }
    }
}
