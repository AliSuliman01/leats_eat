<?php


namespace App\Http\Controllers\Users\Activities\ActivityLogTables;


use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\Users\Activities\ActivityLogTables\Actions\ActivityLogTableStoreAction;
use App\Domain\Users\Activities\ActivityLogTables\Actions\ActivityLogTableDestroyAction;
use App\Domain\Users\Activities\ActivityLogTables\Actions\ActivityLogTableUpdateAction;
use App\Domain\Users\Activities\ActivityLogTables\DTO\ActivityLogTableDTO;
use App\Http\Requests\Users\Activities\ActivityLogTables\ActivityLogTableStoreRequest;
use App\Http\Requests\Users\Activities\ActivityLogTables\ActivityLogTableUpdateRequest;
use App\Http\Requests\Users\Activities\ActivityLogTables\ActivityLogTableDestroyRequest;
use App\Http\Requests\Users\Activities\ActivityLogTables\ActivityLogTableShowRequest;
use App\Http\ViewModels\Users\Activities\ActivityLogTables\ActivityLogTableShowVM;
use App\Http\ViewModels\Users\Activities\ActivityLogTables\ActivityLogTableIndexVM;

class ActivityLogTableController extends Controller
{

    public function index(){

        return response()->json(Response::success((new ActivityLogTableIndexVM())->toArray()));
    }

    public function show(ActivityLogTableShowRequest $request){

        return response()->json(Response::success((new ActivityLogTableShowVM(['id' => $request->route('id')]))->toArray()));
    }

    public function store(ActivityLogTableStoreRequest $request){
        $data = $request->validated() ;

        $logTableDTO = ActivityLogTableDTO::fromRequest($data);

        $logTable = ActivityLogTableStoreAction::execute($logTableDTO);

        return response()->json(Response::success((new ActivityLogTableShowVM($logTable->toArray()))->toArray()));
    }

    public function update(ActivityLogTableUpdateRequest $request){
        $data = $request->validated() ;

        $logTableDTO = ActivityLogTableDTO::fromRequest($data);

        $logTable = ActivityLogTableUpdateAction::execute($logTableDTO);

        return response()->json(Response::success((new ActivityLogTableShowVM($logTable->toArray()))->toArray()));
    }

    public function destroy(ActivityLogTableDestroyRequest $request){

        return response()->json(Response::success(ActivityLogTableDestroyAction::execute(ActivityLogTableDTO::fromRequest($request->validated()))));
    }

}
