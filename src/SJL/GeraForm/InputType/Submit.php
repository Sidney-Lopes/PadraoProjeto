<?php
namespace SJL\GeraForm\InputType;

use SJL\GeraForm\Abstrato\Input;

class Submit extends Input
{
    public function __construct($name, $label, $value, $attribute)
    {
        parent::__construct($name, $label, $value, $attribute);
        $this->montaInput();
    }

    private function montaInput()
    {
        $this->input .= "<br /><input type='submit' name='{$this->name}' value='{$this->value}' ";
        $this->input .= $this->attribute . " /> ";
        $this->input .= "<br />\n";
    }
}