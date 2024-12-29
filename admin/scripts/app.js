$("#btn1").click(function(){
	$( "#btn1" ).prop( "disabled", true );
	var form = $('#form1')[0];
    var formUyeDuzelt= new FormData(form);
	var ajax = $.ajax({
		type:"POST",
		url:"pdo/newPost",
		enctype: 'multipart/form-data',
          processData: false,
          contentType: false,
          cache:false,
          data: formUyeDuzelt
	});
	ajax.done(function(data){
		$(".alertbx").slideDown();
		$(".alertbx").html(data);
		setTimeout(function(){
			$(".alertbx").slideUp();
			$( "#btn1" ).prop( "disabled", false );
		},3000);
	});
});

$("#btn2").click(function(){
	$( "#btn2" ).prop( "disabled", true );
	var form = $('#form2')[0];
    var formUyeDuzelt= new FormData(form);
	var ajax = $.ajax({
		type:"POST",
		url:"pdo/icerikGuncelle",
		enctype: 'multipart/form-data',
          processData: false,
          contentType: false,
          cache:false,
          data: formUyeDuzelt
	});
	ajax.done(function(data){
		$(".alertbx").slideDown();
		$(".alertbx").html(data);
		setTimeout(function(){
			$(".alertbx").slideUp();
			$( "#btn2" ).prop( "disabled", false );
		},3000);
	});
});