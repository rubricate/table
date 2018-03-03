<?php 

namespace Rubricate\DataTable;


use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;

class ContainerDataTable extends CreateElement
{
    private $table;



    public function __construct()
    {
        parent::__construct('table');
    }



}    

