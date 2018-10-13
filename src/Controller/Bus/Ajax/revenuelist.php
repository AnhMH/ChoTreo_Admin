<?php
use App\Lib\Api;
use Cake\Core\Configure;

// Init param
$limit = Configure::read('Config.PageSize');
$param = array(
//    'limit' => $limit,
//    'page' => $page,
//    'get_customers' => 1
);
$postParam = $this->request->data();
if (!empty($postParam)) {
    $param = array_merge($param, $postParam);
}

// Call api
$result = Api::call(Configure::read('API.url_orders_list'), $param);
$data = !empty($result['data']) ? $result['data'] : array();
$total = !empty($result['data']) ? count($result['data']) : 0;

// Modify data
$totalQty = 0;
$totalDiscount = 0;
$totalPrice = 0;
$totalLack = 0;
if (!empty($data)) {
    foreach ($data as $val) {
        $totalQty += $val['total_qty'];
        $totalDiscount += $val['coupon'];
        $totalPrice += $val['total_price'];
        $totalLack += $val['lack'];
    }
}

// Pagination
$revenue = $this->dataPagination($data, $page, $limit);

// Set data
$this->set(compact(
    'revenue',
    'total',
    'totalQty',
    'totalDiscount',
    'totalLack',
    'totalPrice',
    'limit',
    'page',
    'param'
));