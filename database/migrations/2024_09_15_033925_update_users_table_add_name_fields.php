<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'dni')) {
                $table->string('dni', 8)->unique()->after('id');
            }
            if (!Schema::hasColumn('users', 'first_name')) {
                $table->string('first_name')->after('dni');
            }
            if (!Schema::hasColumn('users', 'second_name')) {
                $table->string('second_name')->nullable()->after('first_name');
            }
            if (!Schema::hasColumn('users', 'first_lastname')) {
                $table->string('first_lastname')->after('second_name');
            }
            if (!Schema::hasColumn('users', 'second_lastname')) {
                $table->string('second_lastname')->after('first_lastname');
            }
            if (Schema::hasColumn('users', 'name')) {
                $table->dropColumn('name');
            }
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'dni')) {
                $table->dropColumn('dni');
            }
            if (Schema::hasColumn('users', 'first_name')) {
                $table->dropColumn('first_name');
            }
            if (Schema::hasColumn('users', 'second_name')) {
                $table->dropColumn('second_name');
            }
            if (Schema::hasColumn('users', 'first_lastname')) {
                $table->dropColumn('first_lastname');
            }
            if (Schema::hasColumn('users', 'second_lastname')) {
                $table->dropColumn('second_lastname');
            }
            $table->string('name')->after('id');
        });
    }
};
