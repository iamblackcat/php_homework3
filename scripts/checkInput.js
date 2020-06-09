function checkInput(){
	var uname = document.forms["form"]["uname"].value;
	var title = document.forms["form"]["title"].value;
	var content = document.getElementById('content').value;

	if (!uname || !title || !content ) {
		alert("请确认 姓名/标题/正文 是否填写完整！");
		return false;
	}
}