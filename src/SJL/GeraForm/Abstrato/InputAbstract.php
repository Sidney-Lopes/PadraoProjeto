<?php
namespace SJL\GeraForm\Abstrato;

use SJL\GeraForm\InputFormInterface\InputForm;
use SJL\GeraForm\Label;

abstract class InputAbstract implements InputForm
{
    protected $type;
    protected $attributes;
    protected $field = "";

    public function __construct($type, array $attributes)
    {
        $this->type = $type;
        $this->attributes = $attributes;
    }

    public function setField($field)
    {
        $this->field = $field;
    }

    public function getField()
    {
        return $this->field;
    }

    abstract public function createField();

}
