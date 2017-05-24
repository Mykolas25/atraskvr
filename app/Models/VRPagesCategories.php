<?php

namespace App\Models;


class VRPagesCategories extends CoreModel
{
    protected $table = 'vr_pages_categories';

    protected $fillable = ['id', 'pages_id', 'resources_id'];


    public function CategoriesTranslations()
    {
        return $this->hasOne(VRCategoriesTranslations::class,'categories_id', 'id');
    }

    public function Pages()
    {
        return $this->hasMany(VRPages::class, 'pages_categories_id', 'id');
    }

}
