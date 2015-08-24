<?php
namespace SJL\GeraForm\InputType;

use SJL\GeraForm\Abstrato\InputAbstract;

class Textarea extends InputAbstract
{
    public function __construct($type, array $attributes)
    {
        parent::__construct($type, $attributes);
        $this->createField();
    }

    protected function createField()
    {
        $this->input .= "<{$this->type}  ";
        foreach($this->attributes as $nome => $valor){
            $this->input .= "$nome='{$valor}' ";
        }
        $this->input .= "></{$this->type}> ";
    }
}