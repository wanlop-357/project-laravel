var host = window.location.origin+'/';

var qut = {
	setupAjax : function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
    },
    getdata : function(){
		qut.setupAjax();
		$.ajax({
            url : host+'getdata',
            dataType : 'json',
            type: "POST",
            cache : false,
        }).fail(function(xhr, st ,err){
            console.log(xhr.responseText);
        }).done(function(data){
			var h = "";
			var ia= 1;
			$.each(data, function(i, o) {
				h += "<div class='row'>"+
						"<div class='col-md-1 box-txt justify-content-center'>"+ia+"</div>"+
						"<div class='col-md-3 box-txt'>"+ o.username +"</div>"+
						"<div class='col-md-2 box-txt'>"+o.fname+"</div>"+
						"<div class='col-md-2 box-txt'>"+o.lname+"</div>"+
						"<div class='col-md-2 box-txt text-truncate'>"+o.email+"</div>"+
    					"<div class='col-md-1 box-txt'><button type='button' class='btn btn-block btn-warning btn-sm' data-toggle='modal' data-target='.bd-example-modal-lg1' data-id="+o.idUser+" onclick='qut.get_data_edit(this)'>Update</button></div>"+
    					"<div class='col-md-1 box-txt'><button type='button' class='btn btn-block btn-danger btn-sm' data-id="+o.idUser+" onclick='qut.deleteData(this);'>Delete</button></div>"+
					"</div>"+
				"";
				ia++;
			});
			$('.a').html(h);
		});
	},
	insertData : function(opjs){
		var opj = $(opjs).parent().parent().parent().parent().parent().parent();
		var data = {
			'sname' : $('[name=sname]',opj).val(),
			'lname' : $('[name=lname]',opj).val(),
			'pname' : $('[name=pname]',opj).val(),
			'username' : $('[name=username]',opj).val(),
			'email' : $('[name=email]',opj).val(),
			'password-o' : $('[name=password-o]',opj).val(),
			
		};
		qut.setupAjax();
		$.ajax({
			url : host+'insertData',
			// headers: {'X-Requested-With': 'XMLHttpRequest'},
			dataType : 'json',
			data:data,
			type: "POST",
			cache : false,
		}).done(function(data){
			console.log(data);
			// if(data.st == 1){
			// 	$('.bd-example-modal-lg').modal('hide');
			// 	qut.getdata();
			// }else{
			// 	alert('fall');
			// 	console.log(data);
			// }
		});
	},
	get_data_edit:function(opj){
		var data = {'id':$(opj).attr('data-id')}
	
		$.ajax({
			url : host+'api/ApiHome/getData_edit',
			headers: {'X-Requested-With': 'XMLHttpRequest'},
			dataType : 'json',
			data:data,
			type: "POST",
			cache : false,
			error : function(argument){
				console.log(argument);
			}
		}).done(function(data){
			console.log(data);
			var opj = $('.bd-example-modal-lg1');
			$('[name=sname]',opj).val(data[0].fname);
			$('[name=lname]',opj).val(data[0].lname);
			$('[name=pname]',opj).val(data[0].pname);
			$('[name=username]',opj).val(data[0].username);
			$('[name=email]',opj).val(data[0].email);
			$('[name=password-o]',opj).val(data[0].password);
			$('.idupdate',opj).attr('data-idupdate',data[0].idUser);
		});
	},
	editData : function(opjs){
		
		var opj = $(opjs).parent().parent().parent().parent().parent().parent();
		var data = {
			'id':$(opjs).attr('data-idupdate'),
			'sname' : $('[name=sname]',opj).val(),
			'lname' : $('[name=lname]',opj).val(),
			'pname' : $('[name=pname]',opj).val(),
			'username' : $('[name=username]',opj).val(),
			'email' : $('[name=email]',opj).val(),
			'password-o' : $('[name=password-o]',opj).val(),
		};
		console.log(data);
		
		$.ajax({
			url : host+'api/ApiHome/updateData',
			headers: {'X-Requested-With': 'XMLHttpRequest'},
			dataType : 'json',
			data:data,
			type: "POST",
			cache : false,
		}).done(function(data){
			console.log(data);
			if(data.st == 1){
				$('.bd-example-modal-lg1').modal('hide');
				qut.getdata();
			}else{
				alert('fall');
				console.log(data);
			}
		});
		
	},
	deleteData : function(opj){
		var data = {'id':$(opj).attr('data-id')}
		$.ajax({
			url : host+'api/ApiHome/deleteData',
			headers: {'X-Requested-With': 'XMLHttpRequest'},
			dataType : 'json',
			data:data,
			type: "POST",
			cache : false,
			error : function(argument){
				console.log(argument);
			}
		}).done(function(data){
			if(data.st == 1){
				qut.getdata();
			}else{
				alert('fall');
				console.log(data);
			}
		});
	},

	showdata:function(){
		var lifA = $('[name=lifA]').val();
		var lifB = $('[name=lifB]').val();
		var Fare= $('[name=Fare]').val();
		var updows = $('[name=updows] option:selected').val();
		var SA = Fare - lifA;
		var SB = Fare - lifB;
		
		// if(lifA == Fare){
		// 	$('.data').text('ลิฟA')
		// 	return false;
		// }else{
		// 	$('.data').text('ลิฟB')
		// 	return false;
		// }
		if(updows == 1){
			if(Fare<lifA && Fare<lifB){
				if(SA > SB){
					$('.data').text('ลิฟA')
					return false;
				}else{
					$('.data').text('ลิฟB')
					return false;
				}
			}else{
				if(Fare > lifA ){
					if(lifA<lifB && lifA<Fare){
						$('.data').text('ลิฟa')
						return false;
					}else{
						$('.data').text('ลิฟb')
						return false;
					}
				}else{
					if(lifA>lifB && lifB>Fare){
						$('.data').text('ลิฟA')
						return false;
					}else{
						$('.data').text('ลิฟB')
						return false;
					}
				}
				
			
			}
		}
		
		if(updows == 2){
			if(Fare<lifA && Fare<lifB){
				if(SA < SB){
					$('.data').text('ลิฟA')
				}else{
					$('.data').text('ลิฟB')
				}
			}else{

				if(Fare > lifA ){
					if(lifA<lifB && lifA<Fare){
						$('.data').text('ลิฟB')
						return false;
					}else{
						$('.data').text('ลิฟA')
						return false;
					}
				}else{
					if(lifA>lifB && lifB>Fare){
						$('.data').text('ลิฟA')
						return false;
					}else{
						$('.data').text('ลิฟB')
						return false;
					}
				}
			}
		}


	}
}

