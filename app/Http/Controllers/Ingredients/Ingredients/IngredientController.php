<?php


namespace App\Http\Controllers\Ingredients\Ingredients;


use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\Ingredients\Ingredients\Model\Ingredient;
use App\Domain\Ingredients\Ingredients\Actions\StoreIngredientAction;
use App\Domain\Ingredients\Ingredients\Actions\DestroyIngredientAction;
use App\Domain\Ingredients\Ingredients\Actions\UpdateIngredientAction;
use App\Domain\Ingredients\Ingredients\DTO\IngredientDTO;
use App\Http\Requests\Ingredients\Ingredients\StoreIngredientRequest;
use App\Http\Requests\Ingredients\Ingredients\UpdateIngredientRequest;
use App\Http\ViewModels\Ingredients\Ingredients\GetIngredientVM;
use App\Http\ViewModels\Ingredients\Ingredients\GetAllIngredientsVM;

class IngredientController extends Controller
{
    public function __construct(){
        $this->middleware('datatable_adapters')->only(['index']);
        $this->middleware('auth.rest')->only(['store','update','destroy']);
    }
    public function index(){

        return response()->json(Response::success((new GetAllIngredientsVM())->toArray()));
    }

    public function show(Ingredient $ingredient){

        return response()->json(Response::success((new GetIngredientVM($ingredient))->toArray()));
    }

    public function store(StoreIngredientRequest $request){

        $data = $request->validated() ;

        $ingredientDTO = IngredientDTO::fromRequest($data);

        $ingredient = StoreIngredientAction::execute($ingredientDTO);

        return response()->json(Response::success((new GetIngredientVM($ingredient))->toArray()));
    }

    public function update(Ingredient $ingredient, UpdateIngredientRequest $request){

        $data = $request->validated() ;

        $ingredientDTO = IngredientDTO::fromRequest($data);

        $ingredient = UpdateIngredientAction::execute($ingredient, $ingredientDTO);

        return response()->json(Response::success((new GetIngredientVM($ingredient))->toArray()));
    }

    public function destroy(Ingredient $ingredient){

        return response()->json(Response::success(DestroyIngredientAction::execute($ingredient)));
    }

}
