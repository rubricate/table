<?php 

declare(strict_types=1);

namespace Rubricate\Table;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;

class FootRowTable implements IGetElement
{
    private $tr;
    private $tfoot;

    public function __construct()
    {
        $this->tfoot = new CreateElement('tfoot');
        $this->tr    = new CreateElement('tr');
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

    public function getElement(): string
    {
        $this->tfoot->addChild($this->tr);

        return $this->tfoot->getElement();
    } 

}    

