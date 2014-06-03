<?php
class adminModel extends database{
    private $_tmp;
    public function getgroomphotos(){
            
        return array("groomphotos"=>'<li><img src="'.PHOTO_PATH.'groom/groomsmen-1.jpg" alt="Placeholder" />
									<p class="flex-caption">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
									</p>
								</li>
								<li>
									<img src="'.PHOTO_PATH.'groom/groomsmen-2.jpg" alt="Placeholder" />
									<p class="flex-caption">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
									</p>
								</li>
								<li>
									<img src="'.PHOTO_PATH.'groom/groomsmen-3.jpg" alt="Placeholder" />
									<p class="flex-caption">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
									</p>
								</li>',
                  "bridephotos"=>'<li><img src="'.PHOTO_PATH.'bride/1.jpg" alt="Placeholder" />
									<p class="flex-caption">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
									</p>
								</li>
								<li>
									<img src="'.PHOTO_PATH.'bride/2.jpg" alt="Placeholder" />
									<p class="flex-caption">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
									</p>
								</li>
								<li>
									<img src="'.PHOTO_PATH.'bride/3.jpg" alt="Placeholder" />
									<p class="flex-caption">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
									</p>
								</li>',
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
						</li>'
            
            );
    }
    
    public function validation(){
        $username='admin';
        $pass='pass';
        $data=$this->DB_refreshdata($_POST);
        if($data['username']==$username && $data['password']=='pass'){
            session::set('admin','admin');
            $this->DB_redirect(ADMIN);
        }        
        else{
            $this->DB_redirect(ADMIN.'?msg=error');
        }
    }
}    
?>

