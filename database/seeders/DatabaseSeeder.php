<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        User::create([
            'name'=>'Administrador',
            'email'=>'derlisruizdiazr@gmail.com',
            'password'=> Hash::make('decano')
        ]);

        $rol1 = Role::create(['name'=>'admin']);
        $rol1 = Role::create(['name'=>'caja']);
        $find = User::find(1);
        $find->assignRole($rol1);
    }
}
