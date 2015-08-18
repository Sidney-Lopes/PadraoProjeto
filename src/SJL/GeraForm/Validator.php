<?php

namespace SJL\GeraForm;

use Request;

class Validator {

    private $request;

    public function  __construct(Request $request)
    {
        $this->request = $request;
    }
}