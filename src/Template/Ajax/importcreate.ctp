<?php 
$data = array(
    'type' => 'import',
    'order' => !empty($order) ? $order : array(),
    'id' => !empty($id) ? $id : '',
    'title' => 'phiếu nhập'
);
echo $this->element('import_create', $data);