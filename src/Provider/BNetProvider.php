<?php

namespace Depotwarehouse\OAuth2\Client\Provider;

use Depotwarehouse\OAuth2\Client\Entity\BNetUser;
use League\OAuth2\Client\Token\AccessToken;

class BNetProvider extends BattleNet
{

    public function getResourceOwnerDetailsUrl(AccessToken $token)
    {
        return "https://{$this->region}.battle.net/oauth/authorize?access_token={$token}";
    }

    protected function createResourceOwner(array $response, AccessToken $token)
    {
        $user = new BNetUser($response, $this->region);

        return $user;
    }
}
