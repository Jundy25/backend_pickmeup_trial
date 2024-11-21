<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('pakyaw', function (Blueprint $table) {
            $table->json('riders')->nullable()->after('description');
        });
    }

    public function down()
    {
        Schema::table('pakyaw', function (Blueprint $table) {
            $table->dropColumn('riders');
        });
    }
};
