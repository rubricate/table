<?php 


require '../vendor/autoload.php';


$data = include 'dataArr.php';

$alignLeft = array('align'=>'left');


$table = new Rubricate\DataTable\ContainerDataTable();
$body  = new Rubricate\DataTable\BodyDataTable();

foreach ($data as $key => $row)
{
    if($key !== 0) {
        $ln = new Rubricate\DataTable\RowDataTable();
        $ln->addData('&nbsp;', array('colspan'=>2));
        $body->addInnerJoin($ln);
    }

    $ln = new Rubricate\DataTable\RowDataTable();
    $ln->addHead('Id', $alignLeft);
    $ln->addData($row['id']);
    $body->addInnerJoin($ln);

    $ln = new Rubricate\DataTable\RowDataTable();
    $ln->addHead('Name', $alignLeft);
    $ln->addData($row['name']);
    $body->addInnerJoin($ln);

    $ln = new Rubricate\DataTable\RowDataTable();
    $ln->addHead('Occupation', $alignLeft);
    $ln->addData($row['occupation']);
    $body->addInnerJoin($ln);

    $ln = new Rubricate\DataTable\RowDataTable();
    $ln->addHead('User', $alignLeft);
    $ln->addData($row['user']);
    $body->addInnerJoin($ln);

    $ln = new Rubricate\DataTable\RowDataTable();
    $ln->addHead('Message', $alignLeft);
    $ln->addData($row['nota']);
    $body->addInnerJoin($ln);

}

$table->setAttribute('border', '1');
$table->addInnerJoin($body);


echo $table->getElement();


