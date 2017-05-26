<?php

namespace App\Models;


class VRPagesCategories extends CoreModel
{


    public function CategoriesTranslations()
    {
        return $this->hasOne(VRCategoriesTranslations::class,'categories_id', 'id');
    }

    public function Pages()
    {
        return $this->hasMany(VRPages::class, 'pages_categories_id', 'id');
    }

    protected $table = 'vr_pages_categories';
    protected $fillable = ['id'];
    protected $hidden = ['count', 'deleted_at'];
//    protected $with = ['translations'];
//
//    public function translations()
//    {
//        return $this->hasMany(VRCategoriesTranslations::class, 'categories_id', 'id');
//    }
    public function getFillables()
    {
        return $this->fillable;
    }

}
