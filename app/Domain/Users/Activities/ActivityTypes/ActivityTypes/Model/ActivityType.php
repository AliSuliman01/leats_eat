<?php

namespace App\Domain\Users\Activities\ActivityTypes\ActivityTypes\Model;

use App\Domain\Users\Activities\ActivityTypes\ActivityTypeTranslations\Model\ActivityTypeTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActivityType extends Model
{
    use HasFactory, SoftDeletes;

    public static $CREATE;
    public static $UPDATE;
    public static $DELETE;
    public static $RESTORE;
    public static $FORCE_DELETE;
    public static $RETRIEVED;

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


    public static function init()
    {
        self::$CREATE = ActivityTypeTranslation::where('name', 'create')->first()->activity_type_id ?? null;
        self::$UPDATE = ActivityTypeTranslation::where('name', 'update')->first()->activity_type_id ?? null;
        self::$DELETE = ActivityTypeTranslation::where('name', 'delete')->first()->activity_type_id ?? null;
        self::$RETRIEVED = ActivityTypeTranslation::where('name', 'retrieve')->first()->activity_type_id ?? null;
        self::$RESTORE = ActivityTypeTranslation::where('name', 'restore')->first()->activity_type_id ?? null;
        self::$FORCE_DELETE = ActivityTypeTranslation::where('name', 'force_delete')->first()->activity_type_id ?? null;
    }

    public function translations()
    {
        return $this->hasMany(ActivityTypeTranslation::class);
    }
}
