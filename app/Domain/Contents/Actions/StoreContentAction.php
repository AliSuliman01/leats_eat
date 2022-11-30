<?php


namespace App\Domain\Contents\Actions;


use App\Domain\Contents\DTO\ContentDTO;
use App\Domain\Contents\Model\Content;

class StoreContentAction
{
    public static function execute(
    ContentDTO $contentDTO
    ){

        return Content::create(array_null_filter($contentDTO->toArray()));
    }
}
