<?php

namespace App\Models;

class VRCategoriesTranslations extends CoreModel
{
    protected $table = 'vr_categories_translations';
    protected $fillable = ['id', 'categories_id', 'languages_id', 'name', 'slug'];
    protected $hidden = ['id', 'count'];

    public function getFillables()
    {
        unset($this->fillable[0]);
        return $this->fillable;
    }

}
