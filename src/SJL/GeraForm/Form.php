<?php
namespace SJL\GeraForm;

use SJL\GeraForm\Abstrato\Input;
use Validator;

class Form {

    private $inputs = NULL;
    private $form = "";
    private $validator;

    public function __construct($name, $method, $action, $attribute = "")
    {
        $this->form .= "<form name='{$name}' method='{$method}' action='{$action}' {$attribute} >";
    }

    public function addInput(Input $input)
    {
        $this->inputs[] = $input;
    }

    public function validator(Validator $validator)
    {
        $this->validator = $validator;
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