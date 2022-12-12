<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        $user_data = [
            [
                'username'  => 'admin',
                //cost bcrypt factor 10
                'password' => '$2y$10$KQPgt8zVTP1.n2obbnda5uqw2fFODTg9uWdx/38KcegqoQPcFg/ZW', //12345678
                'status' => 1,
            ],
        ];

        foreach ($user_data as $data) {
            // insert semua data ke tabel
            $this->db->table('user')->insert($data);
        }
    }
}
