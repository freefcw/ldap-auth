<?php namespace Ccovey\LdapAuth;

use Config;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;

/**
 * Description of LdapUser
 *
 * @author ccovey
 */
class LdapUser extends Model implements UserContract
{
    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        $username = (Config::has('auth.username_field')) ? Config::get('auth.username_field') : 'username';
        return $this->attributes[$username];
    }
    
    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->attributes['password'];
    }

    /**
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken()
    {
        return; // this shouldn't be needed as user / password is in ldap
    }

    /**
     * Set the token value for the "remember me" session.
     *
     * @param  string  $value
     * @return void
     */
    public function setRememberToken($value)
    {
        return; // this shouldn't be needed as user / password is in ldap
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return; // this shouldn't be needed as user / password is in ldap
    }
}
