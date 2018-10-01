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
}
