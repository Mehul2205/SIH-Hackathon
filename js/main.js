for (var i = 1; i < 6; i++) {
	for(var j = 1; j<11; j++){
		let selector = "#"+"slot-"+i+"-"+j;
		$(selector).data({
			"day": i,
			"time": j,
			"faculty": null,
			"classroom": null 
		});
	}
}

let facs = {"T. Jain":3,"V. Kamble":3,"A. Kothari":3,"A. Bhurane":3,"M. Parate":3};
let faculties = ["T. Jain","V. Kamble","A. Kothari","A. Bhurane","M. Parate"]
let classes = ["208","209","210","211"];






$.get("http://localhost/sih/check.php?batch=1", function(data, status){
	data = JSON.parse(data)
    for(let i in data){
    let b = data[i]
    let selector = "#slot-"+b["day"]+"-"+b["time"]
    if(b["teacher"]!=0){
    	$(selector).children()[0].innerHTML = faculties[b["teacher"]-1]
    	facs[faculties[b["teacher"]-1]] -=1
    }
    if(b["room"]!=0)
    	$(selector).children().children()[0].innerHTML = classes[b["room"]-1]
}

for(let i = 0; i<5; i++)
{
	let a = '<div class="btn btn-outline-info draggable-fac">'+Object.keys(facs)[i]+'</div>';
	a = a.repeat(facs[Object.keys(facs)[i]])
	a = $(a);
	let t = i+1
	a.data({
		"faculty":t
	});
	$("#all_faculties").append(a);
}

$( ".draggable-fac" ).draggable({
	snap: '.droppable-fac',
	snapMode: "inner",
	revert: function() {
	    if ($(this).hasClass('drag-revert')) {
	      $(this).removeClass('drag-revert');
	      return true;
    	}
  	}	
});
});



$( ".draggable-class" ).draggable({
	snap: '.droppable-class',
	snapMode: "inner",
	helper: 'clone',
	revert: function() {
    	if ($(this).hasClass('drag-revert')) {
      		$(this).removeClass('drag-revert');
      		return true;
    	}
  	}
});


$( ".droppable-fac" ).droppable({
	accept: ".draggable-fac",
	drop: function(event, ui) {
		let daytime = $(this).parent().attr('id').split('-');
		let fac = $(ui.helper).data('faculty');
		$.ajax({
          async: false,
		  url: 'http://localhost/sih/check.php',
		  type: 'get',
		  data: {
		    'teacher': fac,
		    'batch': 1,
		    'day': daytime[1],
		    'time': daytime[2]
		  },
		  success: function(response,status,xhr){
		  	console.log(response);
		  	console.log(xhr.getResponseHeader('Location'));
		    if(response == 0)
		    {
		    	window.check_var = 0;
		    }
		    else window.check_var = 1;
		  }
		});
		if(!window.check_var)
			return $(ui.draggable).addClass('drag-revert');
		else {
			$.ajax({
	          async: false,
			  url: 'http://localhost/sih/check.php',
			  type: 'get',
			  data: {
			    'teacher': fac,
			    'batch': 1,
			    'day': daytime[1],
			    'time': daytime[2]
			  },
			  success: function(response){
			  	console.log(response);
			    if(response == 0)
			    {
			    	window.check_var = 0;
			    }
			    else window.check_var = 1;
			  }
			});
		}
	}
});

$( ".droppable-class" ).droppable({
	accept: ".draggable-class",
	drop: function(event,ui){
        
        let class_var = classes.indexOf($(ui.helper).text()) + 1;
        let daytime = $(this).parent().parent().attr('id').split('-');
        $.ajax({
          async: false,
		  url: 'http://localhost/sih/check.php',
		  type: 'get',
		  data: {
		    'room': class_var,
		    'batch': 1,
		    'day': daytime[1],
		    'time': daytime[2]
		  },
		  success: function(response){
		  	console.log(response);
		    if(response == 0)
		    {
		    	window.check_var = 0;
		    }
		    else window.check_var = 1;
		  }
		});
		if (window.check_var) {
			if (ui.draggable[0].id) {
            $(this).append($(ui.helper).clone().draggable().css({
            	position: 'absolute',
				left: $("#slot-1-1").position().left-70,
				top: $("#slot-1-1").position().top-30
            }));
        	}
	    } else {
	    	return $(ui.draggable).addClass('drag-revert');
	    }
	}
});

