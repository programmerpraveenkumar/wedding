<?php
class controller{
        public function __construct() {
            $this->model=new model();
            $this->view=new view();
        }
        public function checkmethodexists($obj,$methodName){
                
                if(isset($methodName[1]) && method_exists($obj,$methodName[1])){
                        return true;
                }
                return false;
        }
        protected  function adminsession(){
            if(session::check('admin')){
                return true;
            }
            
            $this->view->render('admin/login');
            die();
            //die('you shoulld login');
            return false;
        }
}

