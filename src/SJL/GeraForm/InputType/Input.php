<?php
namespace SJL\GeraForm\InputType;

use SJL\GeraForm\Abstrato\InputAbstract;

class Input extends InputAbstract
{
    public function __construct($type, array $attributes)
    {
        parent::__construct($type, $attributes);
    }

    public function createField()
    {
        $this->field .= "<input type='{$this->type}' ";
        foreach($this->attributes as $nome => $valor){
            $this->field  .= "$nome='{$valor}' ";
        }
        $this->field  .= "/> <br \>";
        return $this->field ;
    }
}
