<?php


namespace App\Domain\Users\Activities\ActivityLog\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class ActivityLogDTO extends DataTransferObject
{
    /* @var integer|null */
    public $id;
    /* @var integer|null */
    public $user_id;
    /* @var integer|null */
    public $activity_type_id;
    /* @var integer|null */
    public $target_id;
    /* @var string|null */
    public $target_table_name;
    /* @var string|null */
    public $ip;
    /* @var integer|null */
    public $device_id;
    /* @var integer|null */
    public $platform_version_id;
    /* @var integer|null */
    public $browser_version_id;
    /* @var string|null */
    public $created_at;


    public static function fromRequest($request)
    {
        return new self([
            'id' => $request['id'] ?? null,
            'user_id' => $request['user_id'] ?? null,
            'activity_type_id' => $request['activity_type_id'] ?? null,
            'target_id' => $request['target_id'] ?? null,
            'target_table_name' => $request['target_table_name'] ?? null,
            'ip' => $request['ip'] ?? null,
            'device_id' => $request['device_id'] ?? null,
            'platform_version_id' => $request['platform_version_id'] ?? null,
            'browser_version_id' => $request['browser_version_id'] ?? null,
            'created_at' => $request['created_at'] ?? null,

        ]);
    }
}
