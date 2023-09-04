<?php 

namespace Rubricate\Table;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;

class RowTable implements IGetElement
{
    private $tr;

    public function __construct()
    {
        $this->tr = new CreateElement('tr');
    }

    public function addData($data, array $attr = array())
    {
        $td = new ColumnTable($data, $attr);

        $this->tr->addChild($td);

        return $this;
    } 

    public function addHead($data, array $attr = array())
    {
        $tr = new HeadTable($data, $attr);

        $this->tr->addChild($tr);

        return $this;
    } 

    public function setAttribute($name, $value = null)
    {
        $this->tr->setAttribute($name, $value);
        return $this;
    }

    public function getElement()
    {
        return $this->tr->getElement();
    } 

}    

