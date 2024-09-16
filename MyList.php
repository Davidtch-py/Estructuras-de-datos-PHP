<?php

namespace EstructurasDeDatos;

use EstructurasDeDatos\Node;

class MyList
{
    public $head;

    public function add($data)
    {
        $newNode = new Node($data);
        if ($this->head === null) {
            $this->head = $newNode;
        } else {
            $current = $this->head;
            while ($current->getNext() !== null) {
                $current = $current->getNext();
            }
            $current->setNext($newNode);
            $newNode->setPrevious($current);
        }
    }

    public function remove($data)
    {
        $current = $this->head;

        while ($current !== null) {
            if ($current->getData() == $data) {
                if ($current->getPrevious() !== null) {
                    $current->getPrevious()->setNext($current->getNext());
                } else {
                    $this->head = $current->getNext();
                }

                if ($current->getNext() !== null) {
                    $current->getNext()->setPrevious($current->getPrevious());
                }
                return;
            }
            $current = $current->getNext();
        }
    }

    public function exist($data)
    {
        $current = $this->head;
        while ($current !== null) {
            if ($current->getData() == $data) {
                return true;
            }
            $current = $current->getNext();
        }
        return false;
    }

    public function isEmpty()
    {
        return $this->head === null;
    }
}
