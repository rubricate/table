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


class BodyTable implements IGetElement
{
    private $tbody;


    public function __construct()
    {
        $this->tbody = new CreateElement('tbody');
    }



    public function addChild(IGetElement $inner)
    {
        $this->tbody->addChild($inner);

        return $this;
    } 



    public function getElement()
    {
        return $this->tbody->getElement();
    } 



}    

