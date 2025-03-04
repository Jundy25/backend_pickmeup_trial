<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\Rider;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'role_name' => 'SuperAdmin',
                'role_description' => 'Super Administrator role',
                'permission_type' => 'full_in_app_access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_name' => 'Admin',
                'role_description' => 'Administrator role',
                'permission_type' => 'full_in_app_access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_name' => 'Rider',
                'role_description' => 'Rider role',
                'permission_type' => 'limited_rider_access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_name' => 'Customer',
                'role_description' => 'Customer role',
                'permission_type' => 'limited_access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        

        // Added separate file for users
        DB::table('users')->insert([
            [
                'role_id' => User::ROLE_SUPERADMIN,
                'first_name' => 'Superadmin',
                'last_name' => 'Superadmin',
                'gender' => 'Male',
                'date_of_birth' => '2001-01-01',
                'email' => 'superadmin@gmail.com',
                'user_name' => 'superadmin',
                'password' => Hash::make('!superadmin_123!'),
                'mobile_number' => '09123456789',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => User::ROLE_ADMIN,
                'first_name' => 'Admin',
                'last_name' => 'Admin',
                'gender' => 'Male',
                'date_of_birth' => '2003-03-03', 
                'email' => 'admin@gmail.com',
                'user_name' => 'admin',
                'password' => Hash::make('!admin_123!'),
                'mobile_number' => '09123456789',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => User::ROLE_RIDER,
                'first_name' => 'Aladdin',
                'last_name' => 'Buwanding',
                'gender' => 'Male',
                'date_of_birth' => '1920-01-15',
                'email' => 'aladdin@gmail.com',
                'user_name' => 'aladdin',
                'password' => Hash::make('aladdin'),
                'mobile_number' => '1234567890',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => User::ROLE_RIDER,
                'first_name' => 'Raphael',
                'last_name' => 'Alingig',
                'gender' => 'Male',
                'date_of_birth' => '1920-01-15',
                'email' => 'raphael@gmail.com',
                'user_name' => 'raphael',
                'password' => Hash::make('raphael'),
                'mobile_number' => '1234567890',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => User::ROLE_RIDER,
                'first_name' => 'John',
                'last_name' => 'Ratunil',
                'gender' => 'Male',
                'date_of_birth' => '1920-01-15',
                'email' => 'john@gmail.com',
                'user_name' => 'john',
                'password' => Hash::make('john'),
                'mobile_number' => '1234567890',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => User::ROLE_RIDER,
                'first_name' => 'Ray',
                'last_name' => 'Ibarra',
                'gender' => 'Male',
                'date_of_birth' => '1920-01-15',
                'email' => 'ray@gmail.com',
                'user_name' => 'ray',
                'password' => Hash::make('ray'),
                'mobile_number' => '1234567890',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => User::ROLE_RIDER,
                'first_name' => 'Mark',
                'last_name' => 'Juaton',
                'gender' => 'Male',
                'date_of_birth' => '1920-01-15',
                'email' => 'mark@gmail.com',
                'user_name' => 'mark',
                'password' => Hash::make('mark'),
                'mobile_number' => '1234567890',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => User::ROLE_CUSTOMER,
                'first_name' => 'Thad',
                'last_name' => 'Huber',
                'gender' => 'Male',
                'date_of_birth' => '1920-01-15',
                'email' => 'thad@gmail.com',
                'user_name' => 'thad',
                'password' => Hash::make('thad'),
                'mobile_number' => '1234567890',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => User::ROLE_CUSTOMER,
                'first_name' => 'Erin',
                'last_name' => 'Flower',
                'gender' => 'Male',
                'date_of_birth' => '1920-01-15',
                'email' => 'Erin@gmail.com',
                'user_name' => 'erin',
                'password' => Hash::make('erin'),
                'mobile_number' => '1234567890',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => User::ROLE_CUSTOMER,
                'first_name' => 'Gil',
                'last_name' => 'Vincent',
                'gender' => 'Male',
                'date_of_birth' => '1920-01-15',
                'email' => 'gil@gmail.com',
                'user_name' => 'gil',
                'password' => Hash::make('gil'),
                'mobile_number' => '1234567890',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => User::ROLE_CUSTOMER,
                'first_name' => 'Jayne',
                'last_name' => 'Olvier',
                'gender' => 'Female',
                'date_of_birth' => '1920-01-15',
                'email' => 'jayne@gmail.com',
                'user_name' => 'jayne',
                'password' => Hash::make('jayne'),
                'mobile_number' => '1234567890',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => User::ROLE_CUSTOMER,
                'first_name' => 'Sony',
                'last_name' => 'Ali',
                'gender' => 'Male',
                'date_of_birth' => '1920-01-15',
                'email' => 'sony@gmail.com',
                'user_name' => 'sony',
                'password' => Hash::make('sony'),
                'mobile_number' => '1234567890',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => User::ROLE_CUSTOMER,
                'first_name' => 'Tracy',
                'last_name' => 'Moreno',
                'gender' => 'Female',
                'date_of_birth' => '1920-01-15',
                'email' => 'tracy@gmail.com',
                'user_name' => 'tracy',
                'password' => Hash::make('tracy'),
                'mobile_number' => '1234567890',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],


        ]);

        $riders = User::where('role_id', 3)->get();
            foreach ($riders as $rider) {
                Rider::create([
                    'user_id' => $rider->user_id,
                    'registration_date' => $rider->created_at,
                    'verification_status' => 'Unverified', 
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }


        DB::table('requirements')->insert([
            [
                'title' => 'Motorcycle Picture',
                'description' => 'Image of the Motorcycle Model',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'ORCR',
                'description' => 'Image of ORCR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'OR Expiration Date',
                'description' => 'OR Expiration Date',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Drivers License',
                'description' => 'Image of the Drivers License',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Drivers License Number',
                'description' => 'Drivers License Number',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'License Expiration Date',
                'description' => 'Drivers License Expiration Date',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'TPL Insurance',
                'description' => 'Image of the TPL Insurance',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Barangay Clearance',
                'description' => 'Image of the Barangay Clearance',
                'created_at' => now(),
                'updated_at' => now(), 
            ],
            [
                'title' => 'Police Clearance',
                'description' => 'Image of the Police Clearance',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Plate Number',
                'description' => 'Plate Number',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);

        DB::table('fare')->insert([
            [
                'first_2km' => 40,
                'exceeding_2km' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
