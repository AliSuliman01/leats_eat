<?php


namespace App\Http\Controllers\Ingredients\IngredientImages;


use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\Ingredients\IngredientImages\Model\IngredientImage;
use App\Domain\Ingredients\IngredientImages\Actions\StoreIngredientImageAction;
use App\Domain\Ingredients\IngredientImages\Actions\DestroyIngredientImageAction;
use App\Domain\Ingredients\IngredientImages\Actions\UpdateIngredientImageAction;
use App\Domain\Ingredients\IngredientImages\DTO\IngredientImageDTO;
use App\Http\Requests\Ingredients\IngredientImages\StoreIngredientImageRequest;
use App\Http\Requests\Ingredients\IngredientImages\UpdateIngredientImageRequest;
use App\Http\ViewModels\Ingredients\IngredientImages\GetIngredientImageVM;
use App\Http\ViewModels\Ingredients\IngredientImages\GetAllIngredientImagesVM;

class IngredientImageController extends Controller
{
    public function __construct(){
        $this->middleware('datatable_adapters')->only(['index']);
        $this->middleware('auth.rest')->only(['store','update','destroy']);
    }
    public function index(){

        return response()->json(Response::success((new GetAllIngredientImagesVM())->toArray()));
    }

    public function show(IngredientImage $ingredientImage){

        return response()->json(Response::success((new GetIngredientImageVM($ingredientImage))->toArray()));
    }

    public function store(StoreIngredientImageRequest $request){

        $data = $request->validated() ;

        $ingredientImageDTO = IngredientImageDTO::fromRequest($data);

        $ingredientImage = StoreIngredientImageAction::execute($ingredientImageDTO);

        return response()->json(Response::success((new GetIngredientImageVM($ingredientImage))->toArray()));
    }

    public function update(IngredientImage $ingredientImage, UpdateIngredientImageRequest $request){

        $data = $request->validated() ;

        $ingredientImageDTO = IngredientImageDTO::fromRequest($data);

        $ingredientImage = UpdateIngredientImageAction::execute($ingredientImage, $ingredientImageDTO);

        return response()->json(Response::success((new GetIngredientImageVM($ingredientImage))->toArray()));
    }

    public function destroy(IngredientImage $ingredientImage){

        return response()->json(Response::success(DestroyIngredientImageAction::execute($ingredientImage)));
    }

}
