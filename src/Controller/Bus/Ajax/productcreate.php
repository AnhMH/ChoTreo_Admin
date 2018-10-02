<?php

use App\Lib\Api;
use Cake\Core\Configure;

// Init param
$param = $this->request->data();
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


