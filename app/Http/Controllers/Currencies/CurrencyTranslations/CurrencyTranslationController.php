<?php


namespace App\Http\Controllers\Currencies\CurrencyTranslations;


use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\Currencies\CurrencyTranslations\Model\CurrencyTranslation;
use App\Domain\Currencies\CurrencyTranslations\Actions\StoreCurrencyTranslationAction;
use App\Domain\Currencies\CurrencyTranslations\Actions\DestroyCurrencyTranslationAction;
use App\Domain\Currencies\CurrencyTranslations\Actions\UpdateCurrencyTranslationAction;
use App\Domain\Currencies\CurrencyTranslations\DTO\CurrencyTranslationDTO;
use App\Http\Requests\Currencies\CurrencyTranslations\StoreCurrencyTranslationRequest;
use App\Http\Requests\Currencies\CurrencyTranslations\UpdateCurrencyTranslationRequest;
use App\Http\ViewModels\Currencies\CurrencyTranslations\GetCurrencyTranslationVM;
use App\Http\ViewModels\Currencies\CurrencyTranslations\GetAllCurrencyTranslationsVM;

class CurrencyTranslationController extends Controller
{
    public function __construct(){
        $this->middleware('datatable_adapters')->only(['index']);
        $this->middleware('auth.rest')->only(['store','update','destroy']);
    }
    public function index(){

        return response()->json(Response::success((new GetAllCurrencyTranslationsVM())->toArray()));
    }

    public function show(CurrencyTranslation $currencyTranslation){

        return response()->json(Response::success((new GetCurrencyTranslationVM($currencyTranslation))->toArray()));
    }

    public function store(StoreCurrencyTranslationRequest $request){

        $data = $request->validated() ;

        $currencyTranslationDTO = CurrencyTranslationDTO::fromRequest($data);

        $currencyTranslation = StoreCurrencyTranslationAction::execute($currencyTranslationDTO);

        return response()->json(Response::success((new GetCurrencyTranslationVM($currencyTranslation))->toArray()));
    }

    public function update(CurrencyTranslation $currencyTranslation, UpdateCurrencyTranslationRequest $request){

        $data = $request->validated() ;

        $currencyTranslationDTO = CurrencyTranslationDTO::fromRequest($data);

        $currencyTranslation = UpdateCurrencyTranslationAction::execute($currencyTranslation, $currencyTranslationDTO);

        return response()->json(Response::success((new GetCurrencyTranslationVM($currencyTranslation))->toArray()));
    }

    public function destroy(CurrencyTranslation $currencyTranslation){

        return response()->json(Response::success(DestroyCurrencyTranslationAction::execute($currencyTranslation)));
    }

}
