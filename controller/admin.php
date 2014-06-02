<?php
class admin extends controller{
        public function __construct($url){
                    parent::__construct();
            if($this->checkmethodexists($this,$url)){                
                $this->$url[1]();
            }
            else{                
                $this->index();
            }
        }
        public function index(){
            $this->view->render('admin/index');
        }
        public function logout(){
            echo 'loh';
        }
        public function video(){
            echo 'video';
        }
        
}

