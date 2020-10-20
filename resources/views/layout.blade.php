<!DOCTYPE html>
<html>
<head>

	 @include('partials.head')
	<title>Form</title>
	<style type="text/css">
		.form-group {
			width: 130%;
		}
	</style>
</head>
<body>
	<div class="navbar navbar-inverse bg-inverse">
		Application
	</div>
	<div style="width: 50%;margin: 0px auto;border: 1px solid #ccc;padding: 30px;">
		
		<form class="form-horizontal" method="post" action="/saveData">
			@csrf
			<div class="form-group">
				<label class="col-sm-3" for="name">Name :</label>
				<div class="col-sm-6">
			        <input type="text" class="form-control" id="name" placeholder="Enter your Name" name="name">
			    </div>
			</div>
			<div class="form-group">
				<label class="col-sm-3" for="mobile">Mobile :</label>
				<div class="col-sm-6">
			        <input type="text" class="form-control" id="mobile" placeholder="Enter your Mobile Number" name="mobile" maxlength="10" size="10">
			    </div>
			</div>
			<div class="form-group">
				<label class="col-sm-3" for="dob">DOB :</label>
				<div class="col-sm-6">
			        <input type="date" class="form-control" id="dob" placeholder="Enter your DOB" name="dob">
			    </div>
			</div>
			<div class="form-group">
				<label class="col-sm-3">Gender :</label>
				<div class="col-sm-6">
			        <div class="col-sm-6">
				        <input type="radio" name="gender" value="male">
						<label for="male">Male</label>
					</div>
					<div class="col-sm-6">
						<input type="radio" name="gender" value="female">
						<label for="female">Female</label>
					</div>
			    </div>
			</div>
			<div class="form-group">
				<label class="col-sm-3">Marital Status :</label>
				<div class="col-sm-6">
			        <div class="col-sm-6">
				        <input type="checkbox" name="marital_status" value="married">
						<label for="married">Married</label>
					</div>
					<div class="col-sm-6">
						<input type="checkbox" name="marital_status" value="unmarried">
						<label for="unmarried">Unmarried</label>
					</div>
			    </div>
			</div>
			<div class="form-group">
				<label class="col-sm-3">State :</label>
				<div class="col-sm-6">
			        <select  class="form-control" name="state">
						<option value="tn">TamilNadu</option>
						<option value="kerala">Kerala</option>
						<option value="Karnataka">Karnataka</option>
						<option value="andhra">Andhra</option>
					</select>
			    </div>
			</div>
			<div style="padding-left: 33%;">
				<button class="btn btn-success text-right" name=suibmit>submit</button>
			</div>
		</form>
	</div>
</body>
</html>