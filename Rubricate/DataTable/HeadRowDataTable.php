<?php 

namespace Rubricate\DataTable;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;


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

        $e->addInnerText($data);

        if(count($attr)) {
            foreach ($attr as $key => $value)
            {
                $e->setAttribute($key, $value);
            }
        }

        $this->tr->addInnerJoin($e);

        return $this;
    } 



    public function getElement()
    {
        $this->thead->addInnerJoin($this->tr);

        return $this->thead->getElement();
    } 
    


}    

