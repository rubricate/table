<?php 

namespace Rubricate\DataTable;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;
use Rubricate\Element\StrElement;


class HeadRowDataTable implements IGetElement
{

    private $tr;
    private $thead;



    public function __construct()
    {
        $this->thead = new CreateElement('thead');
        $this->tr    = new CreateElement('tr');
    }



    public function addHead($data, array $attr = array())
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



    public function getElement()
    {
        $this->thead->addChild($this->tr);

        return $this->thead->getElement();
    } 
    


}    

