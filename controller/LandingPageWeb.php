<?php

    class LandingPageWeb{

        public function __construct()
        {    
        }

        public function index(){
          require_once 'view/roles/business/header.php';
          require_once 'view/business/index.view.php';
          require_once 'view/roles/business/footer.php';
        }
        public function about(){
          require_once 'view/roles/business/header.php';
          require_once 'view/business/siteWeb/about.view.php';
          require_once 'view/roles/business/footer.php';
        }
        public function contact(){
          require_once 'view/roles/business/header.php';
          require_once 'view/business/siteWeb/contact.view.php';
          require_once 'view/roles/business/footer.php';
        }
        public function login(){
          require_once 'view/roles/business/header.php';
          require_once 'view/business/siteWeb/login.view.php';
          require_once 'view/roles/business/footer.php';
        }
        public function register(){
          require_once 'view/roles/business/header.php';
          require_once 'view/business/siteWeb/register.view.php';
          require_once 'view/roles/business/footer.php';
        }
        public function events(){
          require_once 'view/roles/business/header.php';
          require_once 'view/business/siteWeb/events.view.php';
          require_once 'view/roles/business/footer.php';
        }
        public function forgot(){
          require_once 'view/roles/business/header.php';
          require_once 'view/business/siteWeb/forgot.view.php';
          require_once 'view/roles/business/footer.php';
        }
        public function updatePass(){
          require_once 'view/roles/business/header.php';
          require_once 'view/business/siteWeb/updatePass.view.php';
          require_once 'view/roles/business/footer.php';
        }

    }
?>