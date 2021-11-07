<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
            "name" => "Josue Ocampo",
            "email" => "ocampo@ocampo.com",
            "email_verified_at" => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            "created_at" => now(),
            "updated_at" => now()
        ]);
        User::create([
            "name" => "Monica Gerlach",
            "email" => "fay.ricky@example.com",
            "email_verified_at" => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            "created_at" => now(),
            "updated_at" => now()
        ]);
        User::create([
            "name" => "Dewitt Ziemann",
            "email" => "haley.herman@example.org",
            "email_verified_at" => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            "created_at" => now(),
            "updated_at" => now()
        ]);
        User::create([
            "name" => "Ashlynn Heidenreich",
            "email" => "bashirian.doug@example.com",
            "email_verified_at" => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            "created_at" => now(),
            "updated_at" => now()
        ]);
        User::create([
            "name" => "Marcelina Graham",
            "email" => "curt99@example.net",
            "email_verified_at" => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            "created_at" => now(),
            "updated_at" => now()
        ]);
        User::create([
            "name" => "June Champlin",
            "email" => "jade63@example.net",
            "email_verified_at" => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            "created_at" => now(),
            "updated_at" => now()
        ]);
        User::create([
            "name" => "Grace Reinger PhD",
            "email" => "mschumm@example.org",
            "email_verified_at" => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            "created_at" => now(),
            "updated_at" => now()
        ]);
        User::create([
            "name" => "Randall Hirthe",
            "email" => "laura.conn@example.com",
            "email_verified_at" => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            "created_at" => now(),
            "updated_at" => now()
        ]);
        User::create([
            "name" => "Mrs. Muriel Dicki DVM",
            "email" => "parker.summer@example.com",
            "email_verified_at" => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            "created_at" => now(),
            "updated_at" => now()
        ]);
        User::create([
            "name" => "Sheridan Lehner V",
            "email" => "clifton.hane@example.org",
            "email_verified_at" => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            "created_at" => now(),
            "updated_at" => now()
        ]);
    }
}
