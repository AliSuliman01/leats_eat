<?php


namespace App\Http\Controllers\Ingredients\IngredientCategories;


use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\Ingredients\IngredientCategories\Model\IngredientCategory;
use App\Domain\Ingredients\IngredientCategories\Actions\StoreIngredientCategoryAction;
use App\Domain\Ingredients\IngredientCategories\Actions\DestroyIngredientCategoryAction;
use App\Domain\Ingredients\IngredientCategories\Actions\UpdateIngredientCategoryAction;
use App\Domain\Ingredients\IngredientCategories\DTO\IngredientCategoryDTO;
use App\Http\Requests\Ingredients\IngredientCategories\StoreIngredientCategoryRequest;
use App\Http\Requests\Ingredients\IngredientCategories\UpdateIngredientCategoryRequest;
use App\Http\ViewModels\Ingredients\IngredientCategories\GetIngredientCategoryVM;
use App\Http\ViewModels\Ingredients\IngredientCategories\GetAllIngredientCategorysVM;

class IngredientCategoryController extends Controller
{
    public function __construct(){
        $this->middleware('datatable_adapters')->only(['index']);
        $this->middleware('auth.rest')->only(['store','update','destroy']);
    }
    public function index(){

        return response()->json(Response::success((new GetAllIngredientCategorysVM())->toArray()));
    }

    public function show(IngredientCategory $ingredientCategory){

        return response()->json(Response::success((new GetIngredientCategoryVM($ingredientCategory))->toArray()));
    }

    public function store(StoreIngredientCategoryRequest $request){

        $data = $request->validated() ;

        $ingredientCategoryDTO = IngredientCategoryDTO::fromRequest($data);

        $ingredientCategory = StoreIngredientCategoryAction::execute($ingredientCategoryDTO);

        return response()->json(Response::success((new GetIngredientCategoryVM($ingredientCategory))->toArray()));
    }

    public function update(IngredientCategory $ingredientCategory, UpdateIngredientCategoryRequest $request){

        $data = $request->validated() ;

        $ingredientCategoryDTO = IngredientCategoryDTO::fromRequest($data);

        $ingredientCategory = UpdateIngredientCategoryAction::execute($ingredientCategory, $ingredientCategoryDTO);

        return response()->json(Response::success((new GetIngredientCategoryVM($ingredientCategory))->toArray()));
    }

    public function destroy(IngredientCategory $ingredientCategory){

        return response()->json(Response::success(DestroyIngredientCategoryAction::execute($ingredientCategory)));
    }

}
