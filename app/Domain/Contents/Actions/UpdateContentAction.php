<?php

namespace App\Domain\Contents\Actions;

use App\Domain\Contents\DTO\ContentDTO;
use App\Domain\Contents\Model\Content;

class UpdateContentAction
{

    public static function execute(
        Content $content,ContentDTO $contentDTO
    ){
        $content->update(array_null_filter($contentDTO->toArray()));
        return $content;
    }
}
