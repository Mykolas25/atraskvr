<?php

namespace App\Models;


class VRPagesResourcesConnections extends CoreModel
{
    protected $table = 'vr_pages_resources_connections';

    protected $fillable = ['id', 'pages_id', 'resources_id','created_at','updated_at'];

    public function getFillables()
    {
        unset($this->fillable[0]);
        return $this->fillable;
    }


}
