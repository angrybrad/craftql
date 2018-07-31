<?php

namespace markhuot\CraftQL\Types;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\InterfaceType;
use GraphQL\Type\Definition\Type;
use markhuot\CraftQL\Builders\Schema;

class Site extends Schema {

    function boot() {
        $this->addIntField('id');
        $this->addStringField('name');
        $this->addStringField('handle');
        $this->addStringField('baseUrl');
        $this->addBooleanField('hasUrls');
        $this->addStringField('language');
        $this->addStringField('originalBaseUrl');
        $this->addStringField('originalName');
        $this->addStringField('sortOrder');
        $this->addBooleanField('primary');
    }

}