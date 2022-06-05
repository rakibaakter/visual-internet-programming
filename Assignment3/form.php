<?php
	$name ="";
	$email ="";
	$password ="";
	$phoneNo ="";
	$deptartment ="";
	$gender ="";
	$descript ="";


	if(isset($_POST['submit'])){
		$name =$_POST['userName'];
		$email =$_POST['userEmail'];
		$password =$_POST['pass'];
		$phoneNo =$_POST['phone'];
		$deptartment =$_POST['dept'];
		$gender =$_POST['gender'];
		$descript =$_POST['description'];


		$file_open = fopen("info.csv", "a");
		$formData = array(
			'name'=> $name,
			'email' => $email,
			'password' => $password,
			'phone' => $phoneNo,
			'department' => $deptartment,
			'gender' => $gender,
			'msg' => $descript,
		);
		fputcsv($file_open, $formData);

	}

?>

<?php
    include("header.php");
?>
<div class="container p-5">
    <div class="row px-5">
        <div class="col-md-12 text-center py-2">
            <h1>Please Fill The Sign Up Form</h1>
        </div>
    </div>
        <div class="row px-5">
            <div class="co-md-12 my-3 px-5">
                <form action="" method="post" class="px-5" enctype="multipart/form-data">
					<div class="form-group mt-2">
						<label for="">Name</label>
                    	<input  type="text" name="userName" id="" class="form-control" placeholder="Enter your name" required>
					</div>
                    <div class="form-group mt-2">
						<label for="">Email</label>
						<input type="email" name="userEmail" id="" class="form-control" placeholder="Enter your email address" required>
					</div>
					<div class="form-group mt-2">
						<label for="">Password</label>
						<input type="password" name="pass" id="" class="form-control" placeholder="Enter your password" required>
					</div>
					<div class="form-group mt-2">
						<label for="">Contact No</label>
						<input type="tel" name="phone" id="" class="form-control" pattern="[0][1][4-9]{1}[0-9]{8}" placeholder="Enter your phone nummber" required>
					</div>
					<div class="form-group mt-3">
						<label for="">Department</label>
						<select name="dept" id="">
							<option value="CSE">CSE</option>
							<option value="EEE">EEE</option>
							<option value="CEN">CEN</option>
							<option value="LLB">LLB</option>
							<option value="Pharmacy">Pharmacy</option>
							<option value="BBA">BBA</option>
						</select>
					</div>
					<div class="form-group mt-2">
						<label for="">Gender</label>
						<br>
						<input type="radio" name="gender" value="male" id="">
						<label for="">Male</label>
						<input type="radio" name="gender" value="female" id="">
						<label for="">Female</label>
					</div>
					
					<div class="form-group mt-2">
						<label for="">Description</label>
						<textarea name="description" id="" class="form-control" placeholder="Please share your opinion"></textarea>
					</div>
					
					<div class="form-group mt-3">
						<input type="submit" name="submit" value="Sign Up" class="btn btn-success">
					</div>
					<div class="form-group mt-3">
						<input type="reset" name="reset" value="Reset" class="btn btn-danger">
					</div>
					
                    

                </form>
            </div>
        </div>
</div>

<?php
    include("footer.php");
?>