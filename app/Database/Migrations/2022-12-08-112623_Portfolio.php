<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Portfolio extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel Portfolio
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 12,
                'auto_increment' => true,
            ],
            'image'       => [
                'type'           => 'TEXT',
            ],
            'name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'description' => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
                'null'           => true,
            ],
            'link'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'ord'       => [
                'type'           => 'TINYINT',
                'constraint'     => 2,
            ],
            'created_date datetime default current_timestamp',
            'updated_date datetime default current_timestamp on update current_timestamp',
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel Settings
        $this->forge->createTable('portfolio', TRUE);
    }

    public function down()
    {
        //
    }
}
