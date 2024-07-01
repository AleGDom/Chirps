<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $users = collect([
            [
                'name'=>'Test name',
                'email'=>'test@test.com',
                'password'=>Hash::make('password'),

            ],
            [
                'name'=>'Test name2',
                'email'=>'test2@test.com',
                'password'=>Hash::make('password'),
            ]
        ]);

        $users->each(function ($user) {
            User::factory()->create($user);
        });
    }
}
