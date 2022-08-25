<?php


namespace App\Http\Controllers\Users\Activities\ActivityTypes\ActivityTypeTranslations;


use App\Domain\Users\Activities\ActivityTypes\ActivityTypeTranslations\Actions\ActivityTypeTranslationStoreAction;
use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\Users\Activities\ActivityTypes\ActivityTypeTranslations\Actions\ActivityTypeTranslationDestroyAction;
use App\Domain\Users\Activities\ActivityTypes\ActivityTypeTranslations\Actions\ActivityTypeTranslationUpdateAction;
use App\Domain\Users\Activities\ActivityTypes\ActivityTypeTranslations\DTO\ActivityTypeTranslationDTO;
use App\Http\Requests\Users\Activities\ActivityTypes\ActivityTypeTranslations\ActivityTypeTranslationStoreRequest;
use App\Http\Requests\Users\Activities\ActivityTypes\ActivityTypeTranslations\ActivityTypeTranslationUpdateRequest;
use App\Http\Requests\Users\Activities\ActivityTypes\ActivityTypeTranslations\ActivityTypeTranslationDestroyRequest;
use App\Http\Requests\Users\Activities\ActivityTypes\ActivityTypeTranslations\ActivityTypeTranslationShowRequest;
use App\Http\ViewModels\Users\Activities\ActivityTypes\ActivityTypeTranslations\ActivityTypeTranslationShowVM;
use App\Http\ViewModels\Users\Activities\ActivityTypes\ActivityTypeTranslations\ActivityTypeTranslationIndexVM;

class ActivityTypeTranslationController extends Controller
{

    public function index(){

        return response()->json(Response::success((new ActivityTypeTranslationIndexVM())->toArray()));
    }

    public function show(ActivityTypeTranslationShowRequest $request){

        return response()->json(Response::success((new ActivityTypeTranslationShowVM(['id' => $request->route('id')]))->toArray()));
    }

    public function store(ActivityTypeTranslationStoreRequest $request){
        $data = $request->validated() ;

        $activityTypeTranslationDTO = ActivityTypeTranslationDTO::fromRequest($data);

        $activityTypeTranslation = ActivityTypeTranslationStoreAction::execute($activityTypeTranslationDTO);

        return response()->json(Response::success((new ActivityTypeTranslationShowVM($activityTypeTranslation->toArray()))->toArray()));
    }

    public function update(ActivityTypeTranslationUpdateRequest $request){
        $data = $request->validated() ;

        $activityTypeTranslationDTO = ActivityTypeTranslationDTO::fromRequest($data);

        $activityTypeTranslation = ActivityTypeTranslationUpdateAction::execute($activityTypeTranslationDTO);

        return response()->json(Response::success((new ActivityTypeTranslationShowVM($activityTypeTranslation->toArray()))->toArray()));
    }

    public function destroy(ActivityTypeTranslationDestroyRequest $request){

        return response()->json(Response::success(ActivityTypeTranslationDestroyAction::execute(ActivityTypeTranslationDTO::fromRequest($request->validated()))));
    }

}
