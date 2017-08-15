<?php

namespace App\Http\Controllers;

use App\Model\FormTest;
use Laravel\Lumen\Routing\Controller as BaseController;
use Symfony\Component\Form\Forms;

class Controller extends BaseController
{
    protected $templating;
    protected $loader;
    protected $pathToView;

    public function __construct()
    {
        $this->pathToView = dirname(__DIR__, 3) . '/resources/views';
        $this->loader = new \Twig_Loader_Filesystem($this->pathToView);
        $this->templating = new \Twig_Environment($this->loader);

    }
}
