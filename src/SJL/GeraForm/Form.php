<?php
namespace SJL\GeraForm;

use SJL\GeraForm\InputFormInterface\InputForm;
use Validator;

class Form {

    private $elements = NULL;
    private $form = "";
    private $validator;

    public function __construct($name, $method, $action, $attribute = "")
    {
        $this->form .= "<form name='{$name}' method='{$method}' action='{$action}' {$attribute} >";
    }

    public function addElement(InputForm $element)
    {
        $this->elements[] = $element;
    }

    public function validator(Validator $validator)
    {
        $this->validator = $validator;
    }

    public function render()
    {
       if($this->elements != NULL){
           foreach($this->elements as $element){
                $this->form .= $element->getInput();
           }
           $this->form .= "</form>";
           return $this->form;
       }
       return FALSE;
    }
}