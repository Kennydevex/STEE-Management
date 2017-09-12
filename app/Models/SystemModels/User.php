<?php

namespace STEE\Models\SystemModels;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Symfony\Component\Routing\Generator\ConfigurableRequirementsInterface;

class User extends Authenticatable
{
    //===============================Traits=====================================
    use HasRoles;
    use Notifiable;
    //==========================================================================

    
    //==============================Mutator=====================================
    // Este é uma mutador que ira incriptar a palavra passe antes de entra na base de dados;
    public function setPasswordAttribute($password)
    {   
        $this->attributes['password'] = bcrypt($password);
    }    
    //==========================================================================
    
    
    //=============================Atibute Settings==============================
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password',
        'gender',
        'active',
        'avatar',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
    //==========================================================================
    
    
}
