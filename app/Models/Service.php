<?php

namespace App\Models;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class Service extends Model
{
    public function up()
{
Schema::create('services', function (Blueprint $table) {
$table->id();
$table->string('title');
$table->text('content');
$table->string('image');
$table->timestamps();
});
}
}
