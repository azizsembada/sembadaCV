<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Services extends Seeder
{
    public function run()
    {
        $services_data = [
            [
                'id' => 1,
                'name'  => 'Web Design',
                'icon' => 'fa-brands fa-html5',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'ord' => 1,
            ],
            [
                'id' => 2,
                'name'  => 'Web Develop',
                'icon' => 'fa fa-code',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'ord' => 2,
            ],
            [
                'id' => 3,
                'name'  => 'Well Documented',
                'icon' => 'fa-solid fa-file-pen',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'ord' => 3,
            ],
            [
                'id' => 4,
                'name'  => 'Awesome Display',
                'icon' => 'fa fa-eye',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'ord' => 4,
            ], [
                'id' => 5,
                'name'  => '100% Responsive',
                'icon' => 'fa-solid fa-circle-check',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'ord' => 5,
            ], [
                'id' => 6,
                'name'  => 'Retina Ready',
                'icon' => 'fa-solid fa-thumbs-up',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'ord' => 6,
            ], [
                'id' => 7,
                'name'  => 'Analytics',
                'icon' => 'fa-solid fa-chart-line',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'ord' => 7,
            ],
            [
                'id' => 8,
                'name'  => 'Support',
                'icon' => 'fa-solid fa-phone-volume',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'ord' => 8,
            ],
        ];

        foreach ($services_data as $data) {
            // insert semua data ke tabel
            $this->db->table('services')->insert($data);
        }
    }
}
