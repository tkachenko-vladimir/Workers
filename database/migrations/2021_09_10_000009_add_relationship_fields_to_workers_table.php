<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToWorkersTable extends Migration
{
    public function up()
    {
        Schema::table('workers', function (Blueprint $table) {
            $table->unsignedBigInteger('work_id')->nullable();
            $table->foreign('work_id', 'work_fk_4841503')->references('id')->on('typeworks');
        });
    }
}
