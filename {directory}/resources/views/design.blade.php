<html>

<style>
	.code_class, .output_class{
		float:left;
		margin-left:3%;
		border: 2px solid #444;
		box-shadow:0 0 8px #999;
		width:45%;
		height:81%;
		background: :#fff;
	}

	h1#main_heading{
		text-align:center;
		color: #eee;
	}
	
	h2.headings{
		float:left;
	}

	.myButton {
	-moz-box-shadow:inset 0px 1px 3px 0px #91b8b3;
	-webkit-box-shadow:inset 0px 1px 3px 0px #91b8b3;
	box-shadow:inset 0px 1px 3px 0px #91b8b3;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #768d87), color-stop(1, #6c7c7c));
	background:-moz-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
	background:-webkit-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
	background:-o-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
	background:-ms-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
	background:linear-gradient(to bottom, #768d87 5%, #6c7c7c 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#768d87', endColorstr='#6c7c7c',GradientType=0);
	background-color:#768d87;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
	border:1px solid #566963;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:11px 23px;
	text-decoration:none;
	text-shadow:0px -1px 0px #2b665e;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #6c7c7c), color-stop(1, #768d87));
	background:-moz-linear-gradient(top, #6c7c7c 5%, #768d87 100%);
	background:-webkit-linear-gradient(top, #6c7c7c 5%, #768d87 100%);
	background:-o-linear-gradient(top, #6c7c7c 5%, #768d87 100%);
	background:-ms-linear-gradient(top, #6c7c7c 5%, #768d87 100%);
	background:linear-gradient(to bottom, #6c7c7c 5%, #768d87 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#6c7c7c', endColorstr='#768d87',GradientType=0);
	background-color:#6c7c7c;
}
.myButton:active {
	position:relative;
	top:1px;
}

	#code{
		width:100%;
		height:100%;
		position: relative;
		top: -41px;
		resize: none;
		background: rgba(255,255,255,0.6);
	}
	body{
		background: #2C3335 url("http://cache4.asset-cache.net/xd/472919063.jpg?v=1&c=IWSAsset&k=2&d=62CA815BFB1CE48055B4D3F6C9FDECC56ADD405C56CDAC5767C847824859E822ECB4B08FE4CB6114") no-repeat;
		background-size: 100% 1100px;
		background-position: 0px 0px;

	}
	.output_class{
		background:#fff;
	}

	#execute_code{
		position: relative;;
		left: 40%;
		top: -119px;
		padding: 12px;
		background: #0C8E37;
		border-radius: 5px;
		border: 1px solid #229C4B;
		color: #EBF766;
	}
	#description{
		width:207%;
		height:40%;	
		font-size: 15px;	
		background: rgba(255,255,255,0.8);
	}
	#title{
		width:207%;
		height: 30px;
		padding: 2px;
		font-size: 15px;	
		background: rgba(255,255,255,0.8);
	}
	#logout_link
	{
		font-size: 25px;
		color: #fff;
		float: right;
		margin-top: -6%;
	}
	#code_links
	{
		font-size: 25px;
		color: #fff;
		float: right;
		margin-top: -3%
	}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <body>
    	@yield('compiler_body')
    </body>
	
</html>