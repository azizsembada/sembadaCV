<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Settings extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel Settings
        $this->forge->addField([
            'key'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 20
            ],
            'value'       => [
                'type'           => 'TEXT',
            ],
            'alias' => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
                'null'           => true,
            ],
            'type'       => [
                'type'           => 'TINYINT',
                'constraint'     => 1,
            ],
            'ord'       => [
                'type'           => 'TINYINT',
                'constraint'     => 2,
            ],
            'created_date datetime default current_timestamp',
            'updated_date datetime default current_timestamp on update current_timestamp',
        ]);

        // Membuat primary key
        $this->forge->addKey('key', TRUE);

        // Membuat tabel Settings
        $this->forge->createTable('settings', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('settings');
    }
}
