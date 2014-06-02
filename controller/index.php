<?php
class index extends controller{
        public function __construct($url){
             parent::__construct();
                if($this->checkmethodexists($this,$url[0])){
                    $this->$url[0]();
                }
                else{                     
                    $this->index();
                }
        }        
        public function index(){
            $this->view->render('index');
        }
}
?>