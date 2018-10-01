<?php

/* 
 * Ajax process
 */

namespace App\Controller;

class AjaxController extends AppController {
    /**
     * Initialize
     */
    public function initialize() {
        parent::initialize();
       // $this->autoRender = false;
    }
    
    /**
     * Customer list
     */
    public function getlistcustomer($page) {
        include ('Bus/Ajax/getlistcustomer.php');
    }
    
    /**
     * Customer create
     */
    public function customercreate() {
        $this->autoRender = false;
        include ('Bus/Ajax/customercreate.php');
    }
    
    /**
     * Customer detail
     */
    public function customerdetail($id) {
        include ('Bus/Ajax/customerdetail.php');
    }
    
    /**
     * Customer delete
     */
    public function customerdel() {
        $this->autoRender = false;
        include ('Bus/Ajax/customerdel.php');
    }
}
