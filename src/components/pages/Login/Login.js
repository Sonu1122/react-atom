import React from 'react';
import loginLogoImage from '../../../assets/images/login-logo.png'

// import '../../../assets/css/style.css'
// import '../../../assets/css/responsive.css'

// import '../../../assets/js/jquery-3.3.1.min'
// import '../../../assets/js/bootstrap.min'
// import '../../../assets/js/tether.min.js'
// import '../../../assets/js/common'



const Login = (props) => {
	return (
		<div id="mainWraper">
			<div class="loginwrapper">
				<div class="innWrapper">
					<div class="loginLogo">
						<a href="#"><img src={loginLogoImage} alt="ExpresSpa" title="ExpresSpa"/></a>
					</div>
					<div class="form-group">
						<input type="password" class="form-control loginInput" placeholder="Passcode"/>
					</div>
					<div class="form-group text-center">
					<a href="index.html"><button class="btn btn-primary loginBtn">LOGIN</button></a>
					</div>
					<div class="forgotpassword text-center">
						<a href="#"><b>Wrong Passcode</b>, please contact your admin.</a>
					</div>
				</div>
			</div>
		</div>
		)
}

export default Login;