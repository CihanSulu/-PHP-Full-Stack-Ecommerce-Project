var id = parseInt($("#sayfa").val());
$("#btndevam").click(function(){
	$.get("pdo/viewIndex.php","id="+id,function(data){
		$("#icerikyeri").append(data);
		id = id+1;
	});
});
$("#btnbayan").click(function(){
	$.get("pdo/viewBayan.php","id="+id,function(data){
		$("#icerikyeri").append(data);
		id = id+1;
	});
});
$("#btnerkek").click(function(){
	$.get("pdo/viewErkek.php","id="+id,function(data){
		$("#icerikyeri").append(data);
		id = id+1;
	});
});
$("#btnunisex").click(function(){
	$.get("pdo/viewUnisex.php","id="+id,function(data){
		$("#icerikyeri").append(data);
		id = id+1;
	});
});
$("#btnhediye").click(function(){
	$.get("pdo/viewHediye.php","id="+id,function(data){
		$("#icerikyeri").append(data);
		id = id+1;
	});
});

