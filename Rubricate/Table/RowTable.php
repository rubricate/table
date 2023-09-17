<?php 

declare(strict_types=1);

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

    public function addData($data, array $attr = array()): object
    {
        $td = new ColumnTable($data, $attr);

        $this->tr->addChild($td);

        return $this;
    } 

    public function addHead($data, array $attr = array()): object
    {
        $tr = new HeadTable($data, $attr);

        $this->tr->addChild($tr);

        return $this;
    } 

    public function setAttribute($name, $value = null): object
    {
        $this->tr->setAttribute($name, $value);
        return $this;
    }

    public function getElement(): string
    {
        return $this->tr->getElement();
    } 

}    

