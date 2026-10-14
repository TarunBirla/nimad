<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('visitors')) {
            Schema::table('visitors', function (Blueprint $table) {
                if (!Schema::hasColumn('visitors', 'city')) {
                    $table->string('city', 100)->nullable()->after('ip_address');
                }
                if (!Schema::hasColumn('visitors', 'region')) {
                    $table->string('region', 100)->nullable()->after('city');
                }
                if (!Schema::hasColumn('visitors', 'country')) {
                    $table->string('country', 100)->nullable()->after('region');
                }
                if (!Schema::hasColumn('visitors', 'country_code')) {
                    $table->string('country_code', 10)->nullable()->after('country');
                }
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('visitors')) {
            Schema::table('visitors', function (Blueprint $table) {
                $columns = ['city', 'region', 'country', 'country_code'];
                foreach ($columns as $col) {
                    if (Schema::hasColumn('visitors', $col)) {
                        $table->dropColumn($col);
                    }
                }
            });
        }
    }
};
