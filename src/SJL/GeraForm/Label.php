<?php
namespace SJL\GeraForm;

use SJL\GeraForm\InputFormInterface\InputForm;

abstract class Label {

    public static function setLabel(InputForm $element, $texto)
    {
        $field = $element->getField();
        $field = "\n <br /><label> {$texto} : " . $field . " </label>";
        $element->setField($field);
    }
}
