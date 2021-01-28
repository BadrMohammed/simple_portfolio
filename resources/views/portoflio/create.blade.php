<!DOCTYPE HTML>

<html>
	<head>
		<title>{{config('app.Name','Portoflio')}}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="{{ URL::asset('ui/css/main.css') }}"/>
        <link rel="shortcut icon" type="image/x-icon" href="images/pic00.jpg" />

	</head>
	<body style="font-family:Calibri;">
		

		<!-- Sidebar -->
			<section id="sidebar" style="background-color:white">
				<div class="inner">
					<nav>
						<ul>
							<li><a style="color:black" href="/portoflio">View Portoflio</a></li>
							<li><a style="color:black" href="#intro">Summary</a></li>
							<li><a style="color:black" href="#perosnal">Personal Information</a></li>
							<li><a style="color:black" href="#language">Language</a></li>
							<li><a style="color:black" href="#education">Education</a></li>
							<li><a style="color:black" href="#work">Work Skills</a></li>
							<li><a style="color:black" href="#pskill">Personal Skills</a></li>
							<li><a style="color:black" href="#experince">Experince</a></li>
							<li><a style="color:black" href="#project">Projects</a></li>
							<li><a style="color:black" href="#certificate">Certificates</a></li>
							<li><a style="color:black" href="#social">Social Links</a></li>


						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper" >

			

				<!-- summary -->
					<section id="intro" class="wrapper style1 fullscreen fade-up" >
						<div class="inner">
							<h1>Summary</h1>
							
							<form method="post" action="#">
										
								<div class="field">
									<label for="message">Summary</label>
									<textarea name="message" id="message" rows="5"></textarea>
								</div>
								<ul class="actions">
									<li><a href="" class="button submit">Save</a></li>
								</ul>
							</form>
							
						</div>
					</section>

					<!-- perosnal information -->

					<section id="perosnal" class="wrapper style1 fullscreen fade-up" >
						<div class="inner">
							<h1>Perosnal Information</h1>
							<form method="post" action="#">

								<div class="field half first">
									<label for="name">Photo</label>
									<input type="file" name="name" id="name" />
								</div>
								<div class="field half">
								<img src="" width="250" height="200">
								</div>

								
								<div class="field half first">
									<label for="name">FirstName</label>
									<input type="text" name="name" id="name" />
								</div>

								<div class="field half">
									<label for="name">SecondName</label>
									<input type="text" name="name" id="name" />
								</div>


								<div class="field half first">
									<label for="name">LastName</label>
									<input type="text" name="name" id="name" />
								</div>

								<div class="field half">
									<label for="name">phone</label>
									<input type="text" name="name" id="name" />
								</div>

						        
								<div class="field">
						                <label for="name">Country</label>
								        <select name="Country" id="Country">
								        <option value="country" selected>Country</option>
								        <option value="Afghanistan">Afghanistan</option>
								        <option value="Ƭand Islands">Ƭand Islands</option>
								        <option value="Albania">Albania</option>
								        <option value="Algeria">Algeria</option>
								        <option value="American">American Samoa</option>
								        <option value="Andorra">Andorra</option>
								        <option value="Angola">Angola</option>
								        <option value="Anguilla">Anguilla</option>
								        <option value="Antarctica">Antarctica</option>
								        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
								        <option value="Argentina">Argentina</option>
								        <option value="Armenia">Armenia</option>
								        <option value="Aruba">Aruba</option>
								        <option value="Australia">Australia</option>
								        <option value="Austria">Austria</option>
								        <option value="Azerbaijan">Azerbaijan</option>
								        <option value="Bahamas">Bahamas</option>
								        <option value="Bahrain">Bahrain</option>
								        <option value="Bangladesh">Bangladesh</option>
								        <option value="Barbados">Barbados</option>
								        <option value="Belarus">Belarus</option>
								        <option value="Belgium">Belgium</option>
								        <option value="Belize">Belize</option>
								        <option value="Benin">Benin</option>
								        <option value="Bermuda">Bermuda</option>
								        <option value="Bhutan">Bhutan</option>
								        <option value="Bolivia">Bolivia, Plurinational State of</option>
								        <option value="Bonaire">Bonaire, Sint Eustatius and Saba</option>
								        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
								        <option value="Botswana">Botswana</option>
								        <option value="Bouvet">Bouvet Island</option>
								        <option value="British">British</option>
								        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
								        <option value="Brunei">Brunei Darussalam</option>
								        <option value="Bulgaria">Bulgaria</option>
								        <option value="Burkina">Burkina Faso</option>
								        <option value="Burundi">Burundi</option>
								        <option value="Cambodia">Cambodia</option>
								        <option value="Cameroon">Cameroon</option>
								        <option value="Canada">Canada</option>
								        <option value="Cape Verde">Cape Verde</option>
								        <option value="Cayman Islands">Cayman Islands</option>
								        <option value="Central African Republic">Central African Republic</option>
								        <option value="Chad">Chad</option>
								        <option value="Chile">Chile</option>
								        <option value="Christmas">China</option>
								        <option value="Christmas Island">Christmas Island</option>
								        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
								        <option value="Colombia">Colombia</option>
								        <option value="Comoros">Comoros</option>
								        <option value="Congo">Congo</option>
								        <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
								        <option value="Cook Islands">Cook Islands</option>
								        <option value="Costa Rica">Costa Rica</option>
								        <option value="Cod'Ivoire">C𴥠d'Ivoire</option>
								        <option value="Croatia">Croatia</option>
								        <option value="Cuba">Cuba</option>
								        <option value="Cura袯">Cura袯</option>
								        <option value="Cyprus">Cyprus</option>
								        <option value="Czech Republic">Czech Republic</option>
								        <option value="Denmark">Denmark</option>
								        <option value="Djibouti">Djibouti</option>
								        <option value="Dominica">Dominica</option>
								        <option value="Dominican">Dominican Republic</option>
								        <option value="Ecuador">Ecuador</option>
								        <option value="Egypt">Egypt</option>
								        <option value="El Salvador">El Salvador</option>
								        <option value="Equatorial Guinea">Equatorial Guinea</option>
								        <option value="Eritrea">Eritrea</option>
								        <option value="Estonia">Estonia</option>
								        <option value="Ethiopia">Ethiopia</option>
								        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
								        <option value="Faroe Islands">Faroe Islands</option>
								        <option value="Fiji">Fiji</option>
								        <option value="Finland">Finland</option>
								        <option value="France">France</option>
								        <option value="French Guiana">French Guiana</option>
								        <option value="French Polynesia">French Polynesia</option>
								        <option value="French Southern Territories</">French Southern Territories</option>
								        <option value="Gabon">Gabon</option>
								        <option value="Gambia">Gambia</option>
								        <option value="Georgia">Georgia</option>
								        <option value="Germany">Germany</option>
								        <option value="Ghana">Ghana</option>
								        <option value="Gibraltar">Gibraltar</option>
								        <option value="Greece">Greece</option>
								        <option value="Greenland">Greenland</option>
								        <option value="Grenada">Grenada</option>
								        <option value="Guadeloupe">Guadeloupe</option>
								        <option value="Guam">Guam</option>
								        <option value="Guatemala">Guatemala</option>
								        <option value="Guernsey">Guernsey</option>
								        <option value="Guinea">Guinea</option>
								        <option value="Guinea-Bissau">Guinea-Bissau</option>
								        <option value="Guyana">Guyana</option>
								        <option value="Haiti">Haiti</option>
								        <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
								        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
								        <option value="Honduras">Honduras</option>
								        <option value="Hong Kong">Hong Kong</option>
								        <option value="Hungary">Hungary</option>
								        <option value="Iceland">Iceland</option>
								        <option value="India">India</option>
								        <option value="Indonesia">Indonesia</option>
								        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
								        <option value="Iraq">Iraq</option>
								        <option value="Ireland">Ireland</option>
								        <option value="Isle of Man">Isle of Man</option>
								        <option value="Italy">Italy</option>
								        <option value="Jamaica">Jamaica</option>
								        <option value="Japan">Japan</option>
								        <option value="Jersey">Jersey</option>
								        <option value="Jordan">Jordan</option>
								        <option value="Kazakhstan">Kazakhstan</option>
								        <option value="Kenya">Kenya</option>
								        <option value="Kiribati">Kiribati</option>
								        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
								        <option value="Korea, Republic of">Korea, Republic of</option>
								        <option value="Kuwait">Kuwait</option>
								        <option value="Kyrgyzstan">Kyrgyzstan</option>
								        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
								        <option value="Latvia">Latvia</option>
								        <option value="Lebanon">Lebanon</option>
								        <option value="Lesotho">Lesotho</option>
								        <option value="Liberia">Liberia</option>
								        <option value="Libya">Libya</option>
								        <option value="Liechtenstein">Liechtenstein</option>
								        <option value="Lithuania">Lithuania</option>
								        <option value="Luxembourg">Luxembourg</option>
								        <option value="Macao">Macao</option>
								        <option value="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option>
								        <option value="Madagascar">Madagascar</option>
								        <option value="Malawi">Malawi</option>
								        <option value="Malaysia">Malaysia</option>
								        <option value="Maldives">Maldives</option>
								        <option value="Mali">Mali</option>
								        <option value="Malta">Malta</option>
								        <option value="Marshall">Marshall Islands</option>
								        <option value="Martinique">Martinique</option>
								        <option value="Mauritania">Mauritania</option>
								        <option value="Mauritius">Mauritius</option>
								        <option value="Mayotte">Mayotte</option>
								        <option value="Mexico">Mexico</option>
								        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
								        <option value="Moldova, Republic of">Moldova, Republic of</option>
								        <option value="Monaco">Monaco</option>
								        <option value="Mongolia">Mongolia</option>
								        <option value="Montenegro">Montenegro</option>
								        <option value="Montserrat">Montserrat</option>
								        <option value="Morocco">Morocco</option>
								        <option value="Mozambique">Mozambique</option>
								        <option value="Myanmar">Myanmar</option>
								        <option value="Namibia">Namibia</option>
								        <option value="Nauru">Nauru</option>
								        <option value="Nepal">Nepal</option>
								        <option value="Netherlands">Netherlands</option>
								        <option value="New Caledonia">New Caledonia</option>
								        <option value="New Zealand">New Zealand</option>
								        <option value="Nicaragua">Nicaragua</option>
								        <option value="Niger">Niger</option>
								        <option value="Nigeria">Nigeria</option>
								        <option value="Niue">Niue</option>
								        <option value="Norfolk Island">Norfolk Island</option>
								        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
								        <option value="Norway">Norway</option>
								        <option value="Oman">Oman</option>
								        <option value="Pakistan">Pakistan</option>
								        <option value="Palau">Palau</option>
								        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
								        <option value="Panama">Panama</option>
								        <option value="Papua New Guinea">Papua New Guinea</option>
								        <option value="Paraguay">Paraguay</option>
								        <option value="Peru">Peru</option>
								        <option value="Philippines">Philippines</option>
								        <option value="Pitcairn">Pitcairn</option>
								        <option value="Poland">Poland</option>
								        <option value="Portugal">Portugal</option>
								        <option value="Puerto Rico">Puerto Rico</option>
								        <option value="Qatar">Qatar</option>
								        <option value="R궮ion">R궮ion</option>
								        <option value="Romania">Romania</option>
								        <option value="Russian Federation">Russian Federation</option>
								        <option value="Rwanda">Rwanda</option>
								        <option value="Saint Barthꭥmy">Saint Barthꭥmy</option>
								        <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
								        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
								        <option value="Saint Lucia">Saint Lucia</option>
								        <option value="Saint Martin (French part)">Saint Martin (French part)</option>
								        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
								        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
								        <option value="Samoa">Samoa</option>
								        <option value="San Marino">San Marino</option>
								        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
								        <option value="Saudi Arabia">Saudi Arabia</option>
								        <option value="Senegal">Senegal</option>
								        <option value="Serbia">Serbia</option>
								        <option value="Seychelles">Seychelles</option>
								        <option value="Sierra Leone">Sierra Leone</option>
								        <option value="Singapore">Singapore</option>
								        <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
								        <option value="Slovakia">Slovakia</option>
								        <option value="Slovenia">Slovenia</option>
								        <option value="Solomon Islands">Solomon Islands</option>
								        <option value="Somalia">Somalia</option>
								        <option value="South Africa">South Africa</option>
								        <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
								        <option value="South Sudan">South Sudan</option>
								        <option value="Spain">Spain</option>
								        <option value="Sri Lanka">Sri Lanka</option>
								        <option value="Sudan">Sudan</option>
								        <option value="Suriname">Suriname</option>
								        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
								        <option value="Swaziland">Swaziland</option>
								        <option value="Sweden">Sweden</option>
								        <option value="Switzerland">Switzerland</option>
								        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
								        <option value="Taiwan">Taiwan, Province of China</option>
								        <option value="Tajikistan">Tajikistan</option>
								        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
								        <option value="Thailand">Thailand</option>
								        <option value="Timor-Leste">Timor-Leste</option>
								        <option value="Togo">Togo</option>
								        <option value="Tokelau">Tokelau</option>
								        <option value="Tonga">Tonga</option>
								        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
								        <option value="Tunisia">Tunisia</option>
								        <option value="Turkey">Turkey</option>
								        <option value="Turkmenistan">Turkmenistan</option>
								        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
								        <option value="Tuvalu">Tuvalu</option>
								        <option value="Uganda">Uganda</option>
								        <option value="Ukraine">Ukraine</option>
								        <option value="United Arab Emirates">United Arab Emirates</option>
								        <option value="United Kingdom">United Kingdom</option>
								        <option value="United States">United States</option>
								        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
								        <option value="Uruguay">Uruguay</option>
								        <option value="Uzbekistan">Uzbekistan</option>
								        <option value="Vanuatu">Vanuatu</option>
								        <option value="Venezuela">Venezuela, Bolivarian Republic of</option>
								        <option value="VietNam">Viet Nam</option>
								        <option value="Virgin Islands, British">Virgin Islands, British</option>
								        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
								        <option value="Wallis and Futuna">Wallis and Futuna</option>
								        <option value="Western Sahara">Western Sahara</option>
								        <option value="Yemen">Yemen</option>
								        <option value="Zambia">Zambia</option>
								        <option value="Zimbabwe">Zimbabwe</option>
								    </select>
								</div>
								

								<div class="field half first">
									<label for="name">City</label>
									<input type="text" name="name" id="name" />
								</div>

								<div class="field half">
									<label for="name">Governance</label>
									<input type="text" name="name" id="name" />
								</div>

								<div class="field half first">
									<label for="name">Address</label>
									<input type="text" name="name" id="name" />
								</div>


								<div class="field half">
									<label for="email">Email</label>
									<input type="text" name="email" id="email" />
								</div>


								<div class="field half first">
									<label for="name">Date of birth</label>
									<input type="text" name="name" id="name" />
								</div>

								<div class="field half">
									<label for="name">Martial state</label>
									<input type="text" name="name" id="name" />
								</div>

								<div class="field half first">
									<label for="name">Military status</label>
									<input type="text" name="name" id="name" />
								</div>

								<div class="field half">
									<label for="name">Address</label>
									<input type="text" name="name" id="name" />
								</div>


								<ul class="actions">
									<li><a href="" class="button submit">Save</a></li>
								</ul>
						</form>
						</div>
					</section>


					<!-- Language -->
					<section id="language" class="wrapper style1 fullscreen fade-up" >
						<div class="inner">
							<h1>Language</h1>
							<form method="post" action="#">
										
								<div class="field">
									<label for="name">language</label>
									<input type="text" name="name" id="name" />
								</div>

								<div class="field">
										<label for="name">Level</label>
										<select name="degree" id="degree">
										<option value="degree" selected>Degree</option>
										<option value="associate">associate</option>
										<option value="bachelor">bachelor</option>
										<option value="master" >master</option>
										<option value="doctoral" >doctoral</option>
										</select>
									</div>

								<ul class="actions">
									<li><a href="" class="button submit">Save</a></li>

								</ul>
							</form>


							<table class="table">
									<thead>
									  <tr>
										<th scope="col">Name</th>
										<th scope="col">Level</th>
										<th scope="col">Edit</th>
										<th scope="col">Delete</th>

									  </tr>
									</thead>
									<tbody>
									  <tr>
										<td>Mark</td>
										<td>Otto</td>
										<td><a href="" class="button submit">Edit</a></td>
										<td><a href="" class="button submit">Delete</a></td>									</td>
									  </tr>
									 

									</tbody>
								  </table>


						</div>
					</section>




					<!-- Education -->
					<section id="education" class="wrapper style1 fullscreen fade-up" >
						<div class="inner">
							<h1>Education</h1>
							<form method="post" action="#">
										
								<div class="field half first">
									<label for="name">High School</label>
									<input type="text" name="name" id="name" />
								</div>

								<div class="field half">
									<label for="name">Universty</label>
									<input type="text" name="name" id="name" />
								</div>

								<div class="field half first">
									<label for="name">Faculty</label>
									<input type="text" name="name" id="name" />
								</div>

								<div class="field half">
									<label for="name">GPA</label>
									<input type="text" name="name" id="name" />
								</div>

								<div class="field">
										<label for="name">Level</label>
										<select name="Level" id="Level">
										<option value="Level" selected>Level</option>
										<option value="Beginner">Beginner</option>
										<option value="Elementary">Elementary</option>
										<option value="Intermediate">Intermediate</option>
										<option value="Advanced">Advanced</option>
										<option value="Advanced">native</option>
										</select>
									</div>

									<ul class="actions">

									<a href="" class="button submit">Save</a>
								</ul>
							</form>

							
						</div>
					</section>



					<!-- work skills -->
					<section id="work" class="wrapper style1 fullscreen fade-up" >
						<div class="inner">
							<h1>Work Skills</h1>
							<form method="post" action="#">
										
								<div class="field half first">
									<label for="name">Skill Name</label>
									<input type="text" name="name" id="name" />
								</div>

								<div class="field half">
									<label for="name">Type(ex:programming language)</label>
									<input type="text" name="name" id="name" />
								</div>


								<div class="field">
					                <label for="name">Level</label>
							        <select name="Level" id="Level">
							        <option value="Level" selected>Level</option>
							        <option value="Beginner">Beginner</option>
							        <option value="Elementary">Elementary</option>
							        <option value="Intermediate">Intermediate</option>
							        <option value="Advanced">Advanced</option>
							        <option value="Advanced">Proficiency</option>
							        </select>
							    </div>
								<ul class="actions">
									<li><a href="" class="button submit">Save</a></li>
								</ul>
							</form>

							<table class="table">
									<thead>
									  <tr>
										<th scope="col">Name</th>
										<th scope="col">Level</th>
										<th scope="col">Type</th>
										<th scope="col">Edit</th>
										<th scope="col">Delete</th>

									  </tr>
									</thead>
									<tbody>
									  <tr>
										<td>Mark</td>
										<td>Otto</td>
										<td>Type</td>

										<td><a href="" class="button submit">Edit</a></td>
										<td><a href="" class="button submit">Delete</a></td>									</td>
									  </tr>
									 

									</tbody>
								  </table>
						</div>
					</section>


					<!-- Personal skills -->
					<section id="pskill" class="wrapper style1 fullscreen fade-up" >
						<div class="inner">
							<h1>Personal Skills</h1>
							<form method="post" action="#">
										
								<div class="field">
									<label for="name">Name</label>
									<input type="text" name="name" id="name" />
								</div>

							<div class="field">
									<label for="message">Description</label>
									<textarea name="message" id="message" rows="5"></textarea>
							</div>

								<ul class="actions">
									<li><a href="" class="button submit">Save</a></li>
								</ul>
							</form>

							<table class="table">
									<thead>
									  <tr>
										<th scope="col">Name</th>
										<th scope="col">Description</th>
										<th scope="col">Edit</th>
										<th scope="col">Delete</th>

									  </tr>
									</thead>
									<tbody>
									  <tr>
										<td>Mark</td>
										<td>Otto</td>
										<td><a href="" class="button submit">Edit</a></td>
										<td><a href="" class="button submit">Delete</a></td>									</td>
									  </tr>
									 

									</tbody>
								  </table>
						</div>
					</section>


					<!-- Experince -->
					<section id="experince" class="wrapper style1 fullscreen fade-up" >
						<div class="inner">
							<h1>Experince</h1>
							<form method="post" action="#">
										
								<div class="field half first">
									<label for="name">Comany Name</label>
									<input type="text" name="name" id="name" />
								</div>

								<div class="field half">
									<label for="name">Job Title</label>
									<input type="text" name="name" id="name" />
								</div>

								<div class="field half first">
									<label for="name">from</label>
									<input type="text" name="name" id="name" />
								</div>

								<div class="field half">
									<label for="name">To</label>
									<input type="text" name="name" id="name" />
								</div>

								
							    <div class="field">
									<label for="message">Description</label>
									<textarea name="message" id="message" rows="5"></textarea>
								</div>
								<ul class="actions">
									<li><a href="" class="button submit">Save</a></li>

								</ul>

							</form>

							<table class="table">
									<thead>
									  <tr>
										<th scope="col">Company Name</th>
										<th scope="col">Job Title</th>
										<th scope="col">From</th>
										<th scope="col">To</th>
										<th scope="col">Description</th>
										<th scope="col">Edit</th>
										<th scope="col">Delete</th>

									  </tr>
									</thead>
									<tbody>
									  <tr>
										<td>Mark</td>
										<td>Otto</td>
										<td>Mark</td>
										<td>Otto</td>
										<td>Mark</td>
										<td><a href="" class="button submit">Edit</a></td>
										<td><a href="" class="button submit">Delete</a></td>									</td>
									  </tr>
									 
									</tbody>
								  </table>
						</div>
					</section>



					<!--projects -->
					<section id="project" class="wrapper style1 fullscreen fade-up" >
						<div class="inner">
							<h1>projects</h1>
							<form method="post" action="#">
										
								<div class="field">
									<label for="name">Name</label>
									<input type="text" name="name" id="name" />
								</div>

								  <div class="field">
									<label for="message">Tools</label>
									<textarea name="message" id="message" rows="5"></textarea>
								</div>

								  <div class="field">
									<label for="message">Description</label>
									<textarea name="message" id="message" rows="5"></textarea>
								</div>

								
								<ul class="actions">
									<li><a href="" class="button submit">Save</a></li>
								</ul>
							</form>
							<table class="table">
									<thead>
									  <tr>
										<th scope="col">Name</th>
										<th scope="col">tools</th>
										<th scope="col">Description</th>
										<th scope="col">Edit</th>
										<th scope="col">Delete</th>

									  </tr>
									</thead>
									<tbody>
									  <tr>
										<td>Mark</td>
										<td>Otto</td>
										<td>Mark</td>
										<td><a href="" class="button submit">Edit</a></td>
										<td><a href="" class="button submit">Delete</a></td>									</td>
									  </tr>
									 
									</tbody>
								  </table>
						</div>
					</section>




					<!-- certificate -->
					<section id="certificate" class="wrapper style1 fullscreen fade-up" >
						<div class="inner">
							<h1>Certificats</h1>
							<form method="post" action="#">
										
								<div class="field half first">
									<label for="name">Title</label>
									<input type="text" name="name" id="name" />
								</div>

								<div class="field half">
									<label for="name">Provider</label>
									<input type="text" name="name" id="name" />
								</div>

								<div class="field half first">
									<label for="name">Field</label>
									<input type="text" name="name" id="name" />
								</div>

								<div class="field half">
									<label for="name">Date</label>
									<input type="text" name="name" id="name" />
								</div>

								<div class="field">
									<label for="message">Description</label>
									<textarea name="message" id="message" rows="5"></textarea>
								</div>

								<ul class="actions">
									<li><a href="" class="button submit">Save</a></li>
								</ul>
							</form>

							<table class="table">
									<thead>
									  <tr>
										<th scope="col">Title</th>
										<th scope="col">Provider</th>
										<th scope="col">Field</th>
										<th scope="col">Date</th>
										<th scope="col">Description</th>
										<th scope="col">Edit</th>
										<th scope="col">Delete</th>

									  </tr>
									</thead>
									<tbody>
									  <tr>
										<td>Mark</td>
										<td>Otto</td>
										<td>Mark</td>
										<td>Otto</td>
										<td>Mark</td>
										<td><a href="" class="button submit">Edit</a></td>
										<td><a href="" class="button submit">Delete</a></td>									</td>
									  </tr>
									 
									</tbody>
								  </table>
						</div>
					</section>

						<!-- social links -->
					<section id="social" class="wrapper style1 fullscreen fade-up" >
						<div class="inner">
							<h1>Social Links</h1>
							<form method="post" action="#">
										
								<div class="field">
									<label for="name">Twitter</label>
									<input type="text" name="name" id="name" />
								</div>

								<div class="field">
									<label for="name">Facebook</label>
									<input type="text" name="name" id="name" />
								</div>

								<div class="field">
									<label for="name">LinkedIn</label>
									<input type="text" name="name" id="name" />
								</div>

								<div class="field">
									<label for="name">Github</label>
									<input type="text" name="name" id="name" />
								</div>

								<div class="field">
									<label for="name">Google</label>
									<input type="text" name="name" id="name" />
								</div>

								<ul class="actions">
									<li><a href="" class="button submit">Save</a></li>
								</ul>
							</form>
						</div>
					</section>



		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>by: <a href="https://www.linkedin.com/in/badr-mohamed-521bb4145/">Badr Mohammed</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
        <script type="text/javascript" src="{{ asset('ui/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('ui/js/jquery.scrollex.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('ui/js/jquery.scrollex.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('ui/js/jquery.scrolly.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('ui/js/skel.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('ui/js/util.js') }}"></script>
		<script type="text/javascript" src="{{ asset('ui/js/main.js') }}"></script>
		

	</body>
</html>