<?php

use App\Lib\Api;
use Cake\Core\Configure;

// Init param
$param = $this->request->data();
$product = array();
if (!empty($param['add_update'])) {
    // Call api
    $id = Api::call(Configure::read('API.url_products_addupdate'), $param);
    if (!empty($id) && !Api::getError()) {
        echo $id;
    } else {
        echo 0;
    }
    exit();
}
if (!empty($id)) {
    $result = Api::call(Configure::read('API.url_products_detail'), array(
        'id' => $id
    ));
    $product = !empty($result['product']) ? $result['product'] : array();
    $isUpdate = 1;
    $this->set(compact(
            'product',
            'isUpdate'
    ));
}