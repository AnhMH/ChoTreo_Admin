<?php

use App\Lib\Api;
use Cake\Core\Configure;

// Init param
$param = $this->request->data();
if (!empty($param['add_update'])) {
    if (!empty($param['detail_order'])) {
        $param['detail_order'] = json_encode($param['detail_order']);
    }
    // Call api
    $id = Api::call(Configure::read('API.url_orders_addupdate'), $param);
    if (!empty($id) && !Api::getError()) {
        echo $id;
    } else {
        echo 0;
    }
    exit();
}