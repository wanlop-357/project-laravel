var host = window.location.origin+'/';

var az = {
    setupAjax : function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
    },
    getdata : function(){
        var data = {
            'sname' : 1,
            'lname' : 2,
            'pname' : 3,
            'username' : 4,
            'email' : 5,
            'password-o' : 6,
        };

        az.setupAjax();
        $.ajax({
            url : host+'getdata',
            dataType : 'json',
            data:data,
            type: "POST",
            cache : false,
        }).fail(function(xhr, st ,err){
            console.log(xhr.responseText);
        }).done(function(data){
            console.log(data);
        });
    },
}
