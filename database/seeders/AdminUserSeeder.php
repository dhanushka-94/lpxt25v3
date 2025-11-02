<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin users
        $admins = [
            [
                'name' => 'Laptop Expert Admin',
                'email' => 'admin@laptopexpert.lk',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'status' => 'active',
                'phone' => '0112959005',
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Olexto Admin',
                'email' => 'olexto@gmail.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'status' => 'active',
                'phone' => '0777506939',
                'email_verified_at' => now(),
            ],
        ];
        
        foreach ($admins as $adminData) {
            $admin = User::where('email', $adminData['email'])->first();
            
            if (!$admin) {
                User::create($adminData);
                $this->command->info("Admin user created: {$adminData['email']}");
            } else {
                $this->command->info("Admin user already exists: {$adminData['email']}");
            }
        }
        
        $this->command->warn('Default password for all admin users: admin123');
        $this->command->warn('Please change passwords after first login!');
    }
}