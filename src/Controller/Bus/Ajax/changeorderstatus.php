<?php

use App\Lib\Api;
use Cake\Core\Configure;

// Init param
$param = $this->request->getData();

// Call api
$id = Api::call(Configure::read('API.url_orders_changestatus'), $param);
if (!empty($id) && !Api::getError()) {
    echo $id;
} else {
    echo 0;
}

exit();