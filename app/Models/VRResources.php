<?php

namespace App\Models;


class VRResources extends CoreModel
{
    protected $table = 'vr_resources';

    protected $fillable = ['id', 'mime_type', 'path', 'width', 'height', 'size'];



    public function getFillables()
    {
        unset($this->fillable[0]);
        return $this->fillable;
    }


}
