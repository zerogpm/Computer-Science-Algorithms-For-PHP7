<?php
/**
 * Created by PhpStorm.
 * User: jiansu
 * Date: 2017-08-27
 * Time: 7:15 PM
 */

class ListNode {
    public $data = NULL;
    public $next = NULL;

    public function __construct(string $data)
    {
        $this->data = $data;
    }
}

class LinkedList {
    private $first_node = NULL;
    private $total_node = NULL;

    public function insert(string $data = NULL)
    {
        $newNode = new ListNode($data);
    }
}