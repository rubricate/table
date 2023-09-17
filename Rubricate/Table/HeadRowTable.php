<?php 

declare(strict_types=1);

namespace Rubricate\Table;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;
use Rubricate\Element\StrElement;

class HeadRowTable implements IGetElement
{
    private $tr;
    private $thead;

    public function __construct()
    {
        $this->thead = new CreateElement('thead');
        $this->tr    = new CreateElement('tr');
    }

    public function addHead($data, array $attr = array()): object
    {
        $e = new CreateElement('th');

        $e->addChild(new StrElement($data));

        if(count($attr)) {
            foreach ($attr as $key => $value)
            {
                $e->setAttribute($key, $value);
            }
        }

        $this->tr->addChild($e);

        return $this;
    } 

    public function getElement(): string
    {
        $this->thead->addChild($this->tr);

        return $this->thead->getElement();
    } 

}    

