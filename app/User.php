<?php

namespace App;

use App\Traits\ValidationTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    use ValidationTrait {
        ValidationTrait::validate as private parent_validate;
    }

    public function __construct( array $attributes = array()) {

        parent::__construct($attributes);
        $this->__validationConstruct();
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected function setRules()
    {
        $this->val_rules = array(
            'name' => 'required',
            'email' => 'required|unique:users,email,ignoreId',
            'password' => 'required'
        );
    }

    public function validate($data = null, $ignoreId = 'NULL') {
        return $this->parent_validate($data);
    }
}
