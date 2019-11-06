<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
		@keyframes sanjay{
			0%{
				background-image:url("image1.jpg");
			}
			20%{
				background-image:url("image1.jpg");
			}
			30%{
				background-image:url("image2.jpg");
			}
			50%{
				background-image:url("image2.jpg");
			}
			60%{
				background-image:url("image3.jpg");
			}
			80%{
				background-image:url("image4.jpg");
			}
			100%{
				background-image:url("image1.jpg");
			}
		}
		.s1{
			width:100px;
			height:100px;
			background-image:url("image1.jpg");
			animation:5s sanjay infinite;
		}
	</style>
</head>

<body>
	
	
	<div class="s1"></div>
</body>
</html>