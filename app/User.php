<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'facebook_id', 'twitter_id', 'google_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function location()
    {
        return $this->hasMany('App\Location');
    }

    public static function findUserByID($oauth_provider, $oauth_id)
    {
        $user = User::where($oauth_provider . '_id', $oauth_id)->first();

        if(!$user) return null;

        return $user;
    }

    public static function createOAuthUser($oauth_provider, $oauth_id, $username, $email)
    {
        $user = User::create([
            'email' => $email,
            'name'  => $username,
            $oauth_provider . '_id' => $oauth_id,
        ]);

        return $user;
    }

    public static function findUserByIDOrCreate($oauth_provider, $oauth_id, $username, $email)
    {
        $user = User::findUserByID($oauth_provider, $oauth_id);

        if(!$user)
        {
            $user = User::createOAuthUser($oauth_provider, $oauth_id, $username, $email);
        }

        return $user;
    }
}
