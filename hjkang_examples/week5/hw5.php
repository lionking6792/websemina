<!DOCTYPE html>
<html>
<head>
	<title>form test</title>
	<style type="text/css">
	#btn{
		width: 100px;
		height: 30px;
		background: pink;
		text-align: center;
	}
	</style>
	<script src="./jquery.js" type="text/javascript"></script>
</head>
<body>

	<div id="btn">show</div>
	<div id="div2"></div>
	<script>
	$(document).ready(function(){
		$("#btn").click(function(e){
			e.preventDefault();
			$.ajax({
				url: 'hwpost.php',
				type: 'post',
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