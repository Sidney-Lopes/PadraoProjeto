<?php
namespace SJL\GeraForm\Abstrato;

use SJL\GeraForm\InputFormInterface\InputForm;
use SJL\GeraForm\Label;

abstract class InputAbstract implements InputForm
{
    protected $type;
    protected $attributes;
    protected $input = "";
    protected $objectLabel;

    public function __construct($type, array $attributes)
    {
        $this->type = $type;
        $this->attributes = $attributes;
    }

    public function getInput()
    {
        return $this->input;
    }

    public function setLabel(Label $label)
    {
        $this->objectLabel = $label;
        $this->input = $this->objectLabel->openLabel() . $this->input . $this->objectLabel->closeLabel();
    }

    abstract protected function createField();

}