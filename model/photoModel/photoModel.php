<?php
class photoModel extends database{
    public function title(){
        return array("data"=>'<form class="form" method="post" enctype="multipart/form-data" action="'.ADMIN.'titlephoto?type=main"  name="imagetitle" onsubmit="return validation(\'imagetitle\',{\'first\':[\'image\',\'file\']})">                                
                               <div class="title">Main Image</div>
                                 <div class="separator"><label class="label">Choose IMage</label><input class="textbox" name="image" type="file" /><span class="form_image" id="error_image"></span>
                                <div class="separator submit_btn"><input class="submit_btn" type="submit" name="submit" /></div>
                                </div>
                            </form>
                            <form class="form" method="post" enctype="multipart/form-data" action="'.ADMIN.'titlephoto?type=bride"  name="imagebride" onsubmit="return validation(\'imagebride\',{\'first\':[\'image\',\'file\']})">                                
                                <div class="title">Bride Image</div>
                                <div class="separator"><label class="label">Choose IMage</label><input class="textbox" name="image" type="file" /><span class="form_error" id="error_image"></span>
                                <div class="separator submit_btn"><input class="submit_btn" type="submit" name="submit" /></div>
                                </div>
                            </form>
                            <form class="form" method="post" enctype="multipart/form-data" action="'.ADMIN.'titlephoto?type=groom"  name="imagegroom" onsubmit="return validation(\'imagegroom\',{\'first\':[\'image\',\'file\']})">                                
                                <div class="title">Groom Image</div>
                                 <div class="separator"><label class="label">Choose IMage</label><input class="textbox" name="image" type="file" /><span class="form_error" id="error_image"></span>
                                <div class="separator submit_btn"><input class="submit_btn" type="submit" name="submit" /></div>
                                </div>
                            </form>');
    }
    public function titlestore(){
        $type=$_GET["type"];
        switch($type){
            case "main":
                $this->_tmp='main.jpg';
            break;
            case "bride":
                $this->_tmp='bride.jpg';
            break;
            case "groom":
                $this->_tmp='groom.jpg';
            break;            
        }
        move_uploaded_file($_FILES['image']["tmp_name"],'photo/title/'.$this->_tmp);
        $this->DB_redirect(ADMIN.'index?msg=upload_ok');
    }
    
    
    public function groomandbride(){
        return array("data"=>'<form class="form" method="post" enctype="multipart/form-data" action="'.ADMIN.'groomandbridestore?type=groom"  name="bride" onsubmit="return validation(\'bride\',{\'first\':[\'image\',\'file\']})">                                
                               <div class="title">Groom Image</div>
                                 <div class="separator"><label class="label">Choose IMage</label><input class="textbox" name="image" type="file" /><span class="form_image" id="error_image"></span>
                                <div class="separator submit_btn"><input class="submit_btn" type="submit" name="submit" /></div>
                                </div>
                            </form>
                            <form class="form" method="post" enctype="multipart/form-data" action="'.ADMIN.'groomandbridestore?type=bride"  name="groom" onsubmit="return validation(\'groom\',{\'first\':[\'image\',\'file\']})">                                
                                <div class="title">Bride Image</div>
                                <div class="separator"><label class="label">Choose IMage</label><input class="textbox" name="image" type="file" /><span class="form_error" id="error_image"></span>
                                <div class="separator submit_btn"><input class="submit_btn" type="submit" name="submit" /></div>
                                </div>
                            </form>');
    }
    
    
    public function groomandbridestore(){
        $type=$_GET["type"];
        switch($type){
            case "groom":
                $this->_tmp='groom/'.uniqid().'.jpg';
            break;
            case "bride":
                $this->_tmp='bride/'.uniqid().'.jpg';
            break;                   
        }
        move_uploaded_file($_FILES['image']["tmp_name"],'photo/'.$this->_tmp);
        $this->DB_redirect(ADMIN.'slider?msg=upload_ok');
    }    
    
    
    public function parents(){            
        return array("data"=>'<form class="form" method="post" enctype="multipart/form-data" action="'.ADMIN.'parentstore?type=groommom"  name="groommom" onsubmit="return validation(\'groommom\',{\'first\':[\'image\',\'file\']})">                                
                               <div class="title">Groom Mother</div>
                                 <div class="separator"><label class="label">Choose IMage</label><input class="textbox" name="image" type="file" /><span class="form_image" id="error_image"></span>
                                <div class="separator submit_btn"><input class="submit_btn" type="submit" name="submit" /></div>
                                </div>
                            </form>
                            <form class="form" method="post" enctype="multipart/form-data" action="'.ADMIN.'parentstore?type=groomdad"  name="groomdad" onsubmit="return validation(\'groomdad\',{\'first\':[\'image\',\'file\']})">                                
                                <div class="title">Groom Father</div>
                                <div class="separator"><label class="label">Choose IMage</label><input class="textbox" name="image" type="file" /><span class="form_error" id="error_image"></span>
                                <div class="separator submit_btn"><input class="submit_btn" type="submit" name="submit" /></div>
                                </div>
                            </form>
                            <form class="form" method="post" enctype="multipart/form-data" action="'.ADMIN.'parentstore?type=bridemom"  name="bridemom" onsubmit="return validation(\'bridemom\',{\'first\':[\'image\',\'file\']})">                                
                               <div class="title">Bride Mother</div>
                                 <div class="separator"><label class="label">Choose IMage</label><input class="textbox" name="image" type="file" /><span class="form_image" id="error_image"></span>
                                <div class="separator submit_btn"><input class="submit_btn" type="submit" name="submit" /></div>
                                </div>
                            </form>
                            <form class="form" method="post" enctype="multipart/form-data" action="'.ADMIN.'parentstore?type=bridedad"  name="bridedad" onsubmit="return validation(\'bridedad\',{\'first\':[\'image\',\'file\']})">                                
                                <div class="title">Bride Father</div>
                                <div class="separator"><label class="label">Choose IMage</label><input class="textbox" name="image" type="file" /><span class="form_error" id="error_image"></span>
                                <div class="separator submit_btn"><input class="submit_btn" type="submit" name="submit" /></div>
                                </div>
                            </form>
                            
');
    }
    public function parentstore(){
    $type=$_GET["type"];
        switch($type){
            case "groomdad":
                $this->_tmp='groom/dad.jpg';
            break;
            case "groommom":
                $this->_tmp='groom/mom.jpg';
            break;
            case "bridemom":
                $this->_tmp='bride/mom.jpg';
            break;
            case "bridedad":
                 $this->_tmp='bride/dad.jpg';
            break;            
        }
        move_uploaded_file($_FILES['image']["tmp_name"],'photo/parents/'.$this->_tmp);
        $this->DB_redirect(ADMIN.'parents?msg=upload_ok');
    }
    public function photoForm(){
        
 return array("data"=>'<form class="form" method="post" enctype="multipart/form-data" action="'.ADMIN.'photostore"  name="photo" onsubmit="return validation(\'photo\',{\'first\':[\'image\',\'file\']})">                                
                               <div class="title">Photo</div>
                                 <div class="separator"><label class="label">Choose IMage</label><input class="textbox" name="image" type="file" /><span class="form_image" id="error_image"></span>
                                <span class="error">IMage size should be(500*500)</span>
                                    <div class="separator submit_btn"><input class="submit_btn" type="submit" name="submit" /></div>
                                </div>
                            </form>');
    }
    public function photostore(){
        move_uploaded_file($_FILES['image']["tmp_name"],'photo/photo/'.uniqid().'.jpg');
        $this->DB_redirect(ADMIN.'photos?msg=upload_ok');
    }
    
    public function functionphotoform(){
        return array("data"=>'<form class="form" method="post" enctype="multipart/form-data" action="'.ADMIN.'functionphotostore"  name="photo" onsubmit="return validation(\'photo\',{\'first\':[\'image\',\'file\']})">                                
                               <div class="title">Photo</div>
                                 <div class="separator"><label class="label">Choose IMage</label><input class="textbox" name="image" type="file" /><span class="form_image" id="error_image"></span>
                                <span class="error">IMage size should be(500*500)</span>
                                    <div class="separator submit_btn"><input class="submit_btn" type="submit" name="submit" /></div>
                                </div>
                            </form>');
    }
    public function functionphotostore(){
        move_uploaded_file($_FILES['image']["tmp_name"],'photo/function/'.uniqid().'.jpg');
        $this->DB_redirect(ADMIN.'photos?msg=upload_ok');
        
    }
}
?>