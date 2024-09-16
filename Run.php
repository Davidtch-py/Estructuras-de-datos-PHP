<?php

// Incluye los archivos que contienen las clases
include 'Node.php';  
include 'MyList.php'; 


use EstructurasDeDatos\MyList;
use EstructurasDeDatos\Node; 
$myList = new MyList();

$myList->add(10);
$myList->add(20);
$myList->add(30);

function printListFromOutside($myList) {
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
?>