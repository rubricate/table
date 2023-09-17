<?php 

declare(strict_types=1);

namespace Rubricate\Table;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;

class BodyTable implements IGetElement
{
    private $tbody;

    public function __construct()
    {
        $this->tbody = new CreateElement('tbody');
    }

    public function addChild(IGetElement $inner): object
    {
        $this->tbody->addChild($inner);

        return $this;
    } 

    public function getElement(): string
    {
        return $this->tbody->getElement();
    } 

}    

