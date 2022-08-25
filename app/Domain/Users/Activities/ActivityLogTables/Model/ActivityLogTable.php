<?php

namespace App\Domain\Users\Activities\ActivityLogTables\Model;

use App\Models\SmartModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActivityLogTable extends SmartModel
{
    use HasFactory,SoftDeletes;

        protected $guarded = [
            'id',
            'created_at',
            'updated_at',
            'deleted_at',
        ];

        protected $hidden = [
            'created_at',
            'updated_at',
            'deleted_at',
            'created_by_user_id',
            'updated_by_user_id',
            'deleted_by_user_id',
        ];

        public function getActivityLogTablesNames(){
            return ActivityLogTable::select('table_name')->pluck('table_name');
        }
}
