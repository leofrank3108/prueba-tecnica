<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::create([
            'name' => 'leo cortesia',
            'cedula' => 123,
            'phone' => '123',
            'email' => 'i@admin.com',
            'password' => bcrypt('123456'),
            'role' => 'admin'
        ]);
    }
}
