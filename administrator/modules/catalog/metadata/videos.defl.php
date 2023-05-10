<?php
//BARMAZ_COPYRIGHT_TEMPLATE
//BARMAZ_MODULE_INFO

defined('_BARMAZ_VALID') or die("Access denied");

$tablname	= 'goods_videos';
$use_view_rights="goods";
$keystring	= 'v_id';
$deleted	= 'v_deleted';
$nametabl	= "Goods videos";
$multy_field='v_gid';
$parent_view="goods";
$parent_code='g_id';
$ordering_field	= "v_ordering";		// Поле порядка отображения
//$ordering_parent = "v_gid";		// Поле внутри которого существует порядок отображения
$enabled="v_published";


$buttons = array(
			"go_up"=> array("show"=>1,"link"=>false),
			"new"		=> array("show"=>1,"view"=>"videos","task"=>"modify"),
			"filter"	=> array("show"=>1,"view"=>"videos"),
			"modify"	=> array("show"=>1,"view"=>"videos","task"=>"modify"),
			"delete"	=> array("show"=>1,"view"=>"videos","task"=>"delete"),
			"undelete"	=> array("show"=>1,"view"=>"videos","task"=>"delete"),
			"reorder"	=> array("show"=>1,"view"=>"videos","task"=>"reorder"),
			"trash"		=> array("show"=>1,"link"=>false),
			"clean_trash"	=> array("show"=>1,"link"=>false)
);
$cur_table_arr = array(
			"field"		=> array(1=>'v_id','v_gid','v_title','v_image','v_video_youtube',
									'v_video_ogg', 'v_video_mp4', 'v_video_webm', 'v_comment', 'v_published',
									'v_ordering','v_deleted'),
			"name"		=> array(1=>'ID','Goods','Title','Image', 'Video YouTube',
									'Video OGG', 'Video MP4', 'Video WEBM','Comments', 'Published', 
									'Ordering','Delete mark'),
			"descr"=>array(6=>'Ogg/Vorbis for old versions Firefox и Opera', 7=>'MP4 for Safari, IE9, iPhone, iPad, Android, и Windows Phone 7', 8=>'WebM/VP8 for Firefox4, Opera, and Chrome'),
			"val_type"	=> array(1=>'int','int','string','string','string',
									'string', 'string', 'string', 'text', 'boolean', 
									'int','boolean'),
			"input_type"	=> array(1=>'hidden','label_sel','text','image','text',
									'filepath', 'filepath', 'filepath',	'texteditor', 'checkbox', 
									'text','hidden'),
			"upload_path"=>array(4=>'videothumbs'),
			"ch_table" => array(2=>"goods"),
			"ch_field" => array(2=>"g_name"),
			"ch_id"    => array(2=>"g_id"),
);
?>