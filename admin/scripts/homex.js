$("#btn").click(function(){
	var ajax = $.ajax({
		type:"POST",
		url:"check",
		data:$("#frm").serialize()
	});
	ajax.done(function(data){
		$(".err").fadeIn();
		$(".err").html(data);
	})
});

$(document).keypress(function(event){
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
        var ajax = $.ajax({
			type:"POST",
			url:"check",
			data:$("#frm").serialize()
		});
		ajax.done(function(data){
			$(".err").fadeIn();
			$(".err").html(data);
		}) 
    }
});