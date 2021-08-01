<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.js"></script>
<head>
	<title>Bullying at Educational Institute</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="bullying.css">
</head>
<body>
    <div id="mode"> 
        <button id="btn" onclick="myFunction()"> ☀️ Change Mode 🌙 </button>

        <script class="dark-mode">
            function myFunction() {
                var element = document.body;
                element.classList.toggle("dark-mode");
            }
        </script>

        <button id="demo" class="downloadtable" onclick="downloadtable()"> ⬇️ Download</button>


        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>

    	<script>
             function downloadtable() {
                var node = document.getElementById('tablecontainer');

            domtoimage.toPng(node)
                .then(function (dataUrl) {
                    var img = new Image();
                        img.src = dataUrl;
                    downloadURI(dataUrl, "Online Safety Survey.png")
            })
            .catch(function (error) {
                console.error('oops, something went wrong!', error);
            });

            }



            function downloadURI(uri, name) {
                var link = document.createElement("a");
                    link.download = name;
                    link.href = uri;
                document.body.appendChild(link);
                        link.click();
                document.body.removeChild(link);
                delete link;
            }
        </script>
         
         <button id="btn" onclick="window.print()"> 🖶 Print this page</button>

    </div>
    <div id="tablecontainer">
    	<h2><u>Digital Illiteracy</u></h2>
        <ol>
            <li>How did you know about this survey?</li>
            <input type="radio" name="q1" value="option1">I found it by myself when I was surfing on the Internet<br>
            <input type="radio" name="q1" value="option2">I was told by a friend<br>
            <input type="radio" name="q1" value="option3">I was told by a youth club/community organization<br>
            <input type="radio" name="q1" value="option4">Social Media<br>

            <li>Are you?</li>
            <input type="radio" name="q2" value="option1">Male<br>
            <input type="radio" name="q2" value="option2">Female<br>

            <li>How old are you?</li>
            <input type="radio" name="q3" value="option1">Under 8<br>
            <input type="radio" name="q3" value="option2">9-10<br>
            <input type="radio" name="q3" value="option3">11-14<br>
            <input type="radio" name="q3" value="option4">15-17<br>
            <input type="radio" name="q3" value="option4">18+<br>

            <li>Do you live in a?</li>
            <input type="radio" name="q2" value="option1">City<br>
            <input type="radio" name="q2" value="option2">Village<br>
            
        </ol>
    </div>

   

</body>

</html>