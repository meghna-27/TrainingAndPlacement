


<!DOCTYPE html>
<html lang="en">
<head>
	<style>
	.banner 
	{
	    position: relative;
	    height: 600px;
	    background-image: url("i1.jpg");  
	    background-size: cover;
	    display: flex;
	    justify-content: center;
	    align-items: center;
	    text-align: center;
	    padding-left: 550px;
	    padding-right: 95px;
	    font-size: 30px;
    }

	.row 
	{
		padding-left: 75px;
		margin: 0 -5px;
	}
	
	.column 
	{
	  	float: left;
	  	width: 30%;
	  	padding: 0 10px;
	}

	.card 
	{
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
		padding: 16px;
		text-align: center;
		background-color: #f1f1f1;
	}
	.row:after 
	{
	    content: "";
	    display: table;
	    clear: both;
	}

	
	/* Responsive columns - one column layout (vertical) on small screens */
	@media screen and (max-width: 850px) 
	{
		.column 
		{
		    width: 100%;
		    display: block;
		    margin-bottom: 20px;
		    padding: 0 0px;
	    }
	
		*{
	 	 box-sizing: border-box;
		}

		.card 
		{
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
		padding: 0px;
		text-align: center;
		display: block;
		}

		.row 
		{
			padding-left: 0;
			padding-right: 10px;

			margin: 0 -5px;
		}
		
		.banner 
		{
	      position: relative;
	      height: 600px;
	      background-image: url("i1.jpg");  
	      background-size: cover;
	      
	      justify-content: center;
	      align-items: center;
	      text-align: center;
	      padding-left: 0px;
	      padding-right: 0px;
	      color:white;
	      
    	}
		
		
	}
	
	/*for navigation bar*/
	body
	{
	    padding: 0;
	    margin: 0;
	}

	.container
	{
	    position: relative;
	}

	nav
	{
	    position: fixed;
	    z-index: 10;
	    left:0;
	    right: 0;
	    top:0;
	    height: 100px;
	    background-color: #36486c;
	    padding: 0 5%;
	}

	nav .logo
	{
	    float: left;
	    width: 40%;
	    height: 100%;
	    display: flex;
	    align-items: center;
	    font-size: 24px;
	    color: #ffffff;
	}

	nav .links
	{
	    float : right;
	    padding: 0;
	    margin: 0;
	    width : 60%;
	    height: 100%;
	    display: flex;
	    justify-content: space-around;
	}

	nav .links li
	{
	    list-style: none;
	}

	nav .links a
	{
	    display: block;
	    padding: 3px;
	    font-size: 80%;
	    font-weight: bold;
	    color: #ffffff;
	    text-decoration: none;
	    text-align: center;
	    line-height: 90px;
	    text-transform: uppercase;
	}

	nav .links a:hover,
	nav .links a.active
	{
	    color: #4eec0f;
	}

	#nav-toggle
	{
	    position: absolute;
	    top : -100px;
	}

	nav .icon-burger
	{
	    position: absolute;
	    right: 5%;
	    top: 50%;
	    transform: translate(-50%);
	    display: none;
	}

	nav .icon-burger .line
	{
	    width: 30px;
	    height: 5px;
	    background-color: #ffffff;
	    margin: 5px;
	    border-radius: 3px;
	}

	@media screen and (max-width: 879px) 
	{
	    nav .logo
	    {
	        float: none;
	        width: auto;
	        justify-content: center;
	    }
    
    	nav .links
    	{
	        float: none;
	        position: fixed;
	        z-index: 9;
	        left: 0;
	        right: 0;
	        top: 100px;
	        bottom: 100%;
	        width: auto;
	        height: auto;
	        flex-direction: column;
	        justify-content: space-evenly;
	        background-color: rgba(0,0,0,.8);
	        overflow: hidden;
	        transition: all .5s ease-in-out;
    	}

	    nav .links a 
	    {
	        font-size: 20px;
	    }

	    nav .icon-burger
	    {
	        display: block;
	    }

	    nav :checked ~ .links 
	    {
	        bottom: 0;
	    }

	    nav :checked ~ .icon-burger .line:nth-child(1)
	    {
	        transform: translateY(10px) rotate(225deg);
	    }

	    nav :checked ~ .icon-burger .line:nth-child(3)
	    {
	        transform: translateY(-10px) rotate(-225deg);
	    }

	    nav :checked ~ .icon-burger .line:nth-child(2)
	    {
	        opacity: 0;
	    }
	} 	 	
	</style>
