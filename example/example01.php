<?php 


require '../vendor/autoload.php';



$data = include 'dataArr.php';


$table  = new Rubricate\Table\ContainerTable();
$header = new Rubricate\Table\HeadRowTable();
$body   = new Rubricate\Table\BodyTable();

$table->setAttribute('border', '1');

$header->addHead('#');
$header->addHead('Name');
$header->addHead('Occupation');
$header->addHead('User');

$table->addChild($header);


foreach ($data as $k => $row)
{
    $ln = new Rubricate\Table\RowTable();

    $ln->addData($row['id']);
    $ln->addData($row['name']);
    $ln->addData($row['occupation']);
    $ln->addData($row['user']);

    $body->addChild($ln);

}

$table->addChild($body);


echo $table->getElement();


