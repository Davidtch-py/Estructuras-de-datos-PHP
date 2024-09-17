<?php

include 'Node.php';
include 'MyList.php';


use EstructurasDeDatos\MyList;

$myList = new MyList();

$myList->add(10);
$myList->add(20);
$myList->add(30);

function printListFromOutside($myList)
{
    $current = $myList->head;
    while ($current !== null) {
        print $current->getData() . " <-> ";
        $current = $current->getNext();
    }
    print "null\n";
}

print "Lista actual:\n";
printListFromOutside($myList);

$myList->remove(20);

print "Lista después de eliminar 20:\n";
printListFromOutside($myList);

$myList->remove(10);

print "Lista después de eliminar 10:\n";
printListFromOutside($myList);

$myList->add(40);

print "Lista después de agregar 40:\n";
printListFromOutside($myList);

$myList->add(50);

print "Lista después de agregar 50:\n";
printListFromOutside($myList);

$myList->exist(30) ? print "30 existe en la lista\n" : print "30 no existe en la lista\n";