</head>

<!--for navigation bar -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apply Now</title>
    <!--<link rel="Stylesheet" href="css/stylenew.css">-->
</head>
<body>
    <nav>
        <input id="nav-toggle" type="checkbox">
	    <div class="logo"><strong>Training &<strong> Placement</strong></div>
	    <ul class="links">
	        <li><a href="index.html">Home</a></li>
	        <li><a href="trainings.php" >Training</a></li>
	        <li><a href="Our_Recruiters.php">Our Recruiters</a></li>
	        <li><a href="ApplyNow.php" class="active">Apply Now</a></li>
	        <li><a href="Login.php">Login</a></li>
	        <li><a href="Contact-Us.php">Contact Us</a></li>
	    </ul>
    <label for="nav-toggle" class="icon-burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </label>
    </nav>

<!-- -->
	
<!--<head>
		<div style=" background-repeat: no-repeat;background-size: cover;height: 600px;width: 1000px;background-image: url('i1.jpg'); vertical-align:middle;text-align:center;margin:30px 165px">

		<h1 style= "color:black;font-size:40px;font-family:verdana;vertical-align:middle;margin:50px 80px;padding-left:300px;padding-top: 150px">
					CHOOSE THE PERFECT JOB!</h1>
				
		<p style="color:darkslategray;font-size:20px;font-family:Charcoal; padding-left:360px;padding-right:30px;margin:40px 100px">			
		Applying to the openings is now a question of few fingertips. Move on to the Apply page to get started right now.
		</p>
		</div>
