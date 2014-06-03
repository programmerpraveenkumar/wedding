<?php
class admin extends controller{
        public function __construct($url){
            parent::__construct();
           $this->adminsession();
            if($this->checkmethodexists($this,$url)){   
                
                $this->$url[1]();
            }
            else{                
                $this->index();
            }
        }
        public function index(){
            $this->view->data=$this->model->call('photo','title');
            $this->view->render('admin/index');
        }
        public function logout(){
            session::delete('admin');
            header("location:".ADMIN);
        }
        public function video(){
            echo 'video';
        }
        public function titlephoto(){
            $this->model->call('photo','titlestore');
        }
        public function groomandbridestore(){                    
            $this->model->call('photo','groomandbridestore');            
        }
        public function slider(){                    
            $this->view->data=$this->model->call('photo','groomandbride');
            $this->view->render('admin/index');
        }
        public function parents(){
            $this->view->data=$this->model->call('photo','parents');
            $this->view->render('admin/index');            
        }
        public function parentstore(){
            $this->model->call('photo','parentstore');            
        }
        
}

