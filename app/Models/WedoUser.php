<?php
namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class WedoUser extends Model implements Authenticatable
{
    protected $guarded = [];

    public function getAuthIdentifierName()
    {
        return 'token';
    }

    public function getAuthIdentifier()
    {
        return $this->attributes[$this->getAuthIdentifierName()];
    }

    public function getAuthPassword()
    {
        // TODO: Implement getAuthPassword() method.
    }

    public function getRememberToken()
    {
        // TODO: Implement getRememberToken() method.
    }

    public function setRememberToken($value)
    {
        // TODO: Implement setRememberToken() method.
    }

    public function getRememberTokenName()
    {
        // TODO: Implement getRememberTokenName() method.
    }
}
