<!DOCTYPE html>
<html>
<title>php</title>
<script src="./jquery.js" type="text/javascript"></script>
<script type="text/javascript"></script>
 		$(document).ready<function(){
 		$("#btn").click(function(e){
 		e.preventDefault();
 		$.ajax({
 		url:'hw5_2.php',
 		type:'post',
 		dataType:'json',
 		data:{"user_order":'ls'},
 		success:function(data){
 		var list = '';
 		list += data;
 		$("#list").html(list);
 	}
 	})
 	});
 	});
 </script>
 <style type="text/css">
 #btn{
 	width: 100px;
 	text-align: center;
 	padding-top: 15px;
 	padding-bottom: 15px;
 	background-color: pink;
 }
 </style>
</head>
<body>
	<div class="div">
		<div id="btn">show</div>
		<div id="list">file_list</div>
	</div>
<body>
</html>
