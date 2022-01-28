<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = "Admin";
        $user->email = "admin@schoolmedia.com";
        $user->status = "admin";
        $user->password = bcrypt('admin123');
        $user->konfirmasi_password = 'admin123';
        $user->avatar = 'default.png';
        $user->save();
    }
}
