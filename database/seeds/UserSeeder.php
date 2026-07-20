<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        \DB::table('users')->insert(array (
            0=> array(
                'id'=>1,
                'name'=>'Kawalya Robert',
                'email'=>'robert@gmail.com',
                'password'=>bcrypt('robert123'),
                
    
            ),
        ));
    }
}
