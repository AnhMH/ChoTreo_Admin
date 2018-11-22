<?php

use App\Form\UpdateAdminForm;
use App\Lib\Api;
use Cake\Core\Configure;

// Create breadcrumb
$pageTitle = __('LABEL_UPDATE_PROFILE');

// Valdate and update
if ($this->request->is('post')) {
    // Trim data
    $data = $this->request->data();
    foreach ($data as $key => $value) {
        if (is_scalar($value)) {
            $data[$key] = trim($value);
        }
    }
    // Validation
    if ($form->validate($data)) {
        if (!empty($data['avatar']['name'])) {
            $filetype = $data['avatar']['type'];
            $filename = $data['avatar']['name'];
            $filedata = $data['avatar']['tmp_name'];
            $data['avatar'] = new CurlFile($filedata, $filetype, $filename);
        }
        // Call API to Login
        $admin = array();
        $admin = Api::call(Configure::read('API.url_admins_updateprofile'), $data);
        if (!empty($admin) && !Api::getError()) {
            // Update auth
            $admin['display_name'] = !empty($admin['name']) ? $admin['name'] : $admin['email'];
            if (empty($admin['avatar'])) {
                $admin['avatar'] = $this->BASE_URL . '/img/' . Configure::read('default_avatar');
            }
            $this->Auth->setUser($admin);
            $this->AppUI = $admin;
            
            $this->Flash->success(__('MESSAGE_SAVE_OK'));
            return $this->redirect("{$this->BASE_URL}/{$this->controller}/updateprofile");
        } else {
            return $this->Flash->error(Api::parseErrorMess(Api::getError()));
        }
    }
}