<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admins')->delete();
        \DB::table('admins')->insert(array (
            0=> array(
                'id'=>1,
                'name'=>'Saum Kermu',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('admin123'),
            
    
            ),
        ));
    }
}
