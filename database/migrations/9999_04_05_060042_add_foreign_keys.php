<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('type_user', function (Blueprint $table) {

            $table -> foreignId('type_id') -> constrained();
            $table -> foreignId('user_id') -> constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('type_user', function (Blueprint $table) {

            $table->dropForeign(['type_id']);
            $table -> dropColumn(['type_id']);

            $table -> dropForeign(['user_id']);
            $table -> dropColumn(['user_id']);
        });
    }
};
