<head>
<link rel="stylesheet" type="text/css" href="form.css">
</head>


<div class="container">
<h1 class="title">Register/LogIn</h1>

    <div class="row col-sm-6 col-sm-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Registration Form</h1>
          </div>
          <div class="panel-body">
            <form action="connect.php" method="post">
              <div class="form-group">
                <label for="firstName">First Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  name="firstName"
                />
              </div>
              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="lastName"
                />
              </div>
              <div class="form-group">
                <label for="gender">Gender</label>
                <div>
                  <label for="male" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="m"
                      id="male"
                    />Male</label
                  >
                  <label for="female" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="f"
                      id="female"
                    />Female</label
                  >
                  <label for="others" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="o"
                      id="others"
                    />Others</label
                  >
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                />
              </div>
              <div class="form-group">
                <label for="number">Phone Number</label>
                <input
                  type="number"
                  class="form-control"
                  id="number"
                  name="number"
                />
              </div>
              <div class="form-group">
                <label for="adharNumber">Adhar Number</label>
                <input
                  type="text"
                  class="form-control"
                  id="adharNumber"
                  name="adharNumber"
                />
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <input
                  type="text"
                  class="form-control"
                  id="address"
                  name="address"
                />
              </div>
              <input type="submit" class="btn btn-primary" /> <br><br>
              <p>Already a user? <a href="i.html"><b>Log in</b></a></p>
            </form>
          </div>
          <div class="panel-footer text-right">
            <small>&copy; Short Stay</small>
          </div>
        </div>
    </div>
</div>
<!-- <body>
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
			<div class="sign-up-htm">
				<div class="group">
					<label for="firstName" class="label">First Name</label>
					<input id="firstName" type="text" class="input">
				</div>
                <div class="group">
					<label for="lastName" class="label">Last Name</label>
					<input id="lastName" type="text" class="input">
				</div>
                <div class="group">
					<label for="email" class="label">Email Address</label>
					<input id="email" type="text" class="input">
				</div>
                <div class="group">
					<label for="number" class="label">Phone Number</label>
					<input id="number" type="number" class="input">
				</div>
                <div class="group">
					<label for="adharNumber" class="label">Adhar Number</label>
					<input id="pass" type="text" class="input">
				</div>
                <div class="group">
					<label for="address" class="label">Address</label>
					<input id="address" type="text" class="input">
				</div>
				<div class="group">
					<label for="password" class="label">Password</label>
					<input id="password" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="password" class="label">Repeat Password</label>
					<input id="password" type="password" class="input" data-type="password">
				</div>
				
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body> -->
