<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Customer;
use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@grandstay.test'],
            [
                'name' => 'Admin',
                'password' => Hash::make('adminadudu22'),
                'role' => 'admin',
            ]
        );

        $user = User::updateOrCreate(
            ['email' => 'tamu@grandstay.test'],
            [
                'name' => 'Tamu',
                'password' => Hash::make('customeradudu33'),
                'role' => 'customer',
            ]
        );

        Customer::updateOrCreate(
            ['user_id' => $user->id],
            [
                'phone' => '081234567890',
                'identity_number' => null,
                'address' => 'Bandung',
            ]
        );

        $room = [
            [
                'room_number' => '101', 
                'type' => 'Standard', 
                'price_per_night' => 350000],
            [
                'room_number' => '102',
                'type' => 'Standard',
                'price_per_night' => 350000
            ],
            [
                'room_number' => '103',
                'type' => 'Standard',
                'price_per_night' => 350000
            ],

            [
                'room_number' => '201',
                'type' => 'Superior',
                'price_per_night' => 550000
            ],
            [
                'room_number' => '202',
                'type' => 'Superior',
                'price_per_night' => 550000
            ],
            [
                'room_number' => '203',
                'type' => 'Superior',
                'price_per_night' => 550000
            ],

            [
                'room_number' => '301',
                'type' => 'Deluxe',
                'price_per_night' => 850000
            ],
            [
                'room_number' => '302',
                'type' => 'Deluxe',
                'price_per_night' => 850000
            ],
            [
                'room_number' => '303',
                'type' => 'Deluxe',
                'price_per_night' => 850000
            ],
        ];

        foreach ($room as $room){
            Room::updateOrCreate(
                ['room_number' => $room['room_number']],
                [
                    'type' => $room['type'],
                    'description' => 'Kamar nyaman tipe '
                    . $room['type'],
                    'capacity' => 2,
                    'price_per_night' => $room['price_per_night'],
                    'status' => $room['room_number'] === '303' ? 'maintenance' : 'available', 'image' => null,
                ]
            );
        }
    }
}
