<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::transaction(function () {
            \App\Models\User::create([
                'name' => 'Administrator',
                'email' => 'admin@local.test',
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now()
            ]);

            \App\Models\Role::create([
                'name' => 'administrator'
            ]);
        });


        DB::transaction(function () {
            \App\Models\User::create([
                'name' => 'Traffic Manager',
                'email' => 'traffic.manager@local.test',
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now()
            ]);

            \App\Models\Role::create([
                'name' => 'traffic_manager'
            ]);
        });


        DB::transaction(function () {
            \App\Models\User::create([
                'name' => 'City Planner',
                'email' => 'city.planner@local.test',
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now()
            ]);

            \App\Models\Role::create([
                'name' => 'city_planner'
            ]);
        });

        DB::transaction(function () {
            \App\Models\User::create([
                'name' => 'Law Enforcement',
                'email' => 'law.enforcement@local.test',
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now()
            ]);

            \App\Models\Role::create([
                'name' => 'law_enforcement'
            ]);
        });

        $this->call(PermissionSeeder::class);        

    }
}
