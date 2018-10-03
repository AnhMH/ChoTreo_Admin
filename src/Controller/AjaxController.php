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
    
    /**
     * Supplier list
     */
    public function supplierlist($page) {
        include ('Bus/Ajax/supplierlist.php');
    }
    
    /**
     * Supplier create
     */
    public function suppliercreate() {
        $this->autoRender = false;
        include ('Bus/Ajax/suppliercreate.php');
    }
    
    /**
     * Supplier delete
     */
    public function supplierdel() {
        $this->autoRender = false;
        include ('Bus/Ajax/supplierdel.php');
    }
    
    /**
     * Supplier detail
     */
    public function supplierdetail($id) {
        include ('Bus/Ajax/supplierdetail.php');
    }
    
    /**
     * Product list
     */
    public function productlist($page) {
        include ('Bus/Ajax/productlist.php');
    }
    
    /**
     * Product detail
     */
    public function productdetail($id) {
        include ('Bus/Ajax/productdetail.php');
    }
    
    /**
     * Product create
     */
    public function productcreate($id = '') {
        include ('Bus/Ajax/productcreate.php');
    }
    
    /**
     * Product disable
     */
    public function productdisable() {
        $this->autoRender = false;
        include ('Bus/Ajax/productdisable.php');
    }
    
    /**
     * Product delete
     */
    public function productdel() {
        $this->autoRender = false;
        include ('Bus/Ajax/productdel.php');
    }
    
    /**
     * Cate all
     */
    public function cateall() {
        include ('Bus/Ajax/cateall.php');
    }
    
    /**
     * Cate list
     */
    public function catelist($page) {
        include ('Bus/Ajax/catelist.php');
    }
    
    /**
     * Cate create
     */
    public function catecreate() {
        $this->autoRender = false;
        include ('Bus/Ajax/catecreate.php');
    }
}