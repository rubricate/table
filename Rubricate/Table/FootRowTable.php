<?php 

/*
 * @package     RubricatePHP
 * @author      Estefanio N Santos <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate/table
 * 
 */

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



    public function getElement()
    {
        $this->tfoot->addChild($this->tr);

        return $this->tfoot->getElement();
    } 
    


}    

