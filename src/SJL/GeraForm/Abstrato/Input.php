<?php
namespace SJL\GeraForm\Abstrato;

use SJL\GeraForm\InputFormInterface\InputForm;

abstract class Input implements InputForm {
    protected $name;
    protected $value;
    protected $label;
    protected $attribute;
    protected $input = "";

    public function __construct($name, $label = "", $value = "", $attribute = "")
    {
        $this->name  = $name;
        $this->label = $label;
        $this->value = $value;
        $this->attribute = $attribute;
    }

    public function getInput()
    {
        return $this->input;
    }

    abstract protected function createField();
}