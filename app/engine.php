<?php
/*
----------------------------------------------------------------------------

    KRZYSZTOF JANKOWSKI
    P1X.in VER 4

    abstract: indie game developement studio
    created (v1): 29-09-2013
    updated (v2): N/A
    updated (v3): 21.06.2014
    updated (v4): 10.04.2015

    licence: do what you want and dont bother me

    webpage: http://krzysztofjankowski.com
    twitter: @w84death

----------------------------------------------------------------------------
*/
/*

	SIMPLE WEB ENGINE ver.25-11-2012
	--------------------------------
	(c)2012 Krzysztof Jankowski .com

*/

session_start();

if(!isset($_GET['nav'])){
	$_GET['nav'] = 'welcome';
}

function pwd($body){
    if($body == 'head'){
	   return strtoupper($_GET['nav']);
    }
    if($body == 'tail' && $_GET['sub']){
        return strtoupper($_GET['sub']);
    }
}

function assets($sub,$filename){
  echo '/assets/'.$_GET['nav'].'/'.$sub.'/'.$filename;
}

function pwdUrl($body){
    if($body == 'head'){
        return '/'.strtolower($_GET['nav']);
    }
    if($body == 'tail' && $_GET['sub']){
        return '/'.strtolower($_GET['nav']).'/'.strtolower($_GET['sub']);
    }
}

function getTail(){
    if($_GET['sub']){
        return strtolower($_GET['sub']);
    }else{
        return false;
    }
}

function isTail(){
    if(!$_GET['sub']){
        return false;
    }else{
        return true;
    }
}

function getTitle(){
	if(!$_GET['sub']){
		return strtoupper($_GET['nav']);
	}else{
		return strtoupper(str_replace("_", " ", $_GET['nav']).' &gt; '.$_GET['sub']);
	}

}

function article(){
	if(isset($_GET['nav'])){
		if(file_exists('www/'.$_GET['nav'].'.html')){
			include ('www/'.$_GET['nav'].'.html');
		}else{
			include ('www/err.html');
		}
	}
}

function element($name){
    if(file_exists('www/'.$name.'.html')){
        include ('www/'.$name.'.html');
    }else{
        if(file_exists('www/'.$name.'.txt')){
            include ('www/'.$name.'.txt');
        }else{
            include ('www/err_mini.html');
        }
    }
}

function element2($dir, $name){
    if(file_exists('www/'.$dir.'/'.$name.'.html')){
        include ('www/'.$dir.'/'.$name.'.html');
    }else{
        include ('www/err_mini.html');
    }
}

function isActive($name){
	if( $name == pwd() ){
		echo 'active';
	}
}


function updateList($folder,$extensions) {
		$list = array();
		$folder = trim($folder);

	    if (!is_dir($folder)){ die('invalid folder given!'); }
	    if ($dir = @opendir($folder)){

	        while($file = readdir($dir)){
	            if (!preg_match('/^\.+$/', $file) and
	                preg_match('/\.('.$extensions.')$/', $file)){
		                	$ctime = filectime($folder.'/'.$file);
		                	$list[$ctime] = $file;
	            }
	        }
	        closedir($dir);
	        if($list){
	        	krsort($list);
	        	return $list;
	    	}else{
	    		return null;
	    	}
	    }
}


function simpleGallery($dir, $ext) {
    // GALLERY FOR PURISTS
    // VER 0.3

    $list = updateList('media/'.$dir,$ext);

	if (count($list)>0) {
      echo('<ul class="gallery">');
      foreach ($list as &$value) {
      ?>

        <li><img src="/media/<?php echo($dir); ?>/<?php echo($value); ?>" alt="<?php echo($value); ?>"/>

      <?php
      } ?>
      </ul>
      <?php
    }else{
      echo('<p>no pixel art</p>');
    }
}

function fileBrowser($dir) {
    // blog FOR PURISTS
    // VER 0.1-zuo

    $list = updateList('www/'.$dir,'txt');

    if (count($list)>0) {
      echo('<ul class="thefiles">');
      foreach ($list as &$value) {
        $name = substr($value, 0,-4);
      ?>

        <li><a href="<?php echo $dir; ?>/<?php echo $name; ?>"><?php echo $name; ?></a>

      <?php
      } ?>
      </ul>
      <?php
    }else{
      echo('<p>The files are not here jet.</p>');
    }
}

function getOGImage(){

	$file = 'media/thumbs/'.$_GET['nav'].'/'.$_GET['sub'].'_thumb.png';

	if(file_exists($file)){
		return $file;
	}else{
		return 'media/thumbs/thumb.png';
	}
}



?>