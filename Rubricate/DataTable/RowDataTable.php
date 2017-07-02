<?php 

namespace Rubricate\DataTable;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;


class RowDataTable implements IGetElement
{

    private $e;
    
    public function __construct()
    {
        $this->e = new CreateElement('tr');
    }



    public function addData($data, array $attr = array())
    {
        $td = new ColumnDataTable($data, $attr);

        $this->e->addInnerJoin($td);

        return $this;

    } 


    public function addHead($data, array $attr = array())
    {
        $tr = new HeadDataTable($data, $attr);

        $this->e->addInnerJoin($tr);

        return $this;

    } 




    public function getElement()
    {
        return $this->e->getElement();
    } 


}    

