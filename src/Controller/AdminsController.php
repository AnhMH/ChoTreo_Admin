<?php

namespace App\Controller;

/**
 * Admins page
 */
class AdminsController extends AppController {
    
    /**
     * Admins page
     */
    public function updateprofile() {
        include ('Bus/Admins/updateprofile.php');
    }
}
