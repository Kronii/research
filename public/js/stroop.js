// author: robi pritrznik, 2016
// license MIT 

/*
 
Copyright (c) 2016 Robi Pritrznik

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 
/*
 You may think you know what the following code does.
 But you don't. Trust me.
 Fiddle with it, and you'll spend many sleepless
 nights cursing the moment you thought you'd be clever
 enough to "optimize" the code below.
 Now close this file and go play with something else.
 Only God and I knew what the code does ... now only God knows.
 */
 
 // TODO space bug

 var keyPressed; /* pressed key code*/ 
 var correctTiming = []; /* timings for correct group */
 var incorrectTiming = []; /* timings for incorrect group */
 var controlTiming = []; /* timings for control group */
 var text; /* magnificant text to print */
 var color; /* color to print text in */ 
 var limit = 10; /* how many iterations of test you want */ 
 var count = 0; /* increment, dont change it */ 
 var t0; /* zero time, dont change it */ 
 var start = 0;
 /* average results */
 var avgIncorrect; 
 var avgCorrect;
 var avgControl;
 var pickedColor;
// runs at keypressed
$(document).keyup(function(event)
{
		// get keypressed code
		keyPressed = String.fromCharCode(event.which); 
  		//console.log(start);
  		// if we good to go
		//console.log(count);
		if(event.which == 32 && start == 0 )
		{

			start = 1;
			screenfull.request();
			startTest();
			
		}
		if(event.which == 32 && count >0)
		{
			//console.log("ok");
			
			return;
		}
  		// check wheather test is in progress
  		if(keyPressed && count < limit && count !=0 && start == 1)
  		{
			// set timer
			var t1 = performance.now();
 	 		// remove class from previous iteration
 	 		$('#text').removeClass();
 	 		keyPressed=null;

  			// get group
  			var group = checkGroup(text, color,String.fromCharCode(event.which));
			// what group we in, push result to group
			if(group == "control")
			{
			//	console.log("push to control");
			controlTiming.push((t1 - t0));

		}
		else if(group == "correct")
		{
				//	console.log("push to correctTiming");
				correctTiming.push((t1 - t0));

			}
			else if(group == "incorrect")
			{
			//		console.log("push to incorrectTiming");
			incorrectTiming.push((t1 - t0));

		}


	// actually start the test
	startTest();


}
		// you know what this is
		else if(count == 10 && start == 1)
		{
			$('#text').remove();
			// generate stats
			stats();
			// generate json
			generateJSON();
		}

		count++;

	});

// test function
function startTest()
{
	$('#text').remove();

// set timer to 0
t0 = 0;
t0 = performance.now();
	// get text and color, check them, print the value
	text = getText();
	color = getColor();
	if(text !="rectangle")
	{
		$('.content').append("<div id='text'>"+ text+"</div>");
		$('#text').addClass(color);

	}
	else if(text =="rectangle")
	{
		$('.content').append("<div id='text'></div>");
		$('#text').addClass("rectangle-"+color);

	}
}

// get "random" text
function getText()
{

	var text = ["red", "green", "black", "blue","rectangle"];
	var item = text[Math.floor(Math.random()*text.length)];
	return item;

}
// get "random" color
function getColor()
{

	var colors = ["red", "green", "black", "blue"];
	var item = colors[Math.floor(Math.random()*colors.length)];
	return item;
}

// return the corresponding group of combination of text and color
function checkGroup(txt, col, key)
{
	key=key.toUpperCase();
	//console.log("key" + key);
	if(key == "D")
	{
		pickedColor = "red";
	}
	else if(key == "F")
	{
		pickedColor = "green";
	}
	else if(key == "J")
	{
		pickedColor = "blue";
	}
	else if(key == "K")
	{
		pickedColor = "black";
	}
	//console.log("picked "+pickedColor);
	//console.log(col);
	if(col == pickedColor && txt!="rectangle")
	{
		console.log("correct2");
		return "correct";
	}
	else if(col != pickedColor && txt!="rectangle")
	{
		//console.log("incorrect");
		return "incorrect";
	}
	else if(txt == "rectangle")
	{
		//	console.log("control");

		return "control";
	}
	else
	{
		return "error";
	}
}

// generate stats, average for every group
function stats()
{

	var sum = 0;
	// stole this from stachoverflow, thank and bug the guy there
	for( var i = 0; i < incorrectTiming.length; i++ )
	{
		sum += parseInt( incorrectTiming[i], 10 );
	}

	avgIncorrect = sum/incorrectTiming.length;

	sum = 0;
	for( var i = 0; i < correctTiming.length; i++ )
	{
		//console.log(correctTiming[i]);
		sum += parseInt( correctTiming[i], 10 ); 
	}

	avgCorrect = sum/correctTiming.length;

	sum = 0;
	for( var i = 0; i < controlTiming.length; i++ )
	{
		sum += parseInt( controlTiming[i], 10 );
	}
	avgControl = sum/controlTiming.length;

	//console.log("avgCorrect" + avgCorrect);
	//console.log("avgIncorrect" + avgIncorrect);
	//console.log("avgControl" + avgControl);

}

// generate and print json of results
function generateJSON()
{
	var url = 'cwskrinsert';
	var form = $('<form action="' + url + '" method="get">' +
		'{{csrf_field()}}' +
		'<input type="hidden" name="_token" value="{{ csrf_token() }}">' +
		'<input type="hidden" name="Correct" value="' + avgCorrect + '" />' +
		'<input type="hidden" name="Incorrect" value="' + avgIncorrect + '" />' +
		'<input type="hidden" name="Control" value="' + avgControl + '" />' +
		'</form>');
	$('body').append(form);
	form.submit();
	var jsonString;
	jsonString = '{"results":{'+
	'"correct":"'+avgCorrect+'",'+ 
	'"incorrect":"'+avgIncorrect+'",'+
	'"control":"'+avgControl+'"}}';

	$('.result').toggleClass("result-finished");
	$('.result').append(jsonString);


	//console.log(jsonString);
}