var BRANCHES = function () {
     $('#profession').DataTable({
     	ordering : false
     });
	
	$('.alert').fadeOut(5000);

	$(document).on('change','#vendor_id',function(){
		$('#searchByVendor').submit();
	})


	var HandleEdit = function () {
       $('#editProfession').validate({
	        rules:{
	        	email:{ 
	        		required:true,
	        		email : true
	        	},
	        	store_type:{
	        		required:true,
	        	},
	        	delivery_by : {
	        		required : true
	        	},
	        	selfPickUp : {
	        		required : true,
	        	},
	        	isOnlinePayment : {
	        		required : true,
	        	},
	        	isCOD : {
	        		required : true,
	        	},
	        	whatsappFlag : {
	        		required : true,
	        	},
	        	delivery_time_date : {
	        		required : true
	        	}
    		},
	        messages:{
	        	email:{ 
	        		required : "Please enter name",
	        	},
	        },
	       submitHandler:function(form){
	       		form.submit();
	       }
       });
	}


    return {
        //main function to initiate the module
        edit: function () {
            HandleEdit();
        }
    };
}();