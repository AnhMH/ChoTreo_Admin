<?php

namespace App\Controller;

use Cake\Event\Event;

/**
 * Login page
 */
class SlidersController extends AppController {
    /**
     * Before filter event
     * @param Event $event
     */
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        
    }
    /**
     * List products
     */
    public function index() {
        include ('Bus/Sliders/index.php');
    }
}
