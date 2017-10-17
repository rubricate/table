<?php 

namespace Rubricate\DataTable;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;


class RowDataTable implements IGetElement
{

    private $tr;
    
    public function __construct()
    {
        $this->tr = new CreateElement('tr');
    }



    public function addData($data, array $attr = array())
    {
        $td = new ColumnDataTable($data, $attr);

        $this->tr->addInnerJoin($td);

        return $this;

    } 


    public function addHead($data, array $attr = array())
    {
        $tr = new HeadDataTable($data, $attr);

        $this->tr->addInnerJoin($tr);

        return $this;

    } 





    public function setAttribute($name, $value = NULL)
    {
       $this->tr->setAttribute($name, $value);
       return $this;
    }





    public function getElement()
    {
        return $this->tr->getElement();
    } 


}    

