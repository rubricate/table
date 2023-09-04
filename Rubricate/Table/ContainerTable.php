<?php 

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

