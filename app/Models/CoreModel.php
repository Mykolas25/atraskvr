<?php

namespace App\Models;

use App\Http\Traits\FillableTrait;
use App\Http\Traits\TableNameTrait;
use App\Http\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CoreModel extends Model
{
    /**
     * Incrementing is set to false
     *
     * @var bool
     */
    public $incrementing = false;
    use SoftDeletes;
    use UuidTrait;
    use FillableTrait;
    use TableNameTrait;

    public function getFillable()
    {
        if(!sizeof($this->fillable < 2))
        unset($this->fillable[0]);

        else{
            return $this->fillable;
        }

    }
    public function getTableName()
    {
        $tableName = substr($this->table, 3);
        return $tableName;
    }

}
