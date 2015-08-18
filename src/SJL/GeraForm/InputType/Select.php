<?php
namespace SJL\GeraForm\InputType;

use SJL\GeraForm\Abstrato\Input;

class Select extends Input
{
    public function __construct($name, $label, $value, $attribute)
    {
        parent::__construct($name, $label, $value, $attribute);
        $this->createField();
    }

    protected function createField()
    {
        if(is_array($this->value)){
            $this->input  = "<br />";
            $this->input .= !empty($this->label) ? $this->label . " : " : "";
            $this->input .= "<br /><select name='{$this->name}' ";
            $this->input .= $this->attribute . " > ";
            foreach($this->value as $key => $option){
                $this->input .= "<option value='{$key}'>{$option}</option>\n";
            }
            $this->input .= "</select><br />\n";
            return TRUE;
        }
        return FALSE;
    }
}