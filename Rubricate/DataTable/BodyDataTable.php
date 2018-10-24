<?php 

namespace Rubricate\DataTable;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;


class BodyDataTable implements IGetElement
{
    private $tbody;


    public function __construct()
    {
        $this->tbody = new CreateElement('tbody');
    }



    public function addChild(IGetElement $inner)
    {
        $this->tbody->addChild($inner);

        return $this;
    } 



    public function getElement()
    {
        return $this->tbody->getElement();
    } 



}    

