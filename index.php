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
			iframe 
			{
				width: 100%;
				height: 100%;
			}
			.table-responsive 
			{
				display: block;
				max-height: 200px;
				overflow-y: auto;
				-ms-overflow-style: -ms-autohiding-scrollbar;
			}
		</style>
	</head>
	<script>
	</script>
	<body>
		<?php
			$server = "us-cdbr-iron-east-01.cleardb.net";
			$username = "b946a03b24557c";
			$password = "0000fb9a";
			$db = "heroku_91b59e978ea198b";
			$conn = new mysqli($server, $username, $password, $db);
			mysqli_query($conn, "SET NAMES utf8");
		?>
		<div class="container-fluid" style="background-color:#b461fb;">
			<div class="row row-center">
				<div class="col-lg-12" style="background-color:#b461fb;">
					<h3>ระบบแจ้งเตือนการประชุมผ่านแอพพลิเคชั่นไลน์</h3>
				</div>
			</div>
		</div>
		<div class="mt-2 container-fluid">
			<div class="row row-center">
				<div class="col-lg-4 offset-lg-4">
					<input type="button" class="btn btn-success" data-toggle="modal" href="#addtopic" value="สร้างการประชุม">
				</div>
			</div>
			<div class="modal fade" id="addtopic" role="dialog">
				<link href="tag/tagsinput.css" rel="stylesheet" type="text/css">
				<script src="tag/tagsinput.js"></script>
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">เพิ่มการประชุม</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="meeting_topic">หัวข้อการประชุม</label>
										<input class="form-control" type="text" name="meeting_topic" id="meeting_topic" placeholder="หัวข้อการประชุม" />
									</div>
									<div class="form-group">
										<label for="meeting_time">ตั้งแต่เวลา</label>
										<input class="form-control" type="time" name="meeting_time" id="meeting_time" />
									</div>
									<div class="form-group">
										<label for="meeting_place">สถานที่</label>
										<input class="form-control" type="text" name="meeting_place" id="meeting_place"/>
									</div>
									
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="meeting_date">วันที่</label>
										<input class="form-control" type="date" name="meeting_date" id="meeting_date" />
									</div>
									<div class="form-group">
										<label for="meeting_time2">ถึงเวลา</label>
										<input class="form-control" type="time" name="meeting_time2" id="meeting_time2"/>
									</div>
									<div class="form-group">
										<label for="meeting_detial">รายละเอียด/ผู้เข้าประชุม</label>
										<input class="form-control" type="text" name="meeting_detial" id="meeting_detial" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<label>แจ้งเตือน</label>       
										<input class="form-control" type="text" name="notice" id="notice" data-role="tagsinput" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="table-responsive">
										<table class="table table-hover">
											<thead class="thead-dark">
												<tr>
													<th scope="col">Gr.no</th>
													<th scope="col">ชื่อกลุ่ม</th>															 
												</tr>
											</thead>
											<tbody>
												<?php
													require('db/connect-db.php');
													$sql_group = "SELECT * FROM tbl_group";
													$query_group = mysqli_query($conn,$sql_group);
													while($obj = mysqli_fetch_array($query_group))
													{
														echo "<tr>";
														echo "<td>".$obj["group_num"]."</td>";
														echo "<td>".$obj["group_name"]."</td>";
												?>
												<td><input type='button' class='btn btn-info' value='Link' onclick=''></td>
												<?php
														echo "</tr>";
													}
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-default" data-dismiss="modal">ตกลง</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</hmtl>