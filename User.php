<?php


namespace Arniro\SocialiteProviders\VK;


use Illuminate\Support\Arr;
use SocialiteProviders\Manager\OAuth2\User as BaseUser;

class User extends BaseUser
{
    /**
     * Set the credentials on the user.
     *
     * Might include things such as the token and refresh token
     *
     * @param array $accessTokenResponseBody
     *
     * @return User
     */
    public function setAccessTokenResponseBody(array $accessTokenResponseBody)
    {
        parent::setAccessTokenResponseBody($accessTokenResponseBody);

        $this->email = Arr::get($this->accessTokenResponseBody, 'email');

        return $this;
    }
}
