<?php


namespace App\Domain\Contents\Actions;


use App\Domain\Contents\Model\Content;

class DestroyContentAction
{
    public static function execute(
        Content $content
    ){
        $content->delete();
        return $content;
    }
}
