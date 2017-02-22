<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('items')->delete();
        
        
        DB::table('items')->insert([
            
            'name' => str_random(10),
            'rarity' => 3,
            'restriction_level' => '80',       
        ]);

        DB::table('items')->insert([
            
            'name' => str_random(10),
            'rarity' => 3,
            'restriction_level' => '80',       
        ]);
        
        DB::table('items')->insert([
            
            'name' => str_random(10),
            'rarity' => 3,
            'restriction_level' => '80',       
        ]);
        
        DB::table('items')->insert([
            
            'name' => str_random(10),
            'rarity' => 3,
            'restriction_level' => '80',       
        ]);
        
    }
}