</head>
-->
	<div class="banner">
	 	<h1>CHOOSE THE PERFECT JOB!</h1>
	 	<!--
          <h1 style= "color:black;font-size:40px;font-family:verdana;vertical-align:middle;margin:50px 80px;padding-left:300px;padding-top: 150px">
					CHOOSE THE PERFECT JOB!</h1>-->
				
		<!--<p style="color:darkslategray;font-size:20px;font-family:Charcoal; padding-left:360px;padding-right:30px;margin:40px 100px">		
		<br>
		<p>Applying to the openings is now a question of few fingertips. Move on to the Apply page to get started right now.
		</p>-->
    </div>

        <br><br><br><br>

		<div style="background-color:slategray;">

			<br><br>
			
			<h2 style= "color:white;font-size:20px;font-family:verdana;text-align:center;vertical-align:middle">
					APPLY FOR YOUR DREAM JOB</h>
			</h2>

			<br>

			<div class="row"  >
  				
  				<div class="column" >
				    	<div class="card" style="background-color:linen" >
				    		
				    		<div class="container" >
							<p style="color:black;font-size:30px;font-family:verdana;text-align:center;vertical-align:middle"><b>Infosys</b></p>
							    
								<div class="card-header" style="color:black;font-size:20px;font-family:verdana;text-align:center;vertical-align:middle"><center>Pune</center>
								
								<button onclick="myFunction()" style=" border: none;color: white;padding: 15px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 5px 50px;cursor: pointer;background-color: #000000">Apply
								</button>

							    <script>
								function myFunction() {
								window.location.href = "applicationform.php";  
								}
								</script>
								
								<br>

								<h4>Click Below To Know More Details</h4>

								<button onclick="myFunction1()" style=" border: none;color: black;padding: 15px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 5px 50px;cursor: pointer;background-color: lightslategray">Know More
								</button>

							    <script>
								function myFunction1() {
								window.location.href = "https://www.infosys.com/";  
								}
								</script></div>

				    		</div>
						</div>
				</div>

			  	<div class="column">
				    	<div class="card" style="background-color:thistle">
				    		<div class="container">
							<p style="color:black;font-size:30px;font-family:verdana;text-align:center;vertical-align:middle"><b>Mercedes-Benz</b></p>
							    
								<div class="card-header" style="color:black;font-size:20px;font-family:verdana;text-align:center;vertical-align:middle"><center>Pune</center>

							    <button onclick="myFunction2()" style=" border: none;color: white;padding: 15px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 5px 50px;cursor: pointer;background-color: #000000">Apply
								</button>

							    <script>
								function myFunction2() {
								window.location.href = "applicationform.php";  
								}
								</script>
								
								<br>

								<h4>Click Below To Know More Details</h4>

								<button onclick="myFunction3()" style=" border: none;color: black;padding: 15px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 5px 50px;cursor: pointer;background-color: lightslategray">Know More
								</button>

							    <script>
								function myFunction3() {
								window.location.href = "https://www.mercedes-benz.com/en/";  
								}
								</script></div>
				    		</div>
				    	</div>
				</div>

			 	<div class="column">
				    	<div class="card" style="background-color:lightgray">
				    		<div class="container">
							<p style="color:black;font-size:30px;font-family:verdana;text-align:center;vertical-align:middle"><b>Siemens</b></p>
							    
								<div class="card-header" style="color:black;font-size:20px;font-family:verdana;text-align:center;vertical-align:middle"><center>Nashik</center>

							    <button onclick="myFunction4()" style=" border: none;color: white;padding: 15px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 5px 50px;cursor: pointer;background-color: #000000">Apply
								</button>

							    <script>
								function myFunction4() {
								window.location.href = "applicationform.php";  
								}
								</script>
								
								<br>

								<h4>Click Below To Know More Details</h4>

								<button onclick="myFunction5()" style=" border: none;color: black;padding: 15px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 5px 50px;cursor: pointer;background-color: lightslategray">Know More
								</button>

							    <script>
								function myFunction5() {
								window.location.href = "https://www.siemens.com/";  
								}
								</script></div>
				    		</div>
				    	</div>
				  	</div>

				</div>	

		<br><br><br>
			
		<div class="row"  >
  			
  			<div class="column">
			    	<div class="card" style="background-color:beige">
			    		<div class="container">
						    <p style="color:black;font-size:30px;font-family:verdana;text-align:center;vertical-align:middle"><b>Honeywell</b></p>
							    
								<p style="color:black;font-size:20px;font-family:verdana;text-align:center;vertical-align:middle">Mumbai</p>

						    	<button onclick="myFunction6()" style=" border: none;color: white;padding: 15px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 5px 50px;cursor: pointer;background-color: #000000">Apply
								</button>

							    <script>
								function myFunction6() {
								window.location.href = "applicationform.php";  
								}
								</script>
								
								<br>

								<h4>Click Below To Know More Details</h4>

								<button onclick="myFunction7()" style=" border: none;color: black;padding: 15px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 5px 50px;cursor: pointer;background-color: lightslategray">Know More
								</button>

							    <script>
								function myFunction7() {
								window.location.href = "https://www.honeywell.com/";  
								}
								</script>
			    		</div>
			  		</div>
			</div>

		  	<div class="column">
			    	<div class="card" style="background-color:antiquewhite">
			    		<div class="container" >
						    <p style="color:black;font-size:30px;font-family:verdana;text-align:center;vertical-align:middle"><b>TCS</b></p>
							    
							<p style="color:black;font-size:20px;font-family:verdana;text-align:center;vertical-align:middle">Pune</p>

								<button onclick="myFunction8()" style=" border: none;color: white;padding: 15px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 5px 50px;cursor: pointer;background-color: #000000">Apply
								</button>

							    <script>
								function myFunction8() {
								window.location.href ="applicationform.php";  
								}
								</script>
								
								<br>

								<h4>Click Below To Know More Details</h4>

								<button onclick="myFunction9()" style=" border: none;color: black;padding: 15px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 5px 50px;cursor: pointer;background-color: lightslategray">Know More
								</button>

							    <script>
								function myFunction9() {
								window.location.href = "https://www.tcs.com/";  
								}
								</script>
						</div>
			    	</div>
			</div>

		 	<div class="column">
			    	<div class="card" style="background-color:peachpuff">
			    		<div class="container">
						    <p style="color:black;font-size:30px;font-family:verdana;text-align:center;vertical-align:middle"><b>Mahindra</b></p>
							    
							<p style="color:black;font-size:20px;font-family:verdana;text-align:center;vertical-align:middle">Nashik</p>

						    	<button onclick="myFunction10()" style=" border: none;color: white;padding: 15px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 5px 50px;cursor: pointer;background-color: #000000">Apply
								</button>

							    <script>
								function myFunction10() {
								window.location.href = "applicationform.php";  
								}
								</script>
								
								<br>

								<h4>Click Below To Know More Details</h4>

								<button onclick="myFunction11()" style=" border: none;color: black;padding: 15px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 5px 50px;cursor: pointer;background-color: lightslategray">Know More
								</button>

							    <script>
								function myFunction11() {
								window.location.href = "https://www.mahindra.com/";  
								}
								</script>
			    		</div>
			    	</div>
			</div>
		</div>

		<br><br><br>

		<div class="row"  >
  			
  			<div class="column">
			    	<div class="card" style="background-color:pink" >
			    		<div class="container">
						    <p style="color:black;font-size:30px;font-family:verdana;text-align:center;vertical-align:middle"><b>Bajaj</b></p>
							    
							<p style="color:black;font-size:20px;font-family:verdana;text-align:center;vertical-align:middle">Pune</p>

						    	<button onclick="myFunction12()" style=" border: none;color: white;padding: 15px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 5px 50px;cursor: pointer;background-color: #000000">Apply
								</button>

							    <script>
								function myFunction12() {
								window.location.href = "applicationform.php";  
								}
								</script>
								
								<br>

								<h4>Click Below To Know More Details</h4>

								<button onclick="myFunction13()" style=" border: none;color: black;padding: 15px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 5px 50px;cursor: pointer;background-color: lightslategray">Know More
								</button>

							    <script>
								function myFunction13() {
								window.location.href = "https://www.bajajauto.com/";  
								}
								</script>
			    		</div>
			    	</div>
			</div>

		  	<div class="column">
			    	<div class="card" style="background-color:mistyrose">
			    		<div class="container">
						    <p style="color:black;font-size:30px;font-family:verdana;text-align:center;vertical-align:middle"><b>Jio</b></p>
							    
							<p style="color:black;font-size:20px;font-family:verdana;text-align:center;vertical-align:middle">Mumbai</p>

						    	<button onclick="myFunction14()" style=" border: none;color: white;padding: 15px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 5px 50px;cursor: pointer;background-color: #000000">Apply
								</button>

							    <script>
								function myFunction14() {
								window.location.href = "applicationform.php";  
								}
								</script>
								
								<br>

								<h4>Click Below To Know More Details</h4>

								<button onclick="myFunction15()" style=" border: none;color: black;padding: 15px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 5px 50px;cursor: pointer;background-color: lightslategray">Know More
								</button>

							    <script>
								function myFunction15() {
								window.location.href = "https://www.jio.com/";  
								}
								</script>
			    		</div>
			    	</div>
			</div>

		 	<div class="column">
			    	<div class="card" style="background-color:lavenderblush">
			    		<div class="container">
						    <p style="color:black;font-size:30px;font-family:verdana;text-align:center;vertical-align:middle"><b>Bosch</b></p>
							    
							<p style="color:black;font-size:20px;font-family:verdana;text-align:center;vertical-align:middle">Pune</p>

						    	<button onclick="myFunction16()" style=" border: none;color: white;padding: 15px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 5px 50px;cursor: pointer;background-color: #000000">Apply
								</button>

							    <script>
								function myFunction16() {
								window.location.href = "applicationform.php";  
								}
								</script>
								
								<br>

								<h4>Click Below To Know More Details</h4>

								<button onclick="myFunction17()" style=" border: none;color: black;padding: 15px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 5px 50px;cursor: pointer;background-color: lightslategray">Know More
								</button>

							    <script>
								function myFunction17() {
								window.location.href = "https://www.bosch.in/";  
								}
								</script>
			    		</div>
			    	</div>
			</div>
		</div>

	<br><br><br>
		
	</div>
</html>




