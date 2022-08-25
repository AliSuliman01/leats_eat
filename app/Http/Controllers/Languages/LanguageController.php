<?php


namespace App\Http\Controllers\Languages;


use App\Domain\Languages\Model\Language;
use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\Languages\Actions\LanguageStoreAction;
use App\Domain\Languages\Actions\LanguageDestroyAction;
use App\Domain\Languages\Actions\LanguageUpdateAction;
use App\Domain\Languages\DTO\LanguageDTO;
use App\Http\Requests\Languages\LanguageStoreRequest;
use App\Http\Requests\Languages\LanguageUpdateRequest;
use App\Http\ViewModels\Languages\LanguageShowVM;
use App\Http\ViewModels\Languages\LanguageIndexVM;

class LanguageController extends Controller
{

    public function index(){

        return response()->json(Response::success((new LanguageIndexVM())->toArray()));
    }

    public function show(Language $language){

        return response()->json(Response::success((new LanguageShowVM($language))->toArray()));
    }

    public function store(LanguageStoreRequest $request){
        $data = $request->validated() ;

        $languageDTO = LanguageDTO::fromRequest($data);

        $language = LanguageStoreAction::execute($languageDTO);

        return response()->json(Response::success((new LanguageShowVM($language))->toArray()));
    }

    public function update(LanguageUpdateRequest $request){
        $data = $request->validated() ;

        $languageDTO = LanguageDTO::fromRequest($data);

        $language = LanguageUpdateAction::execute($languageDTO);

        return response()->json(Response::success((new LanguageShowVM($language))->toArray()));
    }

    public function destroy(Language $language){

        return response()->json(Response::success(LanguageDestroyAction::execute($language)));
    }

}
