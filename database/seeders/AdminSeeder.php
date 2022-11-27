<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
            'title' => MR,
            'first_name' => 'Ranjith',
            'Last_name' => 'Nimalsiri',
            'gender' => MALE,
            'email' => 'ranjithnimalsiri@gmail.com',
            'address' => '291/C,Dewamitta place,Heiyanthuduwa',
            'contact_number' => '0764563245',
            'nic_no' => '603445567V',
            'dob' => '1960.10.12',
            'role_id' => ADMIN,
            'password' => bcrypt(12345678),
            'status' => ACTIVE
        ]);
    }
}
