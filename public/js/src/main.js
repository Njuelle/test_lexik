$(document).ready(function(){
	showUserDetails();
	showNewUserForm();
	initDataTable();
	massDelete();
});

function showUserDetails() {
	$('.show-detail').on('click', function(e){
		e.preventDefault();
		$('.modal').remove();
		var url = $(this).attr('href');

		AjaxModal.call(url, function(){
			$('#details-user-modal').modal('show');
		});		
	})	
}

function showNewUserForm() {
	$('.new-user').on('click', function(e){
		e.preventDefault();
		$('.modal').remove();
		var url = $(this).attr('href');

		AjaxModal.call(url, function(){
			$('#new-user-modal').modal('show');
		});		
	})	
}

function initDataTable() {
	$('#users-table').dataTable({
		'paging':   false,
		'info':     false
	});
}

function massDelete() {
	$('.delete-selected-user').on('click', function(e){
		e.preventDefault();
		var url = $(this).attr('href');
		var user_ids = [];
		$('.check-user:checked').each(function(){
			user_ids.push(
				$(this).data('id')
			);
		});
		
		if ( user_ids.length > 0 ) {
			window.location = url + '?ids=' + user_ids.join();
		}
		

	});	
}
