<?php

function con(){
	return new mysqli("localhost","intranet","2WMPN26W6rrhbb.","multi_upload");
		

}

function insert_img($folder, $image){
	$con = con();
	$con->query("insert into image (folder,src,created_at) value (\"$folder\",\"$image\",NOW())");
}

function get_imgs(){
	$images = array();
	$con = con();
	$query=$con->query("select * from image order by created_at desc");
	while($r=$query->fetch_object()){
		$images[] = $r;
	}
	return $images;
}

function get_img($id){
	$image = null;
	$con = con();
	$query=$con->query("select * from image where id=$id");
	while($r=$query->fetch_object()){
		$image = $r;
	}
	return $image;
}

function del($id){
	$con = con();
	$con->query("delete from image where id=$id");
}

?>