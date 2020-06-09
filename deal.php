<?php
	
	if (empty($_POST["uname"])||empty($_POST["title"])||empty($_POST["content"])||empty($_FILES["picture"])) {
		// echo $_POST["uname"]."<br>";
		// echo $_POST["title"]."<br>";
		// echo $_POST["content"]."<br>";
		die("WRONG!");
	}
	$data = array();
	$data['uname'] = $_POST["uname"];
	$data['title'] = $_POST["title"];
	$data['content'] = $_POST["content"];
	$time = date('Ymd_H_i_s');

	$upload_path = "./upload/";

	$name = $data['uname'].'-'.$data['title'].'-'.$time;
	$ext_arr = array('jpg', 'png', 'gif');
	$file_ext = substr($_FILES['picture']['name'], strrpos($_FILES['picture']['name'], ".")+1);
	if (in_array($file_ext, $ext_arr)) {
		$temp_file = $_FILES['picture']['tmp_name'];
		$img_path = "./upload/".$name.$file_ext;

		if(move_uploaded_file($temp_file, $img_path)){
			$is_upload = true;
		} else {
			$msg = "上传失败";
		}
	} else {
		$msg = "只允许上传 .jpg|.png|.gif类型的文件！";
	}


	//写入json文件
	$path = "./messages/".$data['uname'].'-'.$data['title'].'-'.$time.'.json';
	if (fopen($path, 'w+')) {
		$json_string = json_encode($data);
		file_put_contents($path, $json_string);
	}


	


	// if (isset($_POST["picture"])) {

	// }
?>