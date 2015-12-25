@extends('design')

@section('compiler_body')
        <h1 id="main_heading">PHP interpreter</h1>
		
		<button class="myButton" id="reset_text" onclick="document.getElementById('code').value=''">Reset</button>
		<button class="myButton" id="save_code">Save</button>
		<button class="myButton" id="reload_code" >Load</button>
		<a href="{{ url('/auth/logout') }}" id="logout_link">Logout</a>
		<a href="{{ url('/user_codes') }}" id="code_links">Other Codes</a>

		<br/>

		<div>
			<h2 class="headings" style="padding:5px; padding-left:25%; background: #ddd"> Code	</h2>
			<h2 class="headings" style="padding:5px; padding-left:40%; background: #ddd; padding-right:25%"> Output	</h2>
		</div>

		<div class="code_class">
			<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" role="form">
				<input id="execute_code" type="submit" value="Execute">
				<textarea type="text" value="" name="code" id="code"></textarea>
				<input type="hidden" name="_token" value="{{csrf_token()}}" />
				<label for="title">Title: </label> <input type="text" name="title" id="title">
				<br>	<br>
				<label for="description">Description: </label> 
				<textarea type="text" value="" name="description" id="description"></textarea>
			</form>		
		</div>
		
		<div class="output_class" >
			<?php
				if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["code"])) {
					$val = $_GET["code"];
					eval( str_replace('\n','<br>',$_GET["code"]));

					$myfile = fopen("codeFile.php", "w") or die("Unable to open file!");
					fwrite($myfile, $_GET["code"]);
					fclose($myfile);
				}

				if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["code"])) {
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "test";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} 

					$sql = "select * from articles where id=1";
					$result = $conn->query($sql);
					
					if($result->num_rows > 0)
					{
						$row = $result->fetch_assoc();
						if( isset($_GET["description"]) &&  $_GET["description"]!="")
							$desc_val = $_GET["description"] ;
						else
							$desc_val = $row["description"] ;
						if( isset($_GET["title"]) &&  $_GET["title"]!= "")
							$title_val = $_GET["title"] ;
						else
							$title_val = $row["title"] ;

						$code_val = addslashes($_GET["code"]);
						$sql = "update articles set code='$code_val',title='$title_val', description='$desc_val'  where id=1";
						if ($conn->query($sql) === TRUE) {
						    echo "";
						} else {
							echo "Error: " . $sql . "<br>" . $conn->error;
						}

					}

					else{
						$code_val = addslashes($_GET["code"]);
						$desc_val = addslashes($_GET["description"]);
						$title_val = addslashes($_GET["title"]);

						$sql = "insert into articles(id, description, code, title) values (1,'desc_val' , '$desc_val' , '$title_val') ";
						if ($conn->query($sql) === TRUE) {
					    echo "";
						} else {
							echo "Error: " . $sql . "<br>" . $conn->error;
						}
					}
					$conn->close();
				}

			?>
		</div>		

<script type="text/javascript">
	

	$(document).ready(function(){

	    $("#reset_text").click(function(){
	        $(".output_class").html("");
	    });

	    $.get( "http://localhost:8000/codeFile.php", 
	    	function( data ) {
				$("#code").val(data);
			}
		);

		$("#reload_code").click(
			function()
			{
			    $.get( "http://localhost:8000/codeFile.php", 
			    	function( data ) {
						$("#code").val(data);
					}				
				);
			}
		);
		
});
</script>


@stop