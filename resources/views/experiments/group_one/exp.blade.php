<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        -->
        <title>Laravel</title>
    	<!-- Latest compiled and minified CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="css/normalize.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     </head>
    <body style = "background-color: black; color: white;">
    	<div class="container middle">
    	   <div class="x col-md-12" id="thex">
		    X
		  </div> 
     	</div>
    </body>
    @if (($rand == 1)||($rand == 2)||($rand == 3))
    <script src="js/wait.js"></script>
    @elseif ($rand == 4)
    <script src="js/waitfour.js"></script>
    @elseif ($rand == 5)
    <script src="js/waitfive.js"></script>
    @elseif ($rand == 6)
    <script src="js/waitsix.js"></script>
    @elseif ($rand == 7)
    <script src="js/waitseven.js"></script>
    @elseif ($rand == 8)
    <script src="js/waiteight.js"></script>
    @elseif ($rand == 9)
    <script src="js/waitnine.js"></script>
    @endif
</html>