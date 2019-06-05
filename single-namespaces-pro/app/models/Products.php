<?php

namespace app\models;

use Phalcon\Mvc\Model;

class Products extends Model
{

    public function initialize()
    {
        $this->setSource('products');
    }
}
