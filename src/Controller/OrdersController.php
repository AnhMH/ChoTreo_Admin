<?php

namespace App\Controller;

use Cake\Event\Event;

/**
 * Login page
 */
class OrdersController extends AppController {
    /**
     * List orders
     */
    public function index() {
        include ('Bus/Orders/index.php');
    }
}
