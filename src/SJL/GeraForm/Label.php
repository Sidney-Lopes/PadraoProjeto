<?php
namespace SJL\GeraForm;


class Label {

    private $opentag  = "<br /><label>";
    private $closetag = "</label><br /> \n";
    
    public function  __construct($texto)
    {
        $this->opentag .= "{$texto} : ";
    }

    public function openLabel()
    {
        return $this->opentag;
    }

    public function closeLabel()
    {
        return $this->closetag;
    }
}