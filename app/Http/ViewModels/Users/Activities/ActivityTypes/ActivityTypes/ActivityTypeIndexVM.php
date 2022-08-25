<?php


namespace App\Http\ViewModels\Users\Activities\ActivityTypes\ActivityTypes;

use App\Domain\Users\Activities\ActivityTypes\ActivityTypes\Model\ActivityType;
use Illuminate\Contracts\Support\Arrayable;

class ActivityTypeIndexVM implements Arrayable
{

    public function get_activity_types(){
    	return ActivityType::with(['translations'])->get();
	}
    public function toArray(): array
    {
        return [
            'activity_types' => $this->get_activity_types()
        ];
    }
}
