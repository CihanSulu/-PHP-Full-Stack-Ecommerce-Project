$("#btnx1").click(function(){
	$( "#btnx1" ).prop( "disabled", true );
	var form = $('#hesap1')[0];
    var formUyeDuzelt= new FormData(form);
	var ajax = $.ajax({
		type:"POST",
		url:"pdo/hesapGuncelle",
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
			$( "#btnx1" ).prop( "disabled", false );
		},3000);
	});
});

$("#btnx2").click(function(){
	$( "#btnx2" ).prop( "disabled", true );
	var form = $('#hesap2')[0];
    var formUyeDuzelt= new FormData(form);
	var ajax = $.ajax({
		type:"POST",
		url:"pdo/yeniKullanici",
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
			$( "#btnx2" ).prop( "disabled", false );
		},3000);
	});
});

$("#pixelbtn").click(function(){
	$( "#pixelbtn" ).prop( "disabled", true );
	var form = $('#pixel1')[0];
    var formUyeDuzelt= new FormData(form);
	var ajax = $.ajax({
		type:"POST",
		url:"pdo/pixelEdit",
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
			$( "#pixelbtn" ).prop( "disabled", false );
		},3000);
	});
});