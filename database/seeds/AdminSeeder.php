<?php

use Illuminate\Database\Seeder;
use App\User;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'zomaabdo2016@gmail.com',
            'national_number' => '29805181600931',
            'gender' => 'Male',
            'user_type' => 'admin',
            'phone' => '01065197611',
            'grade' => 0,
            'password' => '$2y$10$xqOPJ86yqEaSh15ClrU8w.VHiZKsHOfnKYgLehX92nww7C0VJkvPi',
            'admin_password' => '12345678'
        ]);
    }
}
