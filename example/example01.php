<?php 


require '../vendor/autoload.php';



$data = include 'dataArr.php';


$table  = new Rubricate\DataTable\ContainerDataTable();
$header = new Rubricate\DataTable\HeadRowDataTable();
$body   = new Rubricate\DataTable\BodyDataTable();

$table->setAttribute('border', '1');

$header->addHead('#');
$header->addHead('Name');
$header->addHead('Occupation');
$header->addHead('User');

$table->addInnerJoin($header);


foreach ($data as $k => $row)
{
    $ln = new Rubricate\DataTable\RowDataTable();

    $ln->addData($row['id']);
    $ln->addData($row['name']);
    $ln->addData($row['occupation']);
    $ln->addData($row['user']);

    $body->addInnerJoin($ln);

}

$table->addInnerJoin($body);


echo $table->getElement();


