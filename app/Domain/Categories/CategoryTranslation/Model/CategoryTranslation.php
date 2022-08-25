<?php

namespace App\Domain\Categories\CategoryTranslation\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Concerns\AsPivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryTranslation extends Model
{
    use HasFactory, SoftDeletes, AsPivot;

    protected $guarded = [];

}
