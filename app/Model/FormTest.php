<?php

namespace App\Model;

class FormTest
{
    protected $choice;

    public function getChoice()
    {
        return $this->choice;
    }

    public function setChoice($choice)
    {
        $this->choice = $choice;

        return $this;
    }
}
