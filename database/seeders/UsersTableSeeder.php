<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        for ($i=0; $i < 30; $i++) { 
            DB::table('users')->insert([
                'name' => 'admin'.$i,
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123456'),
                'address'=>'hanoi',
            ]);
        }
        
    }
}
