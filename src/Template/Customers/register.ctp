


<!-- Content page -->
	
	<div class="container" style="background-color:#b2c0bd30">
		
		<form class="form-horizontal" role="form" method="POST" action="#">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<h2>Register</h2>
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 field-label-responsive">
					<label for="name">Name</label>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<div class="input-group mb-2 mr-sm-2 mb-sm-0">
							<div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
							<input type="text" name="name" class="form-control" id="name"
							placeholder="John Doe" required autofocus>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					
				</div>


			</div>

			<div class="row">
				<div class="col-md-3 field-label-responsive">
					<label for="email">E-Mail Address</label>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<div class="input-group mb-2 mr-sm-2 mb-sm-0">
							<div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-envelope"></i></div>
							<input type="email" name="email" class="form-control" id="email"
							placeholder="you@example.com" required autofocus>
						</div>
					</div>
				</div>
				<div class="col-md-3">
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 field-label-responsive">
					<label for="password">Password</label>
				</div>
				<div class="col-md-6">
					<div class="form-group has-danger">
						<div class="input-group mb-2 mr-sm-2 mb-sm-0">
							<div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
							<input type="password" name="password" class="form-control" id="password"
							placeholder="Password" required>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-control-feedback">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 field-label-responsive">
					<label for="password">Confirm Password</label>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<div class="input-group mb-2 mr-sm-2 mb-sm-0">
							<div class="input-group-addon" style="width: 2.6rem">
								<i class="fa fa-repeat"></i>
							</div>
							<input type="password" name="password-confirmation" class="form-control"
							id="password-confirm" placeholder="Password" required>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 field-label-responsive">
					<label>Phone Number</label>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<div class="input-group mb-2 mr-sm-2 mb-sm-0">
							<div class="input-group-addon" style="width: 2.6rem">
								<i class="fa fa-phone"></i>
							</div>
							<input type="text" name="phoneNum" class="form-control"
							id="phoneNum" placeholder="Phone Number" required>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 field-label-responsive">
					<label>Address</label>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<div class="input-group mb-2 mr-sm-2 mb-sm-0">
							<div class="input-group-addon" style="width: 2.6rem">
								<i class="fas fa-map-marked-alt"></i>
							</div>
							<input type="text" name="address" class="form-control"
							id="address" placeholder="Address" required>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="row">
				<div class="col-md-6 field-label-responsive">
					<label for="avatar">Avatar</label>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<input type="file"  id="imgInp" name="images">
					</div>
				</div>
				<div class="col-md-3">
						<img src="" id="preview_img">
				</div>

			</div> -->
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<button type="submit" class="btn btn-success"><i class="fas fa-user-plus"></i> Register</button>
				</div>
			</div>
			<br>
		</form>
	</div>



<script type="text/javascript" src="/vendor1/jquery/jquery-3.2.1.min.js"></script>


<script type="text/javascript">
    function imageURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#preview_img').attr('src', e.target.result)
                .width('auto')
                .height('auto');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
   
</script>
</body>
</html>
