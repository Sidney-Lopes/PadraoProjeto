<?php
namespace SJL\GeraForm\InputType;

use SJL\GeraForm\Abstrato\Input;

class Checkbox extends Input
{
    public function __construct($name, $label, $value, $attribute)
    {
        parent::__construct($name, $label, $value, $attribute);
        $this->createField();
    }

    protected function createField()
    {
        $this->input .= "<br /><input type='checkbox' name='{$this->name}' value='{$this->value}' ";
        $this->input .= $this->attribute . " /> ";
        $this->input .= $this->label;
        $this->input .= "<br />\n";
    }
}