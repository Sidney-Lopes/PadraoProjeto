<?php

namespace SJL\GeraForm\InputFormInterface;

interface InputForm {
    public function __construct($name, $label, $value, $attribute);
    public function getInput();
}