import React, { Component } from 'react';
import './App.css';
import Adminlogin from './components/pages/Adminlogin/Adminlogin'
import Login from './components/pages/Login/Login'
import {BrowserRouter , Route} from 'react-router-dom'

import './assets/fonts/fonts.css'
import './assets/fonts/fontsawsome.css'
import './assets/css/bootstrap.min.css'



class App extends Component {

  	render() {
    	return (
			<BrowserRouter>
				<div className="App">
					<Route path='/admin' exact component={Adminlogin}/>
					<Route path='/' exact component={Login}/>					
				</div>
			</BrowserRouter>	
    	);
  }
}

export default App;
