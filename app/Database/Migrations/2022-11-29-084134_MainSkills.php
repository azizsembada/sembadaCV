<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MainSkills extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel Main Skills
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 12,
                'auto_increment' => true,
            ],
            'skills'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
            ],
            'percentage' => [
                'type'           => 'INT',
                'constraint'     => 3,
                'null'           => true,
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
        $this->forge->createTable('main_skills', TRUE);
    }

    public function down()
    {
        //
    }
}
