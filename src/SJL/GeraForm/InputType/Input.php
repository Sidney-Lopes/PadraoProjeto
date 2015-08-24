<?php
namespace SJL\GeraForm\InputType;

use SJL\GeraForm\Abstrato\InputAbstract;

class Input extends InputAbstract
{
    public function __construct($type, array $attributes)
    {
        parent::__construct($type, $attributes);
        $this->createField();
    }

    protected function createField()
    {
        $this->input .= "<input type='{$this->type}' ";
        foreach($this->attributes as $nome => $valor){
            $this->input .= "$nome='{$valor}' ";
        }
        $this->input .= "/> ";
    }
}