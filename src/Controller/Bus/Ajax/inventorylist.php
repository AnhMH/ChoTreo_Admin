<?php
use App\Lib\Api;
use Cake\Core\Configure;

// Init param
$limit = Configure::read('Config.PageSize');
$param = array(
    'limit' => $limit,
    'page' => $page
);
$postParam = $this->request->data();
if (!empty($postParam)) {
    $param = array_merge($param, $postParam);
}
if (!empty($param['cate_id'])) {
    $param['cate_id'] = implode(',', $this->getCategoriesByParentId($param['cate_id']));
}

// Call api
$result = Api::call(Configure::read('API.url_products_getinventory'), $param);
$data = !empty($result['data']) ? $result['data'] : array();
$total = !empty($result['data']) ? count($result['data']) : 0;


$totalQty = 0;
$totalOriginPrice = 0;
$totalSellPrice = 0;
if (!empty($data)) {
    foreach ($data as $val) {
        $totalQty += $val['qty'];
        $totalOriginPrice += $val['origin_price']*$val['qty'];
        $totalSellPrice += $val['sell_price']*$val['qty'];
    }
}
$offset = ($page - 1)*$limit;
$inventory = array();
for ($i = $offset; $i < ($offset + $limit); $i++) {
    if (empty($data[$i])) {
        break;
    } else {
        $inventory[] = $data[$i];
    }
}

// Set data
$this->set(compact(
    'inventory',
    'total',
    'limit',
    'page',
    'param',
    'totalQty',
    'totalOriginPrice',
    'totalSellPrice'
));