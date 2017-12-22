/////////////////////////////////////////////
// petit objet JS pour récuperer une modal // 
// et son contenu en AJAX                  //
/////////////////////////////////////////////

var AjaxModal = {};

AjaxModal.call = function(url, callback) {
	self = this;
	$.ajax({
		url: url,
		success: function(html){
	        self.appendModal(html);
	        callback();
	    }
	});
}

AjaxModal.callWhithData = function(url, data, callback) {
	self = this;
	$.ajax({
		url: url,
		method : 'POST',
		data : data,
		success: function(html){
	        self.appendModal(html);
	        callback();
	    }
	});
}

AjaxModal.appendModal = function(html) {
	$('body').append(html);
}
