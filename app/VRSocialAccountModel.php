<?php

namespace App;

use App\Models\VRUsers;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class VRSocialAccountModel extends Model
{
    protected $table = 'soclia_media_users';
    protected $fillable = ['id','oauth_uid','oauth_provider'];

    public function user()

    {
        return $this->belongsTo(VRUsers::class);
    }

}
