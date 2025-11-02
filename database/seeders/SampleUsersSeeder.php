<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SampleUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample Customer Users
        $customers = [
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'password' => Hash::make('password123'),
                'role' => 'customer',
                'status' => 'active',
                'phone' => '0777123456',
                'date_of_birth' => '1990-01-15',
                'gender' => 'male',
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'password' => Hash::make('password123'),
                'role' => 'customer',
                'status' => 'active',
                'phone' => '0777654321',
                'date_of_birth' => '1992-05-20',
                'gender' => 'female',
                'email_verified_at' => now(),
            ],
            [
                'name' => 'David Perera',
                'email' => 'david.perera@example.com',
                'password' => Hash::make('password123'),
                'role' => 'customer',
                'status' => 'active',
                'phone' => '0777789456',
                'date_of_birth' => '1988-11-10',
                'gender' => 'male',
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Nimal Fernando',
                'email' => 'nimal.fernando@example.com',
                'password' => Hash::make('password123'),
                'role' => 'customer',
                'status' => 'active',
                'phone' => '0777456123',
                'date_of_birth' => '1995-03-25',
                'gender' => 'male',
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Sithara De Silva',
                'email' => 'sithara.desilva@example.com',
                'password' => Hash::make('password123'),
                'role' => 'customer',
                'status' => 'active',
                'phone' => '0777894561',
                'date_of_birth' => '1993-08-14',
                'gender' => 'female',
                'email_verified_at' => now(),
            ],
        ];
        
        foreach ($customers as $customerData) {
            $customer = User::where('email', $customerData['email'])->first();
            
            if (!$customer) {
                User::create($customerData);
                $this->command->info("Customer user created: {$customerData['email']}");
            } else {
                $this->command->info("Customer user already exists: {$customerData['email']}");
            }
        }
        
        $this->command->info('Sample customer users created successfully!');
        $this->command->info('Default password for all customers: password123');
    }
}

