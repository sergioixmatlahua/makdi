<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Makidi\Controller;

use Makidi\Model\MakidiTable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Description of MakidiController
 *
 * @author Sergio
 */
class MakidiController extends AbstractActionController {

    private $table;

    function __construct(MakidiTable $table) {
        $this->table = $table;
    }

    //put your code here
    public function indexAction() {
        return new ViewModel([
            'usuarios' => $this->table->fetchAll(),
        ]);
    }

    public function addAction() {
        
    }

    public function editAction() {
        
    }

    public function deleteAction() {
        
    }

}
