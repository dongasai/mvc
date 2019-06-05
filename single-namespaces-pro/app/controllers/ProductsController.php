<?php

namespace app\controllers;

use Phalcon\Mvc\Controller;
use Single\Models\Products as Products;

class ProductsController extends Controller
{
    public function indexAction()
    {
        $this->view->product = Products::findFirst();
    }
}
