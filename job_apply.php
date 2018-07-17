<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shiba || Apply</title>
	<link href="css/style.css" rel="stylesheet"/>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/fonts/stylesheet.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
	<link rel="stylesheet" type="text/css" href="css/aos.css"/>
	<link href="css/header.css" type="text/css" rel="stylesheet"/>
	<link href="css/footer.css" type="text/css" rel="stylesheet"/>
	<link href="css/responsive.css" type="text/css" rel="stylesheet"/>
</head>
<body class="business_page apply-page header-section">

<!-- header area start -->
 <?php @include("include/header.php") ?>
<!-- header area end -->

<div class="mobile_area">

<section class="description_area">
	<div class="container">
		<div class="row">
			<h2>Textile Designer <span>No. of Positions: 3</span></h2>
		</div>
	</div>
</section>

<section class="apply_form">
	<div class="container">
		<div class="row">
			<h2>FILL IN THE FORM <span>(*All fields are mandatory)</span></h2>
			<form>
				<div class="form-group">
					<input type="text" name="name" placeholder="First Name" />
				</div>
				<div class="form-group">
					<input type="text" name="name" placeholder="Last Name" />
				</div>
				<div class="form-group">
					<input type="text" name="name" placeholder="Email Address" />
				</div>
				<div class="form-group">
					<input type="text" name="name" placeholder="Contact Number" />
				</div>
				<div class="form-group">
					<select name="gender">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
				<div class="form-group">
					<input type="text" name="name" placeholder="Date of birth" />
				</div>
				<div class="form-group select_apply">
					<select>
						<option value="Male">City</option>
						<option value="Female">city</option>
					</select>
				</div>
				<div class="form-group select_apply">
					<select>
						<option value="Male">State</option>
						<option value="Female">state</option>
					</select>
				</div>
				<div class="form-group msg_apply">
					<label>Tell About Your Self</label>
				     <textarea name="about" row="4" rows="5"></textarea>
			    </div>
			    <div class="form-group cv_upload">
			    	<p>Upload Resume/CV 
                     <span><input type="file" name=""></span></p>
			    </div>
			    <div class="apply_btn"><button>SUBMIT</button></div>
			</form>
		</div>
	</div>
</section>

<!-- footer area start -->
 <?php @include("include/footer.php") ?>
<!-- footer area end -->

</div>


<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.12.0.min.js"><\/script>')</script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/aos.js"></script>
<script type="text/javascript" src="js/shiba.js"></script>

</body>
</html>