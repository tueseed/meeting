<html>
<head>
		<title>ระบบแจ้งเตือนการประชุมผ่านแอพพลิเคชั่นไลน์</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0," charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link href="tagsinput.css" rel="stylesheet" type="text/css">
		<script src="tagsinput.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="kpi.js"></script>
		<style type="text/css">
			.row-center
			{
				text-align:center;
			}
			body 
			{
				font-family: 'Kanit', sans-serif;
			}
		</style>
	</head>
<body>
	<script src="https://d.line-scdn.net/liff/1.0/sdk.js"></script>
    <script src="liff-starter.js"></script>
	<div class="container-fluid" style="background-color:#b461fb;">
			<div class="row row-center" >
				<div class="col-lg-12" style="background-color:#b461fb;">
					<h3>THE ASSIST</h3>
				</div>
			</div>
		</div>
	<div class="mt-2 container-fluid">
		<div class="row row-center">
			<div class="col-lg-12">
				<div class="form-group">
					<input type="text" class="form-control" id="uid" readonly>
				</div>
			</div>
		</div>
		<div class="row row-center">
			<div class="col-lg-12">
				<div class="form-group">
					<label for="name_lastname">ชื่อ-นามสกุล</label>
					<input type="text" class="form-control" id="name_lastname" readonly>
				</div>
			</div>
		</div>
		<div class="row row-center">
			<div class="col-lg-12">
				<div class="form-group">
					<label for="pos">ตำแหน่ง</label>
					<input type="text" class="form-control" id="pos" readonly>
				</div>
			</div>
		</div>
		<div class="row row-center">
			<div class="col-lg-12">
				<div class="form-group">
					<label for="office">หน่วยงาน</label>
					<input type="text" class="form-control" id="office" readonly>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	setTimeout(function(){check_member()}, 3000);
	
    
</script>
</html>