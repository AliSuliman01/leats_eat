<?php

namespace App\Domain\Categories\Categories\Model;

use App\Domain\Categories\CategoryImages\Model\CategoryImage;
use App\Domain\Categories\CategoryTranslation\Model\CategoryTranslation;
use App\Domain\Materials\MaterialCategory\Model\MaterialCategory;
use App\Domain\Materials\Materials\Model\Material;
use App\Models\SmartModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\App;

class Category extends SmartModel
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function translations()
    {
        return $this->hasMany(CategoryTranslation::class,'category_id');
    }

    public function translation()
    {
        return $this->hasOne(CategoryTranslation::class,'category_id')
            ->where('language_id',App::getLocale());
    }

    public function images()
    {
        return $this->hasMany(CategoryImage::class,'category_id');
    }

    public function categories()
    {
        return $this->hasMany(Category::class,'parent_category_id');
    }

}
