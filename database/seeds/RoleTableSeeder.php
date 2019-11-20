<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Reset cached roles and permissions
      app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

      Role::create(['name' => 'admin']);
      Role::create(['name' => 'vendor']);
      Role::create(['name' => 'buyer']); //customer
      Role::create(['name' => 'seller']);
    }
}
