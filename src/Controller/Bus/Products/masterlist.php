<?php
use App\Lib\Api;
use Cake\Core\Configure;

$this->doGeneralAction();
$pageSize = Configure::read('Config.PageSize');

// Create breadcrumb
$pageTitle = __('LABEL_PRODUCT_LIST');

// Create search form
$dataSearch = array(
    'limit' => $pageSize
);
$types = array();
$this->SearchForm
        ->setAttribute('type', 'get')
        ->setData($dataSearch)
        ->addElement(array(
            'id' => 'name',
            'label' => __('LABEL_NAME'),
        ))
        ->addElement(array(
            'id' => 'limit',
            'label' => __('LABEL_LIMIT'),
            'options' => Configure::read('Config.searchPageSize'),
        ))
        ->addElement(array(
            'type' => 'submit',
            'value' => __('LABEL_SEARCH'),
            'class' => 'btn btn-primary',
        ));


$param = $this->getParams(array(
    'limit' => $pageSize,
    'master_list' => 1
));

$result = Api::call(Configure::read('API.url_products_list'), $param);
$total = !empty($result['total']) ? $result['total'] : 0;
$data = !empty($result['data']) ? $result['data'] : array();

// Show data
$this->SimpleTable
        ->setDataset($data)
        ->addColumn(array(
            'id' => '',
            'name' => 'items[]',
            'type' => 'checkbox',
            'value' => '{id}',
            'width' => 20,
        ))
        ->addColumn(array(
            'id' => 'id',
            'title' => __('ID'),
            'type' => 'link',
            'href' => $this->BASE_URL . '/' . $this->controller . '/update/{id}',
            'empty' => ''
        ))
        ->addColumn(array(
            'id' => 'url',
            'title' => __('URL'),
            'type' => 'link',
            'href' => $this->BASE_URL_FRONT . '/san-pham/{url}',
            'empty' => ''
        ))
        ->addColumn(array(
            'id' => 'image',
            'title' => __('LABEL_IMAGE'),
            'empty' => '',
            'type' => 'image',
            'src' => "{image}",
            'width' => '200'
        ))
        ->addColumn(array(
            'id' => 'name',
            'title' => __('LABEL_NAME'),
            'empty' => ''
        ))
        ->addColumn(array(
            'id' => 'sell_price',
            'title' => __('LABEL_SELL_PRICE'),
            'empty' => '0'
        ))
        ->addColumn(array(
            'id' => 'admin_url',
            'title' => __('A_U'),
            'type' => 'link',
            'href' => $this->BASE_URL_FRONT . '/cua-hang/{admin_url}',
            'empty' => ''
        ))
        ->addColumn(array(
            'id' => 'admin_email',
            'title' => __('LABEL_EMAIL'),
            'empty' => ''
        ))
        ->addColumn(array(
            'id' => 'admin_name',
            'title' => __('LABEL_NAME'),
            'empty' => ''
        ))
        ->addColumn(array(
            'id' => 'admin_id',
            'title' => __('A_I'),
            'empty' => ''
        ))
        ->addColumn(array(
            'id' => 'is_display_web',
            'title' => __('LABEL_IS_DISPLAY_WEB'),
            'empty' => '0'
        ))
        ->addColumn(array(
            'id' => 'is_confirm',
            'title' => __('LABEL_CONFIRM'),
            'empty' => '0'
        ))
        ->addColumn(array(
            'id' => 'disable',
            'title' => __('LABEL_DISABLE'),
            'empty' => '0'
        ))
        ->addColumn(array(
            'type' => 'link',
            'title' => __('LABEL_EDIT'),
            'href' => $this->BASE_URL . '/' . $this->controller . '/update/{id}',
            'button' => true,
            'width' => 100,
        ))
        ->addButton(array(
            'type' => 'submit',
            'value' => __('LABEL_ADD_NEW'),
            'class' => 'btn btn-success btn-addnew',
        ))
        ->addButton(array(
            'type' => 'submit',
            'value' => __('LABEL_DELETE'),
            'class' => 'btn btn-danger btn-delete',
        ))
        ->addButton(array(
            'type' => 'submit',
            'value' => __('LABEL_ENABLE'),
            'class' => 'btn btn-success btn-enable',
        ))
        ->addButton(array(
            'type' => 'submit',
            'value' => __('LABEL_DISABLE'),
            'class' => 'btn btn-danger btn-disable',
        ))
        ->addButton(array(
            'type' => 'submit',
            'value' => __('LABEL_CONFIRM'),
            'class' => 'btn btn-success btn-confirm',
        ))
        ->addButton(array(
            'type' => 'submit',
            'value' => __('LABEL_REJECT'),
            'class' => 'btn btn-danger btn-reject',
        ));

$this->set('pageTitle', $pageTitle);
$this->set('total', $total);
$this->set('param', $param);
$this->set('limit', $param['limit']);