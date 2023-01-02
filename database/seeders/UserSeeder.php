<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'sneder',
            'email' => 'andrew.jerico@hotmail.com',
            'password' => Hash::make('binusian'),
            'phone' => '088213459009',
            'is_admin' => true
        ]);

        User::create([
            'username' => 'jamboyy',
            'email' => 'bayy@gmail.com',
            'password' => Hash::make('root'),
            'phone' => '088213459009',
            'is_admin' => true
        ]);

        User::create([
            'username' => 'jamboii',
            'email' => 'bayu@gmail.com',
            'password' => Hash::make('root'),
            'phone' => '088213459009',
        ]);
    }
}
