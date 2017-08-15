<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 15/08/2017
 * Time: 11:41
 */

namespace App\Http\Controllers;


class TestController extends Controller
{
    public function test()
    {
        return $this->templating->render('test.html.twig', array(
            'form' => 'lol',
        ));
    }
}