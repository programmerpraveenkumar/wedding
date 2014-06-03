<?php
class validation extends controller{
    public function __construct($url){
             parent::__construct();
                if($this->checkmethodexists($this,$url)){
                    $this->$url[1]();
                }
                else{       
                    echo $url[0];
                    $this->index();
                }
        }        
        public function admin(){
            $this->model->call('admin','validation');
            
        }
}

