<?php 

namespace Rubricate\DataTable;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;


class FootRowDataTable implements IGetElement
{
    private $tr;
    private $tfoot;



    public function __construct()
    {
        $this->tfoot = new CreateElement('tfoot');
        $this->tr    = new CreateElement('tr');
    }



    public function addData($data, array $attr = array())
    {
        $td = new ColumnDataTable($data, $attr);

        $this->tr->addChild($td);

        return $this;
    } 



    public function addHead($data, array $attr = array())
    {
        $tr = new HeadDataTable($data, $attr);

        $this->tr->addChild($tr);

        return $this;
    } 



    public function getElement()
    {
        $this->tfoot->addChild($this->tr);

        return $this->tfoot->getElement();
    } 
    


}    

