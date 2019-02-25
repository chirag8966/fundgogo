/**
 * @author Kishor Mali
 */


jQuery(document).ready(function(){
	
	jQuery(document).on("click", ".deleteUser", function(){
		var id = $(this).data("id");
		var type = $(this).data('type');
			hitURL = baseURL+'user/deleteRow/'+type+'/'+id,
			currentRow = $(this);
		
		var confirmation = confirm("Are you sure to delete this?");
		
		if(confirmation)
		{
			jQuery.ajax({
			type : "POST",
			
			url : hitURL,
			
			}).done(function(data){
				
				currentRow.parents('tr').remove();
				if(data = "success") { alert("successfully deleted"); }
				else if(data!= "success") { alert("Deletion failed"); }
				else { alert("Access denied..!"); }
			});
		}
	});
	
	
	jQuery(document).on("click", ".searchList", function(){
		
	});
	
});
