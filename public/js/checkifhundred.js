$(document).ready(function() {
	$('#ctrloneinsert').on('submit', function(e) {
		var bottle1 = $("#bottle1").val();
		var bottle2 = $("#bottle2").val();
		var bottle3 = $("#bottle3").val();
		var bottle4 = $("#bottle4").val();
		var bottle5 = $("#bottle5").val();
		var bottle6 = $("#bottle6").val();
		var bottle7 = $("#bottle7").val();	

		var bottles = 0;
/*
        if($.isEmptyObject(bottle1))
        {
        	bottle1 = 0;
        }
        if($.isEmptyObject(bottle2))
        {
        	bottle2 = 0;
        }
        if($.isEmptyObject(bottle3))
        {
        	bottle3 = 0;
        }
        if($.isEmptyObject(bottle4))
        {
        	bottle4 = 0;
        }
        if($.isEmptyObject(bottle5))
        {
        	bottle5 = 0;
        }
        if($.isEmptyObject(bottle6))
        {
        	bottle6 = 0;
        }
        if($.isEmptyObject(bottle7))
        {
        	bottle7 = 0;
        }

        */
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


        10000,


        bottles = bottle1 + bottle2 + bottle3 + bottle4 + bottle5 + bottle6 + bottle7;
        if(bottles > 100)
        {
        	alert("Seštevek procentov je večji kot 100 in sicer je: " . bottles);
        }
        else if(bottles < 100)
        {
        	alert("Seštevek procentov je manjši kot 100 in sicer je: " . bottles);
        }
        $.ajax({
        	type: "get",
        	url: 'ctrlonedivideinsert',
        	data: {"bottle1": bottle1},
        	async: 'false',
        	cache: 'false',
        	success: function (result) {

        	}
        });
    });
});