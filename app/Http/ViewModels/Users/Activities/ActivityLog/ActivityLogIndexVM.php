<?php


namespace App\Http\ViewModels\Users\Activities\ActivityLog;

use App\Builder\OurBuilder;
use App\Domain\Users\Activities\ActivityLogTables\Model\ActivityLogTable;
use Illuminate\Contracts\Support\Arrayable;

class ActivityLogIndexVM implements Arrayable
{
    private $builder ;

    public function __construct()
    {
        $activity_log_tables = ActivityLogTable::select('table_name')->pluck('table_name');
        $this->builder = new OurBuilder($activity_log_tables);
    }

    public function get_activities(){
    	return $this->builder->multiTablePaginate();
	}
    public function toArray(): array
    {
        return [
            'activity_log' => $this->get_activities()
        ];
    }
}
