<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Admin User

        $roleSuper = Role::where('name', "SuperAdmin")->first();
        $superAdmin = User::create([
            'first_name'    => 'Super',
            'last_name'     => 'Admin',
            'email'         =>  'fasalpmdev@gmail',
            'mobile_number' =>  '6380847876',
            'password'      =>  Hash::make('cobra@4321'),
            'role_id'       => $roleSuper->id
        ]);


        $superAdmin->assignRole($roleSuper->id);

        $roleAdmin = Role::where('name', "Admin")->first();

        $admin = User::create([
            'first_name'    => 'Admin',
            'last_name'     => 'User',
            'email'         =>  'alpha@admin.com',
            'mobile_number' =>  '9028187696',
            'password'      =>  Hash::make('alpha@4321'),
            'role_id'       => $roleAdmin->id
        ]);


        $admin->assignRole($roleAdmin->id);

    }
}
