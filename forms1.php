<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="ISO-8859-1">
        <title></title>
    </head>
    <body>
		<h1>Register</h1>
		<form>
			<label>First Name: <input type="text" name="firstName" placeholder="John"></label>
			<label>First Name: <input type="text" name="lastName" placeholder="Smith"></label>
            <br />
            <label><input type="radio" name="gender" value="Male">Male</label>
            <label><input type="radio" name="gender" value="Female">Female</label>
            <label><input type="radio" name="gender" value="Other">Other</label>
            <br />

            <label>Email: <input type="email" placeholder="email"></label>
            <label>Password: <input type="password" placeholder="password"></label>
			<br />
			<label>Birthday
				<select name="birthdayMonth">
					<option selected="selected">Month</option>
					<option value="1">January</option>
					<option value="2">February</option>
					<option value="3">March</option>
					<option value="4">April</option>
					<option value="5">May</option>
					<option value="6">June</option>
					<option value="7">July</option>
					<option value="8">August</option>
					<option value="9">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
				</select>
				<select name="birthdayDay">
					<option selected="selected">Day</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
				</select>
				<select name="birthdayYear">
					<option selected="selected">Year</option>
					<option value="01">2000</option>
					<option value="01">2001</option>
					<option value="02">2002</option>
					<option value="03">2003</option>
					<option value="04">2004</option>
					<option value="05">2005</option>
					<option value="06">2006</option>
					<option value="07">2007</option>
					<option value="08">2008</option>
					<option value="09">2009</option>
					<option value="10">2010</option>
					<option value="11">2011</option>
					<option value="12">2012</option>
				</select>
			</label>
			<br />
			<label>I agree to the terms and conditions <input type="checkbox" name="agree"></label>
            <br />
			<input type="submit">

        </form>
    </body>
</body>
</html>
