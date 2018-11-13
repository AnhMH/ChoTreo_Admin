<?php
use App\Lib\Api;
use Cake\Core\Configure;

$this->doGeneralAction();
$pageSize = Configure::read('Config.PageSize');

// Create breadcrumb
$pageTitle = __('LABEL_SLIDER_LIST');

// Create search form
$dataSearch = array(
    'limit' => $pageSize
);
$types = array();
$this->SearchForm
        ->setAttribute('type', 'get')
        ->setData($dataSearch)
        ->addElement(array(
            'id' => 'link',
            'label' => __('LABEL_LINK')
        ))
        ->addElement(array(
            'id' => 'text',
            'label' => __('LABEL_TEXT'),
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
    'limit' => $pageSize
));

$result = Api::call(Configure::read('API.url_sliders_list'), $param);
$total = !empty($result['total']) ? $result['total'] : 0;
$data = !empty($result['data']) ? $result['data'] : array();

// Show data
$this->SimpleTable
        ->setDataset($data)
        ->addColumn(array(
            'id' => 'item',
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
            'id' => 'image',
            'title' => __('LABEL_IMAGE'),
            'empty' => '',
            'type' => 'image',
            'src' => "{image}",
            'width' => '200'
        ))
        ->addColumn(array(
            'id' => 'link',
            'title' => __('LABEL_LINK'),
            'empty' => ''
        ))
        ->addColumn(array(
            'id' => 'text',
            'title' => __('LABEL_TEXT'),
            'empty' => ''
        ))
        ->addColumn(array(
            'id' => 'stt',
            'title' => __('LABEL_STT'),
            'empty' => ''
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
            'class' => 'btn btn-danger btn-disable',
        ));

$this->set('pageTitle', $pageTitle);
$this->set('total', $total);
$this->set('param', $param);
$this->set('limit', $param['limit']);