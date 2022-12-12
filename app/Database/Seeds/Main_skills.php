<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Main_skills extends Seeder
{
    public function run()
    {
        $main_skills_data = [
            [
                'id' => 1,
                'skills'  => 'PHP',
                'percentage' => 97,
                'ord' => 1,
            ],
            [
                'id' => 2,
                'skills'  => 'Javascript',
                'percentage' => 90,
                'ord' => 2,
            ],
            [
                'id' => 3,
                'skills'  => 'Codeigniter',
                'percentage' => 95,
                'ord' => 3,
            ],
            [
                'id' => 4,
                'skills'  => 'Angular',
                'percentage' => 85,
                'ord' => 4,
            ],
            [
                'id' => 5,
                'skills'  => 'Corel Draw',
                'percentage' => 70,
                'ord' => 5,
            ],
            [
                'id' => 6,
                'skills'  => 'PhotoShop',
                'percentage' => 70,
                'ord' => 6,
            ],
            [
                'id' => 7,
                'skills'  => 'InDesign',
                'percentage' => 90,
                'ord' => 7,

            ],
            [
                'id' => 8,
                'skills'  => 'Python',
                'percentage' => 85,
                'ord' => 8,
            ]
        ];

        foreach ($main_skills_data as $data) {
            // insert semua data ke tabel
            $this->db->table('main_skills')->insert($data);
        }
    }
}
