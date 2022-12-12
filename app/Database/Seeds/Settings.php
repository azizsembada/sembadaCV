<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Settings extends Seeder
{
    public function run()
    {
        $settings_data = [
            [
                'key' => 'site_logo',
                'alias'  => 'logo',
                'value' => 'uploads/settings/img/1670475336_b07277c2864cb52fdc76.png',
                'type' => 3,
                'ord' => 1,
            ],
            [
                'key' => 'image_hero',
                'alias'  => 'Gambar Hero',
                'value' => 'url logo',
                'type' => 3,
                'ord' => 2,
            ],
            [
                'key' => 'site_name',
                'alias'  => 'nama web',
                'value' => 'CV Aziz Sembada',
                'type' => 1,
                'ord' => 3,
            ],
            [
                'key' => 'profile_name',
                'alias'  => 'Nama Profil',
                'value' => 'Abdullah Aziz Sembada',
                'type' => 1,
                'ord' => 4,
            ],
            [
                'key' => 'profile_picture',
                'alias'  => 'Gambar Profil',
                'value' => 'uploads/settings/img/1670757469_adaee46f967fc464f1a8.jpg',
                'type' => 3,
                'ord' => 5,
            ],
            [
                'key' => 'profile_profession',
                'alias'  => 'Pekerjaan',
                'value' => 'Programmer',
                'type' => 1,
                'ord' => 6,
            ],
            [
                'key' => 'profile_email',
                'alias'  => 'email',
                'value' => 'sembada.labs@gmail.com',
                'type' => 1,
                'ord' => 7,
            ],
            [
                'key' => 'profile_cv',
                'alias'  => 'File cv',
                'value' => 'uploads/settings/pdf/1670758049_f026f7cc8ad54d8e3683.pdf',
                'type' => 4,
                'ord' => 8,
            ],
            [
                'key' => 'profile_github',
                'alias'  => 'Github',
                'value' => 'https://github.com/azizsembada',
                'type' => 1,
                'ord' => 9,
            ],
            [
                'key' => 'profile_telegram',
                'alias'  => 'Telegram',
                'value' => 'https://t.me/azizsembada',
                'type' => 1,
                'ord' => 10,
            ],
            [
                'key' => 'profile_linkedin',
                'alias'  => 'Linkedin',
                'value' => 'https://id.linkedin.com/in/abdullah-aziz-sembada-29730088',
                'type' => 1,
                'ord' => 11,
            ]
        ];

        foreach ($settings_data as $data) {
            // insert semua data ke tabel
            $this->db->table('settings')->insert($data);
        }
    }
}
