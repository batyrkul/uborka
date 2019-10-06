
$.ajaxSetup({
	headers:{
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}

});

$(window).scroll(function(event){
    var st = $(this).scrollTop();

    var width = $( window ).width();

    //if(width>800){
        if(st > 30){
            
         
        }else{

            ; 
           
        }
    //}
});

$( document ).ready(function() {
	var width = $( window ).width();

	$('.menu a[href^="#"]').on('click', function (e) {
				
				
				e.preventDefault();
				if(width < 800){
					$(".m-overlay").toggle("slide" );
				}
				
				
				var target = this.hash;
				var $target = $(target);
				console.log($target.offset().top);
				$('html, body').animate({
					'scrollTop': $target.offset().top-250
				}, 1000, 'swing');
	}); 
	
	
	$(".insForm button").click(function(){
			
			var obj ={
				name:$(".insForm input[name=name]").val(),
				phone:$(".insForm input[name=phone]").val(),
				
			}
			
			
			if(obj.name!='' && obj.phone!='' ){ 
				
				$.post("/orderCall", obj, function(html) {
						if(html ==1){ 
							$(".insForm").html("<p>Спасибо! Наш менеджер перезвонит вам.</p>");
						} 
				});
			}    
			
			
			
	}); 
	
	
	$(".insf button").click(function(){
			
			var obj ={
				name:$(".frm-in input[name=name]").val(),
				phone:$(".frm-in input[name=phone]").val(),
				
			}
			
			
			if(obj.name!='' && obj.phone!='' ){ 
				
				$.post("/orderCall", obj, function(html) {
						if(html ==1){ 
							$(".frm-in").html("<p>Спасибо! Наш менеджер перезвонит вам.</p>");
						} 
				});
			}    
			
			
			 
	}); 
	
	$(".mobbar").click(function(){
		$(".m-overlay").toggle("slide" );		
	});
	
	$(".cls").click(function(){
		$(".m-overlay").toggle("slide" );
	});
	
	
	
	$("section").click(function(){
				if ($(".m-overlay").is(':visible') ){
				$(".m-overlay").toggle("slide" );
				}
	});
	
	$(".sf").click(function(){
			$(".sh").fadeToggle();
		});

	$(".thb-i").hover(function () {
       $(this).toggleClass("animated pulse");
    });

    $(".th-r-i").click(function(){
        var id = $(this).attr("data-id");

        $.get("/getOtchImg/"+id,{},function(html){


            $(this).lightGallery({
                dynamic:true,
                dynamicEl:
                html

            });


        });
    });
	
}); 



