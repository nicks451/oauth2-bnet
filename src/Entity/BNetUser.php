<?php

namespace Depotwarehouse\OAuth2\Client\Entity;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;

class BNetUser implements ResourceOwnerInterface
{

    /**
     * An array representation of the data received about the WoW character.
     * @var array $data
     */

    public $id;
    public $battleTag;

    public function __construct(array $attributes, $region)
    {
        $this->id = $attributes['id'];
        $this->battleTag = $attributes['battletag'];
    }

    public function toArray()
    {
        return ['id' => $this->id, 'battletag' => $this->battleTag];
    }

    public function getId()
    {
        return $this->id;
    }
}
