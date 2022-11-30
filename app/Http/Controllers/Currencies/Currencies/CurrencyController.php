<?php


namespace App\Http\Controllers\Currencies\Currencies;


use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\Currencies\Currencies\Model\Currency;
use App\Domain\Currencies\Currencies\Actions\StoreCurrencyAction;
use App\Domain\Currencies\Currencies\Actions\DestroyCurrencyAction;
use App\Domain\Currencies\Currencies\Actions\UpdateCurrencyAction;
use App\Domain\Currencies\Currencies\DTO\CurrencyDTO;
use App\Http\Requests\Currencies\Currencies\StoreCurrencyRequest;
use App\Http\Requests\Currencies\Currencies\UpdateCurrencyRequest;
use App\Http\ViewModels\Currencies\Currencies\GetCurrencyVM;
use App\Http\ViewModels\Currencies\Currencies\GetAllCurrencysVM;

class CurrencyController extends Controller
{
    public function __construct(){
        $this->middleware('datatable_adapters')->only(['index']);
        $this->middleware('auth.rest')->only(['store','update','destroy']);
    }
    public function index(){

        return response()->json(Response::success((new GetAllCurrencysVM())->toArray()));
    }

    public function show(Currency $currency){

        return response()->json(Response::success((new GetCurrencyVM($currency))->toArray()));
    }

    public function store(StoreCurrencyRequest $request){

        $data = $request->validated() ;

        $currencyDTO = CurrencyDTO::fromRequest($data);

        $currency = StoreCurrencyAction::execute($currencyDTO);

        return response()->json(Response::success((new GetCurrencyVM($currency))->toArray()));
    }

    public function update(Currency $currency, UpdateCurrencyRequest $request){

        $data = $request->validated() ;

        $currencyDTO = CurrencyDTO::fromRequest($data);

        $currency = UpdateCurrencyAction::execute($currency, $currencyDTO);

        return response()->json(Response::success((new GetCurrencyVM($currency))->toArray()));
    }

    public function destroy(Currency $currency){

        return response()->json(Response::success(DestroyCurrencyAction::execute($currency)));
    }

}
