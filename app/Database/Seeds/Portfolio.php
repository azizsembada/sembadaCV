<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Portfolio extends Seeder
{
    public function run()
    {
        $portfolio_data = [
            [
                'id' => 1,
                'image'  => 'uploads/portfolio/abon.jpeg',
                'name'  => 'ABON THL',
                'description' => 'employee online attendance',
                'link' => 'https://play.google.com/store/apps/details?id=com.dinpendukcapilpbg.abon',
                'ord' => 1,
            ],
            [
                'id' => 2,
                'image'  => 'uploads/portfolio/artesiskids.jpeg',
                'name'  => 'ARTESIS KIDS',
                'description' => 'Online Store and Application',
                'link' => 'https://artesiskids.com/',
                'ord' => 2,
            ],
            [
                'id' => 3,
                'image'  => 'uploads/portfolio/einhomestuff.jpeg',
                'name'  => 'EINHOME STUFF',
                'description' => 'Online Store and Application',
                'link' => 'https://www.einhomestuff.com/',
                'ord' => 3,
            ],
            [
                'id' => 4,
                'image'  => 'uploads/portfolio/andinasyari.jpeg',
                'name'  => 'ANDINA SYARI',
                'description' => 'Online Store and Application',
                'link' => 'https://andinasyari.com/',
                'ord' => 4,
            ],
            [
                'id' => 5,
                'image'  => 'uploads/portfolio/mayudolan.jpeg',
                'name'  => 'MAYU DOLAN',
                'description' => 'Website Tour and travel',
                'link' => 'https://mayudolan.com/',
                'ord' => 5,
            ],
            [
                'id' => 6,
                'image'  => 'uploads/portfolio/optima.jpeg',
                'name'  => 'OP TIMA',
                'description' => 'online service',
                'link' => 'https://optima.purbalinggakab.go.id/',
                'ord' => 6,
            ],
        ];

        foreach ($portfolio_data as $data) {
            // insert semua data ke tabel
            $this->db->table('portfolio')->insert($data);
        }
    }
}
