import React from 'react';
import logoImage from '../../../assets/adminAssets/images/logo.png'

import '../../../assets/adminAssets/css/style.css'



const Adminlogin = (props) => {
	return (
		<div className="login">
			<div id="mainWraper" >
				<div className="loginwrapper">
					<div className="loginLogo">
							<a href="#"><img src={logoImage} alt="ExpresSpa" title="ExpresSpa"/></a>
					</div>
					<div className="innWrapper">
					<h2 className="login-title">Login</h2>
						<div className="form-group">
							<label for="">Username</label>
							<input type="text" className="form-control loginInput" placeholder="Username" defaultValue={props.username}/>
						</div>
						<div className="form-group">
							<label for="">Password</label>
							<input type="password" className="form-control loginInput" placeholder="Enter Password" defaultValue={props.password}/>
						</div>
						<div className="form-group">
							<div className="row padding-top10">
							<div className="col-md-6 padding-top10">
							<label className="checkbox">Remember Me
									<input type="checkbox" name="check" defaultChecked='true'/>
									<span className="checkmark"></span>
							</label>
							</div>
							<div className="col-md-6 text-right"><a href="index.html"><button className="btn btn-primary loginBtn">Login</button></a></div>
						</div>
						</div>
						<div className="forgotpassword text-center">
							Forgot Password? <a href="#">Reset</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		)
}

export default Adminlogin;