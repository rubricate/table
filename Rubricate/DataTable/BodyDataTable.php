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





    public function addInnerJoin(IGetElement $inner)
    {
        $this->tbody->addInnerJoin($inner);

        return $this;

    } 





    public function getElement()
    {
        return $this->tbody->getElement();
    } 



}    

