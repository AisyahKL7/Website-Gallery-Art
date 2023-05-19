<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPhotoColumnToGallery extends Migration
{
    public function up()
    {
        $fields = [
            "photo" => [
                "type"=> "TEXT",
            ],
        ];

        $this->forge->addColumn('gallery2', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('gallery2', 'photo');
    }
}
