<?php 


require '../vendor/autoload.php';


$data = include 'dataArr.php';


$table  = new Rubricate\DataTable\ContainerDataTable();
$header = new Rubricate\DataTable\HeadRowDataTable();
$body   = new Rubricate\DataTable\BodyDataTable();
$foot   = new Rubricate\DataTable\FootRowDataTable();

$table->setAttribute('border', '1');

$header->addHead('Id');
$header->addHead('Name');
$header->addHead('Occupation');
$header->addHead('Salary');

$table->addChild($header);


$total = 0;
foreach ($data as $i => $row)
{
    $ln = new Rubricate\DataTable\RowDataTable();

    $ln->addData($row['id']);
    $ln->addData($row['name']);
    $ln->addData($row['occupation']);
    $ln->addData('$ ' . $row['salary']);

    $body->addChild($ln);

    $total += $row['salary'];

}

$table->addChild($body);

$foot->addHead("Total", array('colspan' => 3, 'align'=>'left'));
$foot->addData('$ ' . $total);

$table->addChild($foot);

echo $table->getElement();

