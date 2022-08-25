<?php


namespace App\Http\ViewModels\Users\Activities\ActivityLog;


use App\Builder\OurBuilder;
use App\Domain\Users\Activities\ActivityLogTables\Model\ActivityLogTable;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Facades\Auth;

class MyActivityLogVM implements Arrayable
{
    private $builder ;

    public function __construct()
    {
        $activity_log_tables = ActivityLogTable::select('table_name')->pluck('table_name');
        $this->builder = new OurBuilder($activity_log_tables);
    }

    public function get_activities(){
        return $this->builder->where('user_id','=',Auth::id())->orderBy('id','desc')->multiTablePaginate();
    }
    public function toArray()
    {
        return [
            'my_activity_log' => $this->get_activities()
        ];
    }
}
