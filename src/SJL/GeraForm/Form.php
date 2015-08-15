<?php
namespace SJL\GeraForm;

use SJL\GeraForm\Abstrato\Input;

class Form {

    private $inputs = NULL;
    private $form = "";

    public function __construct($name, $method, $action, $attribute = "")
    {
        $this->form .= "<form name='{$name}' method='{$method}' action='{$action}' {$attribute} >";
    }

    public function addInput(Input $input)
    {
        $this->inputs[] = $input;
    }

    public function render()
    {
       if($this->inputs != NULL){
           foreach($this->inputs as $input){
                $this->form .= $input->getInput();
           }
           $this->form .= "</form>";
           return $this->form;
       }
       return FALSE;
    }
}