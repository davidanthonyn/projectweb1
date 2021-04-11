<?php header("Content-type: text/css; charset: UTF-8"); ?>
<?php
include "sigadgetconnection.php";

$sql = mysqli_query($conn, "SELECT Filename FROM image WHERE Filename='bg.jpg'");
$sqltwo = mysqli_query($conn, "SELECT Filename FROM image WHERE Filename='smartphone.png'");

while($row=mysqli_fetch_array($sql)) {
		while($rowtwo=mysqli_fetch_array($sqltwo)) {

?>

body {
		font-family: 'Roboto', sans-serif;
  background: url(image/<?php echo $row['Filename']; ?>);
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden;
	}
	
		.logo{
		background-image: url(image/<?php echo $rowtwo['Filename']; ?>);
		width: 40px;
		margin: 4px 14px;
		height: 40px;
		background-size: 40px 40px;
		border: solid 2px #666;
		border-radius: 50px;
		background-color: #fff;
		href: url(home.php);
		}

			.navbar-left{
				float:left;
			}

			.navbar{width: 100%;
				height:51px;
				background:#000000;
			}
 
			.navbar ul{
				float:left;
				margin:0;
				padding:0;
			}

			.navbar li{
				float:left;
				list-style:none;
				margin:0;
				padding:0;
			}

			.navbar li a, .navbar li a:link {
				float: left;
				padding: 17px 12px;
				color: #fff;
				text-decoration: none;
				position: relative;
				font-family: 'Roboto', sans-serif;
				font-size: 14px;
			}

			.navbar li a:hover{
				background: #ddd;
				color: #444;
			}

			.navbar li li a, .navbar li li a:link {
				text-decoration: none;
				font-size: 16px;
				background: #444;
				color: #fff;
				width: 108px;
				padding: 0px 0px 0 12px;
				font-size: 12px;
				line-height: 35px;
			}

			.navbar li li a:hover{
				background: #ddd;
				color: #444
			}

			.navbar li ul{
				z-index:9999;
				position:absolute;
				left:-999em;
				height:auto;
				width:108px;
				margin-top:50px;
				border:1px solid #666;
			}

			.navbar li:hover ul,
			.navbar li li:hover ul,
			.navbar li li li:hover ul{left:auto;}
			.navbar li:hover{position:auto;}

			li a#dropdown{
				width: 100%;
				height: 50%;
				background-color: #9BC7D3;
				padding-left :5px;
			}

					* {box-sizing: border-box}
					body {font-family: 'Roboto', sans-serif; margin:0;}
					.mySlides {display: none}
					img {vertical-align: middle;}

					/* Slideshow container */
					.slideshow-container {
					  position: relative;
					  margin: auto;
					}

					/* Next & previous buttons */
					.prev, .next {
					  cursor: pointer;
					  position: absolute;
					  top: 50%;
					  width: auto;
					  padding: 16px;
					  margin-top: -22px;
					  color: white;
					  font-weight: bold;
					  font-size: 18px;
					  transition: 0.6s ease;
					  border-radius: 0 3px 3px 0;
					  user-select: none;
					}

					/* Position the "next button" to the right */
					.next {
					  right: 0;
					  border-radius: 3px 0 0 3px;
					}

					/* On hover, add a black background color with a little bit see-through */
					.prev:hover, .next:hover {
					  background-color: rgba(0,0,0,0.8);
					}

					/* Caption text */
					.text {
					  color: #f2f2f2;
					  font-size: 15px;
					  padding: 8px 12px;
					  position: absolute;
					  bottom: 8px;
					  width: 100%;
					  text-align: center;
					}

					/* Number text (1/3 etc) */
					.numbertext {
					  color: #f2f2f2;
					  font-size: 12px;
					  padding: 8px 12px;
					  position: absolute;
					  top: 0;
					}

					/* The dots/bullets/indicators */
					.dot {
					  cursor: pointer;
					  height: 15px;
					  width: 15px;
					  margin: 0 2px;
					  background-color: #bbb;
					  border-radius: 50%;
					  display: inline-block;
					  transition: background-color 0.6s ease;
					}

					.active, .dot:hover {
					  background-color: #717171;
					}

					/* Fading animation */
					.fade {
					  -webkit-animation-name: fade;
					  -webkit-animation-duration: 1.5s;
					  animation-name: fade;
					  animation-duration: 1.5s;
					}

					@-webkit-keyframes fade {
					  from {opacity: .4} 
					  to {opacity: 1}
					}

					@keyframes fade {
					  from {opacity: .4} 
					  to {opacity: 1}
					}

					/* On smaller screens, decrease text size */
					

									.experiencedays {
									position: relative;
									  left: 200px;
									}
  
  
															.bottomnav {
															overflow: hidden;
															background-color: #333;
															}


																		.newsletter {
																		  overflow: hidden;
																		  background-color: #333;
																		}

.column {
  float: left;
  width: 33.33%;
  padding: 10px;
}

.column1 {
  float: left;
  width: 25%;
  padding: 10px;
}

.column2 {
  float: left;
  width: 100%;
  padding: 10px;
}

.column3 {
  float: left;
  width: 15%;
  padding: 40px 10px 0 10px;
}

.column4 {
  float: left;
  width: 75%;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.menu-icon {
	width: 50px;
	margin-left: 10px;
	display: none;
}

@media only screen and (max-width: 800px) {

	nav ul{
	position: absolute;
	top: 70px;
	left: 0;
	background: #333;
	width: 100%;
	overflow: hidden;
	transition: max-height 0.5s;
	}
	
	nav ul li{
	display: block;
	margin-right: 50px;
	margin-top: 10px;
	margin-bottom: 10px;
	
	}
	
	nav ul li a{
	color: #fff;
	}
	
	.menu-icon {
	display: block;
	cursor: pointer;
	}
					  .prev, .next,.text {font-size: 22px}
					}

																@media only screen and (max-width: 600px) {
																	.row {
																	 text-align: center;
																	 
																	}
																					  .prev, .next,.text {font-size: 11px}
																					}
																					

.text {
					  color: #f2f2f2;
					  font-size: 15px;
					  padding: 8px 12px;
					  position: absolute;
					  bottom: 8px;
					  width: 100%;
					  text-align: center;
					}

									.experience {
                    width: 100%;
                    margin: 0 auto;
                    padding: 2px 15px;
                    background: #666565;
                    color: white;
                    height: 248px;
									}
  
  
															.bottomnav {
															overflow: hidden;
															background-color: #333;
															}


																		.newsletter {
																		  overflow: hidden;
																		  background-color: #333;
																		}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.row {
display: flex;
align-items: center;
flex-wrap: wrap;
justify-content: space-around;
} 

.categories {
margin: 5px 0;
}

.small-container {
max-width: 60%;
margin: auto;
}

.col-4 {
flex-basis: 20%;
min-width: 100px;
margin-left: 5%;
margin-bottom: 20px;
transition: transform 0.5s;
border-style: ridge;
}

.col-4 img {
	width: 100%;
}

h4 {
color: #555;
font-weight: normal;
}

.col-4 p {
	font-size: 14px;
}

.col-4:hover {
	transform: translateY(-5px);
}

.btn {
  display:block;
  height: 50px;
  width: 50px;
  border-radius: 50%;
  border: 1px;
  background-color: red;
  display: inline;
}

	
	/*---single product details------*/
	
	.single-product {
		margin-top: 80px;
	}
	
		.single-product .col-2 img{
			padding: 0;
		}

			.single-product .col-2{
				padding: 20px;
			}
			
				.single-product h4{
					margin: 20px 0;
					font-size: 22px;
					font-weight: bold;
				}
				
					.single-product select{
						display: block;
						padding: 10px;
						margin-top: 20px;
					}
					
						.single-product input{
							width: 50px;
							height: 40px;
							padding-left: 10px;
							font-size: 20px;
							margin-right: 10px;
							border: 1px solid #ff523b;
						}
						
							input:focus{
								outline: none;
							}
							
								.single-product .fa {
									color: #ff523b;
									margin-left: 10px;
								}
							
									.small-img-row {
										display: flex;
										justify-content: space-between;
									}
									
										.small-img-col {
											flex-basis: 24%
											cursor: pointer;
										}
										
									.button {
                                      padding: 1px 14px;
                                      text-align: center;
                                      text-decoration: none;
                                      display: inline-block;
                                      cursor: pointer;
                                      background-color: #333;
                                      color: white;
                                      border: 2px solid #FFFFFF;
                                    }
									
									.button:hover{background-color: #fff; color:#333;}
									
									<?php
		}
	}

$conn->close();

?>