<?php

namespace SJL\GeraForm\InputFormInterface;

use SJL\GeraForm\Label;

interface InputForm
{
    public function __construct($type, array $attributes);
    public function setField($field);
    public function getField();
}
