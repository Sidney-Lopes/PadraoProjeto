<?php
namespace SJL\GeraForm\InputType;

use SJL\GeraForm\Abstrato\InputAbstract;

class Textarea extends InputAbstract
{
    private $content = "";
    public function __construct($type, array $attributes)
    {
        parent::__construct($type, $attributes);
    }

    public function createField()
    {
        $this->field .= "<{$this->type}  ";
        foreach($this->attributes as $nome => $valor){
            $this->field  .= "$nome='{$valor}' ";
        }
        $this->field .= ">{$this->content}</{$this->type}> <br \>";
        return $this->field ;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }
}
