<!doctype html>
<html lang="en">
	
	<head>
		<!-- Jquery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

		<!-- Bootstrap CSS --> 
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/
		bootstrap.min.css" integrity="sha384-Vkoo8×4CGsO3+Hhxv8T/
		Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<!-- Bootstrap JS -->
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
		crossorigin="anonymous"></script>

		<title>Edit Comment</title>

		<style>
			
			body{
					background-color:#FDF5E6;
				}

    		h1{
    			font-size: 30px;
    			font-family: "Times New Roman", Times, serif;
			    position: absolute;
			    text-align: center;
			    top: 30%;
    			width: 100%;
    		}

    		.form-group1{
    			font-family: "Times New Roman", Times, serif;
			    position: absolute;
			    text-align: center;
			    top: 40%;
    			width: 100%;
    		}

    		#comment{
    			font-family: "Times New Roman", Times, serif;
			    position: absolute;
			    margin-top: 10px;
			    margin-left: 36%;
    			width: 400px;
    		}

    		.form-group2{
    			font-family: "Times New Roman", Times, serif;
			    position: absolute;
			    text-align: center;
			    top: 60%;
    			width: 100%;
    		}

    		#date_time{
    			font-family: "Times New Roman", Times, serif;
			    position: absolute;
			    margin-top: 10px;
			    margin-left: 36%;
    			width: 400px;
    		}

    		button{
    			font-family: "Times New Roman", Times, serif;
			    position: absolute;
			    text-align: center;
			    margin-top: 530px;
			    margin-left: 43%;
    			width: 230px;
    		}

    		#backBtn{
    			font-family: "Times New Roman", Times, serif;
			    margin-left: 44%;
			    position: absolute;
			    margin-top: 45%;
    			width: 200px;
    			font-size: 20px;
    			text-align: center;
    		}	

    		a:hover{
    			text-decoration: none;
    		}

		</style>
	</head>

	<body>
		<h1>Edit your Comment</h1>
		<form action='' method='post'>
			<div class="form-group1">
    			<label for="comment">Your Comment</label>
    			<input type="text" class="form-control" id="comment" name='comment' value="<?= $data['comment']->comment ?>">
  			</div><br>

  			<div class="form-group2">
    			<label for="date_time">Date and Time of Comment	</label>
    			<input type="datetime-local" class="form-control" id="date_time" name='date_time' value="<?= $data['comment']->date_time ?>">
  			</div>
  			<button type="submit" name='action' class="btn btn-primary">Save Changes</button>
  			<br>
		</form>
		
		<a id="backBtn" href='/Publication/details/<?= $data['publication']->publication_id ?>'>Back</a>
	</body>
</html>