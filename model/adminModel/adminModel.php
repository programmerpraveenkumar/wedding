<?php
class adminModel extends database{
    private $_tmp;
    public function getgroomphotos(){            
        return array("groomphotos"=>$this->groomandbrideslider('groom'),
                  "bridephotos"=>$this->groomandbrideslider('bride'),
            "groomdad"=>'<img src="'.PHOTO_PATH.'parents/groom/dad.jpg" alt="Logo" />',
            "groommom"=>'<img src="'.PHOTO_PATH.'parents/groom/mom.jpg" alt="Logo" />',
            "bridemom"=>'<img src="'.PHOTO_PATH.'parents/bride/mom.jpg" alt="Logo" />',
            "bridedad"=>'<img src="'.PHOTO_PATH.'parents/bride/dad.jpg" alt="Logo" />',
            "function"=>'<li><a href="#" class="block-logo">
								<img src="'.PHOTO_PATH.'function/1.jpg" alt="Logo" />
							</a>
						</li>
						<li>
							<a href="#" class="block-logo">
								<img src="'.PHOTO_PATH.'function/2.jpg" alt="Logo" />
							</a>
						</li>					  
						<li>
							<a href="#" class="block-logo">
								<img src="'.PHOTO_PATH.'function/3.jpg" alt="Logo" />
							</a>
						</li>					  
						<li>
							<a href="#" class="block-logo">
								<img src="'.PHOTO_PATH.'function/4.jpg" alt="Logo" />
							</a>
						</li>',
            "photo"=>$this->getphoto()
            
            
            );
    }
    private function getphoto(){
                $this->_tmp='';                 
        $data= array_values(array_diff(scandir('photo/photo'),array('.','..')));  
        for($i=0;$i<count($data);$i++){
         $this->_tmp.='<li><a href="'.PHOTO_PATH.'photo/'.$data[$i].'"><img src="'.PHOTO_PATH.'photo/'.$data[$i].'" alt="The Dress" class="fade-in">
								<span class="overlay-label">memories</span>
							</a>
						</li>';
        }
        return $this->_tmp;
     
    }
    private function groomandbrideslider($type){
$this->_tmp='';
        if($type=='groom'){
            $path='groom';
        }
        elseif($type=='bride'){
            $path='bride';
        }
        $data= array_values(array_diff(scandir('photo/'.$path),array('.','..')));
        
        for($i=0;$i<count($data);$i++){
        $this->_tmp.='<li><img src="'.PHOTO_PATH.$path.'/'.$data[$i].'" alt="Placeholder" />
									<p class="flex-caption">
										
									</p>
								</li>';
        }
        return $this->_tmp;
        
       
        
    }
    
    public function validation(){
        $username='admin';
        $pass='admin';
        $data=$this->DB_refreshdata($_POST);
        if($data['username']==$username && $data['password']==$pass){
            session::set('admin','admin');
            $this->DB_redirect(ADMIN);
        }        
        else{
            $this->DB_redirect(ADMIN.'?msg=error');
        }
    }
    
}    
?>

