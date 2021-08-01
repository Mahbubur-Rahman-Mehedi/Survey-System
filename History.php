<!DOCTYPE html>
<html>
<head>
	<title>Histry</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="new.css">
</head>

<body>
	<video autoplay muted loop id="myVideo">
		<source src="Animation.mp4" type="video/mp4">
    </video>
	<div class="navbar">
        <button id="home" class="home" onclick="home()">Home </button>
        <script type="text/javascript">
       //document.getElementById("logout").onclick
        function home() {

            location.href = "index.html";
             };
        </script>
        <div id="HISTORY"><u><b><h2>HISTORY</h2><b></u></p></div>
        <?php
           echo "" . date("d/m/Y");
           echo " ". date("l");
        ?>       
        </b></mark>
       <!-- <input type="submit" id="logout" class="logout" value="Log Out"> -->
       <button id="logout" class="logout" onclick="logout()">Log Out </button>
		<script type="text/javascript">
       //document.getElementById("logout").onclick
        function logout() {

            location.href = "login.php";
             };
        </script>
    </div>
	<div class="row">
		<div id="pc" class="col">
			<h2><u>Previous Content</u></h2><br>
			<legend >
			<ol>
				<li><button class="btn"  onclick="myFunction();clickCounter();">Online Safety Survey</button><p id="op1">Total Views:</p></li>
            <script>
                function myFunction() {
                    window.open("OnlineSafetySurvey.php");
                }
            </script>

            <script>
                function clickCounter() {
                    if (typeof(Storage) !== "undefined") {
                        if (sessionStorage.clickcount) {
                            sessionStorage.clickcount = Number(sessionStorage.clickcount)+1;
                        } else {
                            sessionStorage.clickcount = 1;
                            }
                document.getElementById("op1").innerHTML = "Total viwes: " + sessionStorage.clickcount ;
                    }
                }
            </script>

                <li><button class="btn"  onclick="myFunction2();clickCounter2();">Digital Illiteracy</button><p id="op2">Total Views:</p></li>
            <script>
                function myFunction2() {
                    window.open("Digitalilliteracy.php");
                }
            </script>

            <script>
                function clickCounter2() {
                    if (typeof(Storage) !== "undefined") {
                        if (sessionStorage.clickcount) {
                            sessionStorage.clickcount = Number(sessionStorage.clickcount)+1;
                        } else {
                            sessionStorage.clickcount = 1;
                            }
                document.getElementById("op2").innerHTML = "Total viwes: " + sessionStorage.clickcount ;
                    }
                }
            </script>
            </ol>
			</legend>
		</div>	
		<div id="cc" class="col">
			<h2><u>Current Content</u></h2><br>
			<legend>
                <ol >
                <li><button class="btn"  onclick="myFunction3();clickCounter3();">Bullying at Educational Institute </button><p id="op3">Total Views:</p></li>
            <script>
                function myFunction3() {
                    window.open("bullying.php");
                }
            </script>

            <script>
                function clickCounter3() {
                    if (typeof(Storage) !== "undefined") {
                        if (sessionStorage.clickcount) {
                            sessionStorage.clickcount = Number(sessionStorage.clickcount)+1;
                        } else {
                            sessionStorage.clickcount = 1;
                            }
                document.getElementById("op3").innerHTML = "Total viwes: " + sessionStorage.clickcount ;
                    }
                }
            </script>
            </ol>
			</legend>
		</div>
	</div>

    <footer id="main-footer">
            <p>Copyright &copy; 2020 WebDeveloperBD. All Rights Reserved.</p>
            <button type="button" name="button_1" id="btn_1">About Us</button>
        <div style="border: 1px solid black;" id="content_1">

 

        </div>

 

        <script type="text/javascript">

 

          document.getElementById('btn_1').addEventListener('click',loadResponse);

 

          function loadResponse(){
            //Creates an XMLHttpRequest object
            var xhr = new XMLHttpRequest();

 

            //opens the file with a specific request in asyncronous communication mode
            xhr.open('GET', 'txt.txt', true);
            //sends the request
            xhr.send();

 

            xhr.onload = function(){
              if(this.status == 200){
                document.getElementById('content_1').innerHTML = this.responseText;
              }else if(this.status == 404){
                document.getElementById('content_1').innerHTML = "404 - NOT FOUND";
              }
            };

 

          }

 

        </script>
 

    </footer>
</body>
</html>