<?php

use App\Lib\Api;
use Cake\Core\Configure;

$data = array();
$check = true;
// Valdate and login
if ($this->request->is('post')) {
    // Trim data
    $data = $this->request->data();
    foreach ($data as $key => $value) {
        $data[$key] = trim($value);
    }
    // Validation
    if (empty($data['email'])) {
        $check = false;
    }
    if (empty($data['name'])) {
        $check = false;
    }
    if (empty($data['password'])) {
        $check = false;
    }
    if ($data['password'] != $data['re_password']) {
        $check = false;
        $this->Flash->error("Mật khẩu và xác nhận mật khẩu không trùng nhau.");
    }
    if ($check) {
        $user = Api::call(Configure::read('API.url_admins_register'), $data);
        $error = Api::getError();
        if (!empty($error)) {
            $this->Flash->error("Email {$data['email']} đã được đăng ký.");
        } else {
            // Auth
            unset($user['password']);

            $user['is_admin'] = !empty($user['admin_type']) ? 1 : 0;
            $user['display_name'] = !empty($user['name']) ? $user['name'] : $user['login_id'];
            if (empty($user['avatar'])) {
                $user['avatar'] = $this->BASE_URL . '/img/' . Configure::read('default_avatar');
            }
            $this->Auth->setUser($user);
            return $this->redirect($this->Auth->redirectUrl());
        }
    }
}
