<!DOCTYPE>
<html>
<head>
	<title>form</title>
	<style type="text/css">
#btn{
	width: 80px;
	height: 25px;
	background: pink;
	text-align: center;

}
	</style>
	<script stc="./jquery.js" type="text/javascript"></script>
</head>
<body>
<div id="btn">show</div>
<div id = "div2"></div>
<script>
$(document).ready(function(){
	$("#btn").click(function(e){
			$.ajax({
				url: 'hwpost.php',
				type: 'post';
				dataType: 'json',
				success:function(data){
					var content = '';
					content += data;
					$("#div2").html(content);
				}
			})
	});
});
</script>
</body>
</html>