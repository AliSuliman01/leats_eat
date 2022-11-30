<?php


namespace App\Http\Controllers\Ingredients\IngredientTranslation;


use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\Ingredients\IngredientTranslation\Model\IngredientTranslation;
use App\Domain\Ingredients\IngredientTranslation\Actions\StoreIngredientTranslationAction;
use App\Domain\Ingredients\IngredientTranslation\Actions\DestroyIngredientTranslationAction;
use App\Domain\Ingredients\IngredientTranslation\Actions\UpdateIngredientTranslationAction;
use App\Domain\Ingredients\IngredientTranslation\DTO\IngredientTranslationDTO;
use App\Http\Requests\Ingredients\IngredientTranslation\StoreIngredientTranslationRequest;
use App\Http\Requests\Ingredients\IngredientTranslation\UpdateIngredientTranslationRequest;
use App\Http\ViewModels\Ingredients\IngredientTranslation\GetIngredientTranslationVM;
use App\Http\ViewModels\Ingredients\IngredientTranslation\GetAllIngredientTranslationsVM;

class IngredientTranslationController extends Controller
{
    public function __construct(){
        $this->middleware('datatable_adapters')->only(['index']);
        $this->middleware('auth.rest')->only(['store','update','destroy']);
    }
    public function index(){

        return response()->json(Response::success((new GetAllIngredientTranslationsVM())->toArray()));
    }

    public function show(IngredientTranslation $ingredientTranslation){

        return response()->json(Response::success((new GetIngredientTranslationVM($ingredientTranslation))->toArray()));
    }

    public function store(StoreIngredientTranslationRequest $request){

        $data = $request->validated() ;

        $ingredientTranslationDTO = IngredientTranslationDTO::fromRequest($data);

        $ingredientTranslation = StoreIngredientTranslationAction::execute($ingredientTranslationDTO);

        return response()->json(Response::success((new GetIngredientTranslationVM($ingredientTranslation))->toArray()));
    }

    public function update(IngredientTranslation $ingredientTranslation, UpdateIngredientTranslationRequest $request){

        $data = $request->validated() ;

        $ingredientTranslationDTO = IngredientTranslationDTO::fromRequest($data);

        $ingredientTranslation = UpdateIngredientTranslationAction::execute($ingredientTranslation, $ingredientTranslationDTO);

        return response()->json(Response::success((new GetIngredientTranslationVM($ingredientTranslation))->toArray()));
    }

    public function destroy(IngredientTranslation $ingredientTranslation){

        return response()->json(Response::success(DestroyIngredientTranslationAction::execute($ingredientTranslation)));
    }

}
