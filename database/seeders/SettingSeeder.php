<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate(['email' => 'admin'], [
            'name'      => 'Digtal',
            'email'     => 'admin@admin.com',
            'address'   => 'jkhihvinvinuivnh',
            'phone'     => '123456789',
            'facebook'  => 'https://www.facebook.com/',
            'twitter'   => 'https://twitter.com/',
            'instagram' => 'https://www.instagram.com/',
            'linkedin'  => 'https://www.linkedin.com/'
        ]);
    }
}
