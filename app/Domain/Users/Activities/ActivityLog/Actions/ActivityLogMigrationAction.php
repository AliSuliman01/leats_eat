<?php


namespace App\Domain\Users\Activities\ActivityLog\Actions;


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ActivityLogMigrationAction
{

    public static function execute($number){
        Schema::create('activity_log_'.$number, function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('activity_type_id')->constrained()->cascadeOnDelete();
            $table->unsignedBigInteger('target_id')->nullable();
            $table->string('target_table_name')->nullable();
            $table->ipAddress('ip');
            $table->foreignId('device_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('platform_version_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('browser_version_id')->nullable()->constrained()->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
