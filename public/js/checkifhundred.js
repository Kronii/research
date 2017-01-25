$(document).ready(function() {
	$('#ctrldivideinsert').on('submit', function(e) {
		var bottle1 = parseInt($("#bottle1").val());
		var bottle2 = parseInt($("#bottle2").val());
		var bottle3 = parseInt($("#bottle3").val());
		var bottle4 = parseInt($("#bottle4").val());
		var bottle5 = parseInt($("#bottle5").val());
		var bottle6 = parseInt($("#bottle6").val());
		var bottle7 = parseInt($("#bottle7").val());	

		var bottles = 0;

        bottle1 = parseInt(bottle1);
        bottle2 = parseInt(bottle2);
        bottle3 = parseInt(bottle3);
        bottle4 = parseInt(bottle4);
        bottle5 = parseInt(bottle5);
        bottle6 = parseInt(bottle6);
        bottle7 = parseInt(bottle7);

        console.log(bottle1);
        console.log(bottle2);
        console.log(bottle3);
        console.log(bottle4);
        console.log(bottle5);
        console.log(bottle6);
        console.log(bottle7);


        bottles = bottle1 + bottle2 + bottle3 + bottle4 + bottle5 + bottle6 + bottle7;
        console.log('Seštevek procentov:' + bottles)
        if(bottles > 100)
        {
        	e.preventDefault();
        	alert("Seštevek procentov je večji kot 100 in sicer je: " + bottles);
        }
        else if(bottles < 100)
        {
        	e.preventDefault();
        	alert("Seštevek procentov je manjši kot 100 in sicer je: " + bottles);
        }
    });
});