<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1=new Role;
        $role1->name="Customer";
        $role1->save();
        $role2=new Role;
        $role2->name="Admin";
        $role2->save();
    }
}
