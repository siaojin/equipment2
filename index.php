<?php
// Start the session
	session_start();
	
	if(!isset($_SESSION["logged"])||$_SESSION['logged'] == "0")
	{
		// Storing session data
		$_SESSION["username"] = "Guest";
		$_SESSION["logged"] = "0";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="favicon.ico" />
	<title>Introduction to Programming Language Concepts and Paradigms</title>

	<link rel="stylesheet" type="text/css" href="design.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/submit.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body>
<!--nagivation bar-->
<div class ="topnav">
	<!--Put a small image as logo at the top left of the webpage-->
	<a href="#head"><!--redirect the webpage to the top-->
		<img id="logo" src="logo.png" alt="Programming Concepts and Paradigms" height="50" width="50" ALIGN="left" >
	</a>
	<!--if user is logged in, print Hi,'username'!, else print 'Hi, guest' (the username is saved in the cookies)-->
	<a id="username" style="padding-top:20px;"><b>Hi, <?php echo $_SESSION["username"]?>!</b></a>
	<!--navigation link at the right hand side-->
	<div class = "topnav-right">
		<a href="#topic1"><strong>Parallel Paradigm</strong></a>
		<a href="#topic2"><strong>Language Translation Issues</strong></a>
		<a href="#topic3"><strong>Programming Concept</strong></a>
		<a href="#aboutUs"><strong>About Us</strong></a>
		<!--
			This is a login/logout button,
			if user is logged in, he/she choose to logout when he/she clicks the button
				the cookies which save the username will be replaced with Guest
				logout button become login button
			else they will be redirect to a login page/ sign in page
		-->
		<a href="<?php
					if($_SESSION["logged"]=="1")
						echo 'logout.php';
					else
						echo 'logIn.php';
				?>" id="loginBtn"><b>
			<?php
				if($_SESSION["logged"]=="1")
					echo "Logout";
				else
					echo "Login";
			?>
		</b></a>
	</div>
</div>

<!--feedback section-->
<div id="feedback">
	<!--create a feedback header with an id of 'feedbackHeader'-->
	<div id="feedbackHeader">
		<a>Feedback</a>
	</div>
	
	<!--the body of the feedback window
		initially it was hidden
		it will be shown when the header is clicked-->
	<div id="feedbackBody">
		<!--feedbackContent which contain form and button-->
		<div id="feedbackContent">
			<!--form that accept user input for feedback
				users need to input their name, email and comment
				the data will be saved to the database after the user submits the form-->
			<form method="POST" id="myForm4" onsubmit="return false">
				Name: <br>
				<input class="textarea" id="name" type="text" name="name" value=""><br>
				Email: <br>
				<input class="textarea" id="email" type="text" name="email" value=""><br>
				<br>
				Comment: <br>
				<textarea class="textarea" id="comment" name="comment" rows="10" cols="30"></textarea>
				<br>
				<div id="result4"></div>
				<input type="submit" name="submit" value="Submit" id="submitBtn2" onclick="submitData4();">
			</form>		
		</div>
	</div>
</div>

<!--======================title================================-->
<!--comment here-->
<div class="titleImg row" id="head">
	<div class ="texts column headLeft">
		<h1 class="ml6">
			<span class="letters">Introduction to</span><br>
			<span class="letters">Programming Language</span><br>
			<span class="letters">Concept and Paradigm</span><br>
		</h1>
		
		<div style="padding-top:40px; font-size:2vw; transition:1s;" data-aos="fade-up">
			<p>A programming paradigm is a style, or “way” of programming.</p><br>
			<p>Explore multiple programming paradigms here.</p><br>
			<p>Let's get started!</p>
		</div>
	</div>
	<!--comment here-->
	<div class="shape column headRight">
  		<div class="diamond-shape diamond1 myGlower">
    			<a href="https://en.wikipedia.org/wiki/Programming_paradigm" class="diamond-text">
			<p style = "padding:20px 0">Definition of Programming Paradigm</p>
			</a>

		</div>
		<div class="diamond-shape diamond2 myGlower">
			<a href="#myModal" class="diamond-text" data-toggle="modal">
			<p style = "font-size:20px;">Video</p></a>
		</div>
		<div class="diamond-shape diamond3 myGlower">
    			<a href="#topic1" class="diamond-text">
			<p style = "font-size:20px;">Learn more</p>
			</a>
		</div>
	</div>
</div>

<!--============================================first topic===================================================-->
<div class="row topic1 card" id="topic1" data-aos="fade-up">
	<!--comment-->
	<div class="page1">
		<!--divide the row into 2 column
			each column has 50% of the width-->
		<div class="column">
			<img src="p1.png" alt="Parallel Computing" ALIGN="right" onclick="onClick(this)" class="expand-hover-opacity center image">
		</div>
		<!--divide the row into 2 column
			each column has 50% of the width-->
		<div class="column content">
			<h2><p style = "font-family:georgia,garamond,serif;font-size:40px; text-align: center;">
				<br/>
					Parallel Paradigm
				<br/>
			</p></h2>
			<h3>Parallel software developers handle issues such as:</h3>
				<ul>
					<li>Synchronization</li>
					<li>Data partitioning and distribution</li>
					<li>Load-balancing</li>
					<li>Shared or distributed memory</li>
				</ul>

			<h3>Some parallelisation paradigms are as follows: </h3>
				<ol>
					<li>Task-farming/Master-Worker Model</li>
					<li>Single-Program Multiple-Data(SPMD)</li>
					<li>Pipelining</li>
					<li>Divide and Conquer</li>
				</ol>
		</div>
	</div>
	<!--comment-->
	<div class="page1" style = "display:none">
		<div class="column">
			<img src="ms.png" alt="Master Slave Model" ALIGN="right" onclick="onClick(this)" class="expand-hover-opacity center image">
		</div>
		<div class="column content">
			<h2><p style = "font-family:georgia,garamond,serif;font-size:40px; text-align:left;">
				<br/>
				Master-Worker Model
				<br/>
			</p></h2>
			<p>In this model, one or more master processes generate task and allocate it to worker processes.</p>
			<h3>Master</h3>
				<ul>
					<li>Responsible for accepting job submissions</li>
					<li>Splitting the job to tasks for workers.</li>
				</ul>
			<h3>Worker </h3>
				<ul>
					<li>Reports results directly to master</li>
					<li>No synchronisation with other worker</li>
				</ul>
		</div>
	</div>
	<!--comment-->
	<div class="page1" style = "display:none">
		<div class="column">
			<img src="dc.png" alt="Divide and Conquer" ALIGN="right" onclick="onClick(this)" class="expand-hover-opacity center image">
		</div>
		<div class="column content">
			<h2><p style = "font-family:georgia,garamond,serif;font-size:40px; text-align:left;">
				<br/>
				Divide and Conquer
				<br/>
			</p></h2>
			<p>A very popular paradigm that solves a problem using following three steps:</p>
				<ul>
					<li><i>Divide</i> - Break the given problem into subproblems of same type but smaller in size.</li>
					<li><i>Conquer</i> - The subproblems is solving recursively.</li>
					<li><i>Combine</i> - Appropriately combine the answers to create a solution to the original problem.</li>
				</ul>
			<p>Following are some standard algorithms that are Divide and Conquer algorithms:</p>
				<ul>
					<li><i>Binary Search</i> - A searching algorithm</li>
					<li><i>Quick Sort & Merge Sort</i> - A searching algorithm</li>
					<li><i>Strassen's Algorithm </i> - An efficient algorithm to multiply two matrices.</li>
					<li><i>Karatsuba Algorithm</i> - For fast multiplication</li>
				</ul>
		</div>
	</div>
	<!--exercise for topic 1-->
	<div class="page1" style = "display:none">
		<!--place one image at the right hand side-->
		<div class="column">
			<img src="exercise.png" alt="exercise" ALIGN="right" onclick="onClick(this)" class="expand-hover-opacity center image">
		</div>
		<!--at the right column-->
		<div class="column" style="text-align:left; padding-left:80px;">
			<!--Title-->
			<h2 style="text-align:center;">Exercise</h2><br>
			<!--create one form for user to interact with
				this form contains radio button (for q1, q2) and input field (q3)
				user can do the exercise by check the radio button (q1,q2)
				and enter the answer (q3)-->
			<form method="POST" id="myForm" onsubmit="return false">
				1. Which paradigm has a main processor to distribute tasks?<br>
				<input type="radio" name="ans1" value="Single-Program Multiple-Data"> Single-Program Multiple-Data<br>
				<input type="radio" name="ans1" value="Pipelining"> Pipelining<br>
				<input type="radio" name="ans1" value="Master-Worker Model"> Master-Worker Model<br>
				
				<br>2. Which algorithm use Divide and Conquer paradigm?<br>
				<input type="radio" name="ans2" value="Binary Search"> Binary Search<br>
				<input type="radio" name="ans2" value="Merge Sort"> Merge Sort<br>
				<input type="radio" name="ans2" value="Karatsuba Algorithm"> Karatsuba Algorithm<br>
				<input type="radio" name="ans2" value="All of above"> All of above<br>
				
				<br>3. Sort the steps of Divide and Conquer to the correct order.<br>
				<input type="number" name="ans3" value="Combine" id="ans3"> Combine<br>
				<input type="number" name="ans4" value="Divide" id="ans4"> Divide<br>
				<input type="number" name="ans5" value="Conquer" id="ans5"> Conquer<br>
				<br>
				<!--button to submit the exercise for checking
					when the 'Check' button is clicked, the function submitData() will be called-->
				<input type="submit" name="submit" value="Check" id="submitBtn" onclick="submitData();">
			</form>
			<!--to display the result-->
			<div id="result"></div>
		</div>
	</div>
	
	<a class="prev" onclick="plusSlides(-1,0)">&#10094;</a>
	<a class="next" onclick="plusSlides(1,0)">&#10095;</a>
</div>
<div style="text-align:center">
  <span class="dot" name="dot0" onclick="currentSlide(1,0)"></span> 
  <span class="dot" name="dot0" onclick="currentSlide(2,0)"></span> 
  <span class="dot" name="dot0" onclick="currentSlide(3,0)"></span> 
  <span class="dot" name="dot0" onclick="currentSlide(4,0)"></span> 
</div>
<br>
<br>
<!--=========================================================TOPIC 2==============================================================-->
<div class="row topic2 card" id="topic2"  data-aos="fade-up">
	<div class ="page2">
		<div class="column">
			<img src="p2.png" alt="Language Translation" ALIGN="right" onclick="onClick(this)" class="expand-hover-opacity center image">
		</div>

		<div class="column content">
			<h2><p style = "font-family:georgia,garamond,serif;font-size:40px; text-align: center;">
				<br/>
					Language Translation Issues
				<br/>
			</p></h2>
			<h3>Analysis of the source program</h3>
			<ol>
				<b><li>Lexical Analysis</li></b>
					<ul>
				
						<li>Group characters into token</li>
						<li>Ignore whitespace</li>
						<br>
					</ul>
				<b><li>Syntactic Analysis</li></b>
			
					<ul>
						<li>Determine if tokens have the right form for the language</li>
						<li>Stream of tokens: Abstract Syntax Tree (AST)</li>
		
						<br>
					</ul>
				<b><li>Semantic Analysis</li></b>
					<ul>
				
						<li>Static Semantic</li>
						<li>Dynamic Semantic</li>
		
						<br>
					</ul>

			</ol>
		</div>
	</div>	

	<div class ="page2" style="display:none">
		<div class="column">
			<img src="lexis.png" alt="Language Translation" ALIGN="right" onclick="onClick(this)" class="expand-hover-opacity center image">
		</div>

		<div class="column content">
			<h2><p style = "font-family:georgia,garamond,serif;font-size:40px; text-align:left;">
				<br>
				
Lexical Analysis
				<br>
			
			</p></h2>
			<ol>
				<b><li>Role of lexical analysis</li></b>	
					<ul>
				
						<li>Extraction of individual words or lexemes from an input stream of symbols and passing corresponding tokens back to the parser</li>
						<li>Removal of whitespace and comments and handling compiler directives</li>
						<br>
					</ul>
				<b><li>Examples of lexeme and token</li></b>	
				<br>
				<table id = "tab" style = "text-align:center; border: 1px solid black;">
					<tr>
						<td id = "tab"><b>Lexemes</b></td>
						<td id = "tab"><b>Tokens</b></td>
					</tr>
					<tr>
						<td id = "tab">if</td>
						<td id = "tab">keyword</td>
					</tr>
					<tr>
						<td id = "tab">(</td>
						<td id = "tab">bracket</td>
					</tr>
					<tr>
						<td id = "tab">x</td>
						<td id = "tab">identifier</td>
					</tr>
					<tr>
						<td id = "tab">></td>
						<td id = "tab">operator</td>
					</tr>
					<tr>
						<td id = "tab">3.1</td>
						<td id = "tab">number</td>
					</tr>
				</table>	
		</div>
	</div>	

	<div class ="page2" style="display:none">
		<div class="column">
			<img src="syntax.png" alt="Language Translation" width="500" height="500" ALIGN="right" onclick="onClick(this)" class="expand-hover-opacity center image">
		</div>

		<div class="column content">
			<h2><p style = "font-family:georgia,garamond,serif;font-size:40px; text-align:left;">
				<br>
				Syntactic Analysis
				<br>
			
			</p></h2>
			
<b><li>Syntax specifies using</li></b>
			<ul>
				<li>Context Free Grammars (CFG)</li>
				<li>Backus-Naur Form methods</li>
				<br>
			</ul>
			
<b><li>Example grammar</li></b>
			<ul>
				<li>[program] -> begin [stmt_list] end</li>
				<li>[stmt_list] -> [stmt] | [stmt]; [stmt_list]</li>
				<li>[stmt] -> [var] = [expression]</li>
				<li>[var] -> A | B | C </li>
				<li>[expression] -> [var] + [var] | [var] - [var]| [var]</li>
				<br>
			</ul>
		</div>
	</div>
	
	<!--exercise-->
	<div class="page2" style = "display:none">
		<div class="column">
			<img src="exercise.png" alt="exercise" ALIGN="right" onclick="onClick(this)" class="expand-hover-opacity center image">
		</div>
		
		<div class="column" style="text-align:left; padding-left:80px;">
			<h2 style="text-align:center;">Exercise</h2><br>
			<form method="POST" id="myForm2" onsubmit="return false">
				1. Which analysis will ignore whitespace?<br>
				<input type="radio" name="ans21" value="Lexical Analysis"> Lexical Analysis<br>
				<input type="radio" name="ans21" value="Syntactic Analysis"> Syntactic Analysis<br>
				<input type="radio" name="ans21" value="Semantic Analysis"> Semantic Analysis<br>
				
				<br>2. Which analysis uses Backus-Naur methods?<br>
				<input type="radio" name="ans22" value="Lexical Analysis"> Lexical Analysis<br>
				<input type="radio" name="ans22" value="Syntactic Analysis"> Syntactic Analysis<br>
				<input type="radio" name="ans22" value="Semantic Analysis"> Semantic Analysis<br>
				
				<br>3. Which analysis has Lexemes and Tokens?<br>
				<input type="radio" name="ans23" value="Lexical Analysis"> Lexical Analysis<br>
				<input type="radio" name="ans23" value="Syntactic Analysis"> Syntactic Analysis<br>
				<input type="radio" name="ans23" value="Semantic Analysis"> Semantic Analysis<br>
				<br>
				<input type="submit" name="submit" value="Check" id="submitBtn" onclick="submitData2();">
			</form>
			<div id="result2"></div>
		</div>
	</div>
	
	
	<a class="prev" onclick="plusSlides(-1,1)">&#10094;</a>
	<a class="next" onclick="plusSlides(1,1)">&#10095;</a>
</div>
<div style="text-align:center">
  <span class="dot" name="dot1" onclick="currentSlide(1,1)"></span> 
  <span class="dot" name="dot1" onclick="currentSlide(2,1)"></span> 
  <span class="dot" name="dot1" onclick="currentSlide(3,1)"></span> 
  <span class="dot" name="dot1" onclick="currentSlide(4,1)"></span> 
</div>
<br>
<br>
<!--===============================================================TOPIC 3=====================================================-->
<div class="row topic3 card" id="topic3"  data-aos="fade-up">
	<div class = "page3">
		<div class="column">
			<img src="p3.png" alt="Programming Concept" ALIGN="right" onclick="onClick(this)" class="expand-hover-opacity center image">
		</div>

		<div class="column content">
			<h2><p style = "font-family:georgia,garamond,serif;font-size:40px; text-align:left;">
				<br>
				Programming Concept
				<br>
			</p></h2>

		<p><b>Three programming paradigm</b></p>

		<ol>
			
			<b><li>Functional Paradigm</li></b>
			
			<ul>
				<li>The design of the functional languages is based on mathematical functions</li>
				
				<li>Expressions are either atoms or lists</li>
				
				<li>Scheme</li>
			
			</ul>
			<br>
			<b><li>Logical Paradigm</li></b>
			<ul>
				
				<li>The basic idea behind logic programming is to state knowledge</li>
				
				<li>Facts and Rules</li>
				<li>Prolog</li>
			</ul>
			<br>
			
			<b><li>Object Oriented Paradigm</li></b>
			
			<ul>
				<li>The unit in object-oriented programming is class</li>
				
				<li>Object-oriented programming starts from isolating the classes then look for the methods inside</li>
				<li>C++</li>
			</ul>
			<br>
		
		</ol>
		</div>
	</div>

	<div class = "page3" style="display:none">
		<div class="column">
			<video id = "vid" controls>
  				<source src="Prolog.mp4" type="video/mp4">
				Your browser does not support HTML5 video.
			</video>
		</div>

		<div class="column content">
		<h2><p style = "font-family:georgia,garamond,serif;font-size:40px; text-align:left;">
			<br>
			Logical Programming - Prolog
			<br>
		
		</p></h2>

		<p><b>Elements of Prolog</b></p>

		<ol>
			
			<b><li>Atoms</li></b>
			
			<ul>
				<li>A string of lower-case letters and digits that begins with a lower-case letter</li>
				
				<li>Example - playsGuitar</li>
						
			</ul>
			<br>
			<b><li>Numbers</li></b>
			<ul>
				
				<li>Integers</li>
				
				<li>Example - 3 , 7</li>
			</ul>
			<br>
			
			<b><li>Variables</li></b>
			
			<ul>
				<li>A string of upper-case letters, lower-case letters and underscore that starts with an upper-case letter</li>
				
				<li>Example - X , Y</li>
			</ul>
			<br>
			<b><li>Complex Terms</li></b>
			
			<ul>
				<li>Predicates and are represented as functor(arguments) where functor is the name of the predicate</li>
				<li>Example - mother(X,Y)</li>
			</ul>
			<br>
		
		</ol>
		</div>
	</div>

	<div class = "page3"  style="display:none">
		<div class="column">
			<img src="racket.png" alt="Programming Concept" ALIGN="right" onclick="onClick(this)" class="expand-hover-opacity center image">
		</div>
 
		<div class="column content">
		<h2><p style = "font-family:georgia,garamond,serif;font-size:40px; text-align:left;">
			<br>
			Functional Programming - Racket
			<br>
		
		</p></h2>

		<p><b>List manipulation</b></p>
			<ul>
				<li>Three primitives and one constant</li>
				
				<li>get head of list - car</li>
				
				<li>get rest of list - cdr</li>
	
				<li>add an element to a list: cons</li>
	
				<li>null list:  nil or ()</li>
			
			</ul>
			<br>
		<p><b>Function declarations</b></p>
			<ul>
				
				<li>Define can produce value bindings as well</li>
				
				<li>(define x 15)</li>
				<li>(sqr x)</li>
				<li> => 225</li>
			</ul>
			<br>		
		</div>
	</div>
	
	<!--exercise-->
	<div class="page3" style = "display:none">
		<div class="column">
			<img src="exercise.png" alt="exercise" ALIGN="right" onclick="onClick(this)" class="expand-hover-opacity center image">
		</div>
		
		<div class="column" style="text-align:left; padding-left:80px;">
			<h2 style="text-align:center;">Exercise</h2><br>
			<form method="POST" id="myForm3" onsubmit="return false">
				1. Which language is an example of Functional Paradigm?<br>
				<input type="radio" name="ans31" value="Prolog"> Prolog<br>
				<input type="radio" name="ans31" value="Scheme"> Scheme<br>
				<input type="radio" name="ans31" value="C++"> C++<br>
				
				<br>2. Which paradigm involves in facts and rules?<br>
				<input type="radio" name="ans32" value="Functional Paradigm"> Functional Paradigm<br>
				<input type="radio" name="ans32" value="Logical Paradigm"> Logical Paradigm<br>
				<input type="radio" name="ans32" value="Object-oriented Paradigm"> Object-oriented Paradigm<br>
				
				<br>3. There are 3 elements in Prolog?<br>
				<input type="radio" name="ans33" value="True"> True<br>
				<input type="radio" name="ans33" value="False"> False<br>
				<br>
				<input type="submit" name="submit" value="Check" id="submitBtn" onclick="submitData3();">
			</form>
			<div id="result3"></div>
		</div>
	</div>
	
	<a class="prev" onclick="plusSlides(-1,2)">&#10094;</a>
	<a class="next" onclick="plusSlides(1,2)">&#10095;</a>
</div>
<div style="text-align:center">
  <span class="dot" name="dot2" onclick="currentSlide(1,2)"></span> 
  <span class="dot" name="dot2" onclick="currentSlide(2,2)"></span> 
  <span class="dot" name="dot2" onclick="currentSlide(3,2)"></span> 
  <span class="dot" name="dot2" onclick="currentSlide(4,2)"></span> 
</div>
<br>
<!--======================================================END TOPIC================================================-->
<br>
<!--This section show the editor information of the webpage-->
<div class="foot" id="aboutUs">
	<!--this is the heading-->
	<h2><p style = "color:white;font-family:georgia,garamond,serif;font-size:25px text-align:left;">
		<br>
		About Us
	</p><h2>
	<h3><p style = "color:white;font-family:georgia,garamond,serif;font-size:25px text-align:left;">
		Editor Information<br>
	</p></h3>
	<br>
	<!--we seperate each information using row and column
		each footCol has a width of 22% of the screen
		when the screen is shrink, the width of the column will become larger
		and stack on each other-->
	<div class="row" style = "color:white">
		<!--first column-->
		<div class="footCol">
			<!--information aboout each editor-->
			<p style = "font-family:georgia,garamond,serif;font-size:25px text-align:left;">
			
				<li><b>Tan Phing Wern</b></li>
				<ul>
					<li>Matric no. : 137169</li>
					<li>Email : phingwern0302@student.usm.my</li>
				</ul>
			</p>
		</div>
		<!--second column-->
		<div class="footCol">
			<p style = "font-family:georgia,garamond,serif;font-size:25px text-align:left;">
				<li><b>Teo Siao Jin</b></li>
				<ul>
					<li>Matric no. : 137171</li>
					<li>Email : siaojin15@student.usm.my</li>
				</ul>
			</p>
		</div>
		<!--third column-->
		<div class="footCol">
			<p style = "font-family:georgia,garamond,serif;font-size:25px text-align:left;">
				<li><b>Then Kim Yen</b></li>
				<ul>
					<li>Matric no. : 137174</li>
					<li>Email : kimyen970907@student.usm.my</li>
				</ul>
			</p>
		</div>
		<!--last column-->
		<div class="footCol">
			<p style = "font-family:georgia,garamond,serif;font-size:25px text-align:left;">
				<li><b>Wong Xin Ying</b></li>
				<ul>
					<li>Matric no. : 137182</li>
					<li>Email : xinying97@student.usm.my</li>
				</ul>
			</p>
		</div>
	</div>
	<br><br>
</div>


<div class="expand" id="expandimage" onclick="this.style.display='none'">
	<span class="close">&times;</span>
	<div class="expand-content">
 		<img id="image" style="width:750px;height:600px">
	</div>
</div>

<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content"  style="margin-top:80px">
			<div class="modal-body" >                 
                 		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                   		<iframe id="cartoonVideo" width="1000" height="600" src="https://www.youtube.com/embed/lqmMqtgWpms" frameborder="0" allowfullscreen></iframe>
               		</div>
		</div>
	</div>
</div>



<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
	AOS.init({
            easing: 'ease-in-out-sine'
          });
</script>
</body>
</html>