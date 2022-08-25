<?php


namespace App\Http\ViewModels\Users\Activities\ActivityTypes\ActivityTypes;

use App\Domain\Users\Activities\ActivityTypes\ActivityTypes\Model\ActivityType;
use Illuminate\Contracts\Support\Arrayable;


class ActivityTypeShowVM implements Arrayable
{

    private $activityTypeId;

    public function __construct($props)
    {
        $this->activityTypeId = $props['id'] ;
    }

    private function get_ActivityType(){
        return ActivityType::with(['translations'])->find($this->activityTypeId);
    }
    public function toArray(): array
    {
        return [
            'ActivityType' => $this->get_ActivityType()
        ];
    }
}
