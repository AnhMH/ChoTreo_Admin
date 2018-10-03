<?php

use App\Lib\Api;
use Cake\Core\Configure;

// Init param
$param = $this->request->data();
$product = array();
if (!empty($param['add_update'])) {
    if (!empty($_FILES['file'])) {
        $filetype = $_FILES['file']['type'];
        $filename = $_FILES['file']['name'];
        $filedata = $_FILES['file']['tmp_name'];
        $param['image'] = new CurlFile($filedata, $filetype, $filename);
    }
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