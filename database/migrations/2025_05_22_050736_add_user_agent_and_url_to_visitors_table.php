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
    Schema::table('visitors', function (Blueprint $table) {
        $table->text('user_agent')->nullable()->after('ip_address');
        $table->text('url')->nullable()->after('user_agent');
    });
}

public function down()
{
    Schema::table('visitors', function (Blueprint $table) {
        $table->dropColumn(['user_agent', 'url']);
    });
}
};
