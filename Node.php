<?php

namespace EstructurasDeDatos;

class Node {
    private $data;
    private $next;
    private $previous;

    public function __construct($data) {
        $this->data = $data;
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function getNext() {
        return $this->next;
    }

    public function setNext($next) {
        $this->next = $next;
    }

    public function getPrevious() {
        return $this->previous;
    }

    public function setPrevious($previous) {
        $this->previous = $previous;
    }

    public function __toString() {
        return "Node [data=" . $this->data . ", next=" . $this->next . "]";
    }
}
?>