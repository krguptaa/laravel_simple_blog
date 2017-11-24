<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  public function run()
  {
    $role_employee = Role::where('name', 'user')->first();
    $role_manager  = Role::where('name', 'manager')->first();
    $employee = new User();
    $employee->name = 'Nehal Gupta';
    $employee->email = 'nehal@gmail.com';
    $employee->password = bcrypt('@dmin416');
    $employee->save();
    $employee->roles()->attach($role_employee);
    $manager = new User();
    $manager->name = 'Kamlesh Gupta';
    $manager->email = 'kamlesh@gmail.com';
    $manager->password = bcrypt('dmin416');
    $manager->save();
    $manager->roles()->attach($role_manager);
  }
}
