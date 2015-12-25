<!DOCTYPE html>
<html>
<head>
	<title> Basic Blade</title>

	<style type="text/css">
		.main_heading{
			background: #133281;
			padding: 5px;
			margin-left: -8px;
			margin-right: -8px;
			text-align: center;
			color: #fff;	
		}
		.single_user_div{
			background: rgba(250,250,250,0.85);
			padding: 8px;
			padding-left: 5%;
			margin: 2%;
			margin-right: 5%;
			margin-left: 5%;
			border-radius: 15px;
		}
		body{
			background: #2C3335 url("http://cache4.asset-cache.net/xd/472919063.jpg?v=1&c=IWSAsset&k=2&d=62CA815BFB1CE48055B4D3F6C9FDECC56ADD405C56CDAC5767C847824859E822ECB4B08FE4CB6114") no-repeat;
			background-size: 100% 800px;
			background-position: 0px 0px;
		}
		.desc_para,.code_para{
			padding: 1%;
			margin-left: -5%;
			border-radius: 5px;			
		}
		.desc_para{
			background: rgba(150,150,150,0.8);
		}
		.code_para{
			background: rgba(17,31,74,0.3);
		}
	</style>
</head>
<body>


@yield('main_body')

</body>
</html>