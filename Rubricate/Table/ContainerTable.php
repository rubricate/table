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

class ContainerTable extends CreateElement
{
    private $table;



    public function __construct()
    {
        parent::__construct('table');
    }



}    

