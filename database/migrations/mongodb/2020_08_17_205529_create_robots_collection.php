<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRobotsCollection extends Database\Migrations\MongoDB\Base\BaseSchemaMigration
{
    public function dbUp()
    {
        $this->schema->create('robots', function ($collection) {
            $collection->bigIncrements('id');
            $collection->index('user_id');
        });
    }

    public function dbDown()
    {
        $this->schema->dropIfExists('robots');
    }
}
