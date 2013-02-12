
$(document).ready(function()
{
		news();
		result();
		team();
		rank('batsman');
		rank('bowler');
		rank('allrounder');
		photos();
		videos();
		article();
		livescore();
	    /*setInterval(function() {
          result();
			}, 60000);*/
    setInterval(function() {
          livescore();
			}, 30000);
			$('#resultmenu').change(function()
			{
				$('.accordion-group').hide();
				$('.'+this.value).show();
			});
			
});
function result()
{
	//load result scores 
	//to test
	//$('#accordion2').html('');
	var html='';
	$.ajax({
        url: 'result/getlist',
        type: "GET",
        dataType:'json', 
        success: function(data) {
			//alert(data.menu.length);
			$.each( data.resultset['ODI'], function(list)
			{
				html+='<div class="accordion-group ODI"><div class="accordion-heading"><a href="'+data.resultset['ODI'][list]['link']+'" target="_blank" class="accordion-toggle"><div class="content">';
                html+='<div class="date"><span class="red">'+data.resultset['ODI'][list]['date']+'</span></div>';
                html+='<div class="match"><h4><span class="grey">'+data.resultset['ODI'][list]['team']+'</span></h4><h5>'+data.resultset['ODI'][list]['result']+'</h5></div>';
                html+='<div class="clearfix"></div></div></a></div></div>';
			});
			$.each( data.resultset['Test'], function(list)
			{
				html+='<div class="accordion-group Test"><div class="accordion-heading"><a href="'+data.resultset['Test'][list]['link']+'" target="_blank" class="accordion-toggle"><div class="content">';
                html+='<div class="date"><span class="red">'+data.resultset['Test'][list]['date']+'</span></div>';
                html+='<div class="match"><h4><span class="grey">'+data.resultset['Test'][list]['team']+'</span></h4><h5>'+data.resultset['Test'][list]['result']+'</h5></div>';
                html+='<div class="clearfix"></div></div></a></div></div>';
			});
			$.each( data.resultset['T20'], function(list)
			{
				html+='<div class="accordion-group T20"><div class="accordion-heading"><a href="'+data.resultset['T20'][list]['link']+'" target="_blank" class="accordion-toggle"><div class="content">';
                html+='<div class="date"><span class="red">'+data.resultset['T20'][list]['date']+'</span></div>';
                html+='<div class="match"><h4><span class="grey">'+data.resultset['T20'][list]['team']+'</span></h4><h5>'+data.resultset['T20'][list]['result']+'</h5></div>';
                html+='<div class="clearfix"></div></div></a></div></div>';
			});
			$('#accordion2').html(html);
			/*$('#accordion2').append(data);
			$('#resultmenu').html($('#ajaxmenu').html());
			$('#ajaxmenu').remove();
            $(".resultmenu").click(function()
			{
				$('#menubtn').html($(this).attr('link'));
				if($(this).attr('link') == 'All')
				{
					$('.type').show();
				}
				else
				{
					$('.type').hide();
					$('.'+$(this).attr('link')).show();
				}
			});*/
        },
        error:function()
        {
			
		}    
    });
}
function news()
{
	var html='';
	var recentNews='';
	var bannerslide='';
	$.ajax({
        url: 'news/getlist',
        type: "GET",
        dataType:'json', 
        success: function(data) {
			for(i=1;i<data.resultset.length;i++)
			{
				mod=i%3;
				html+='<li class="media news-thumb-small">' ;
                html+='<a class="pull-left" target="_blank" href="'+data.resultset[i]['link']+'"> <img src="'+data.resultset[i]['media1']+'" class="media-object"> </a>';
                html+='<div class="media-body">';
                html+='<h4 class="media-heading"><a target="_blank" href="'+data.resultset[i]['link']+'">'+data.resultset[i]['title']+'</a></h4>';
                html+='<h6>'+data.resultset[i]['pubdate']+'</h6>';
                html+='</div>';
                html+='</li>';
                if((mod==0) || (i==(data.resultset.length-1)))
                {
					recentNews+='<div class = "span6"><ul>'+html+'</ul></div>';
					html='';
				}
			}
			$('#recentNewscont').html(recentNews);
			html='<div class = "row-fluid"><div class = "span12 news-thumb"><p><img src="'+data.resultset[0]['media2']+'"/>';
			html+='<p>'+data.resultset[0]['pubdate']+'</p>';
			html+=data.resultset[0]['description'];
			html+='<p class="pull-right"><a class="btn btn-primary" target="_blank" href="'+data.resultset[0]['link']+'">Read more</a></p>';
			html+='</p></div></div>';
			$('#featuredNews').html(html);
			bannerslide+='<div class="item active"> <img src="'+data.resultset[0]['media1']+'" class = "res-image">';
			bannerslide+='<div class = "carousel-caption">';
			bannerslide+='<a target="_blank" href="'+data.resultset[0]['link']+'"><h4>'+data.resultset[0]['title']+'</h4></a>';
			bannerslide+='<p>'+data.resultset[0]['pubdate']+'</p>';
			bannerslide+='<p>'+data.resultset[0]['description'].substring(0,200)+' ...</p></div></div>';
			$('#bannerslide').html(bannerslide);
        },
        error:function()
        {
			
		}    
    });
}

function livescore()
{
	$.ajax({
        url: 'live',
        type: "GET",
        cache: false,
        success: function(data) {
			$('#livescore').html(data);
        },
        error:function()
        {
			
		}    
    });
}
function team()
{
	var list='';
	var list1='';
	var list2='';
	$.ajax({
        url: 'rank/team',
        type: "GET",
        dataType:'JSON',
        success: function(data) {
			for(i=0;i<data.resultset['Test'].length;i++)
			{
				list+='<div class="accordion-group"><div class="accordion-heading">';
                list+='<div class="content"><div class="date">';
                list+='<span class="red"><h3>'+parseInt(i+1)+'</h3></span>';
                list+='</div><div class="match">';
                list+='<h3 class="grey">'+data.resultset['Test'][i]['team']+'</h3>';
                list+='<h5>Rating: '+data.resultset['Test'][i]['rating']+' | Points: '+data.resultset['Test'][i]['points']+'</h5>';
                list+='</div><div class="clearfix"></div></div></div></div>';
			}
			$('#team-ranking').html(list);
			for(i=0;i<data.resultset['ODI'].length;i++)
			{
                list1+='<div class="accordion-group"><div class="accordion-heading">';
                list1+='<div class="content"><div class="date">';
                list1+='<span class="red"><h3>'+parseInt(i+1)+'</h3></span>';
                list1+='</div><div class="match">';
                list1+='<h3 class="grey">'+data.resultset['ODI'][i]['team']+'</h3>';
                list1+='<h5>Rating: '+data.resultset['ODI'][i]['rating']+' | Points: '+data.resultset['ODI'][i]['points']+'</h5>';
                list1+='</div><div class="clearfix"></div></div></div></div>';
			}
			$('#team-ranking01').html(list1);
			for(i=0;i<data.resultset['T20'].length;i++)
			{
                list2+='<div class="accordion-group"><div class="accordion-heading">';
                list2+='<div class="content"><div class="date">';
                list2+='<span class="red"><h3>'+parseInt(i+1)+'</h3></span>';
                list2+='</div><div class="match">';
                list2+='<h3 class="grey">'+data.resultset['T20'][i]['team']+'</h3>';
                list2+='<h5>Rating: '+data.resultset['T20'][i]['rating']+' | Points: '+data.resultset['T20'][i]['points']+'</h5>';
                list2+='</div><div class="clearfix"></div></div></div></div>';
			}
			$('#team-ranking02').html(list2);
			/*$('#team').html(data);
			$('.teamMenu').click(function()
			{	
				$('.releanceTabBox').hide();
				$('#'+$(this).attr('link')).show();
				});*/
        },
        error:function()
        {
			
		}    
    });
	
}
function rank(method)
{
	var list='';
	var list1='';
	var list2='';
	$.ajax({
        url: 'rank/'+method,
        type: "GET",
        dataType:'JSON',
        success: function(data) {
			for(i=0;i<data.resultset['Test'].length;i++)
			{
				list+='<div class="accordion-group"><div class="accordion-heading">';
                list+='<div class="content"><div class="date">';
                list+='<span class="red"><h3>'+parseInt(i+1)+'</h3></span>';
                list+='</div><div class="match">';
                list+='<h3 class="grey">'+data.resultset['Test'][i]['name']+'</h3>';
                list+='<h4 class="grey"> - '+data.resultset['Test'][i]['country']+'</h4>';
                list+='<h5>Rating: '+data.resultset['Test'][i]['rating']+'</h5>';
                list+='</div><div class="clearfix"></div></div></div></div>';
			}
			$('#'+method+'-ranking').html(list);
			for(i=0;i<data.resultset['ODI'].length;i++)
			{
                list1+='<div class="accordion-group"><div class="accordion-heading">';
                list1+='<div class="content"><div class="date">';
                list1+='<span class="red"><h3>'+parseInt(i+1)+'</h3></span>';
                list1+='</div><div class="match">';
                list1+='<h3 class="grey">'+data.resultset['ODI'][i]['name']+'</h3>';
                list1+='<h4 class="grey"> - '+data.resultset['ODI'][i]['country']+'</h4>';
                list1+='<h5>Rating: '+data.resultset['ODI'][i]['rating']+'</h5>';
                list1+='</div><div class="clearfix"></div></div></div></div>';
			}
			$('#'+method+'-ranking01').html(list1);
			for(i=0;i<data.resultset['T20'].length;i++)
			{
                list2+='<div class="accordion-group"><div class="accordion-heading">';
                list2+='<div class="content"><div class="date">';
                list2+='<span class="red"><h3>'+parseInt(i+1)+'</h3></span>';
                list2+='</div><div class="match">';
                list2+='<h3 class="grey">'+data.resultset['T20'][i]['name']+'</h3>';
                list2+='<h4 class="grey"> - '+data.resultset['T20'][i]['country']+'</h4>';
                list2+='<h5>Rating: '+data.resultset['T20'][i]['rating']+'</h5>';
                list2+='</div><div class="clearfix"></div></div></div></div>';
			}
			$('#'+method+'-ranking02').html(list2);
			/*$('#team').html(data);
			$('.teamMenu').click(function()
			{	
				$('.releanceTabBox').hide();
				$('#'+$(this).attr('link')).show();
				});*/
        },
        error:function()
        {
			
		}    
    });
	
}
function photos()
{
	var html='';
	$.ajax({
        url: 'photos',
        type: "GET",
        dataType:'JSON',
        success: function(data) {
			for(i=0;i<data.resultset.length;i++)
			{
				html+='<div class = "grid-item"><a target="_blank" href = "'+data.resultset[i]['src']+'" class = "lightbox"><img src="'+data.resultset[i]['icon']+'"></a>';
				html+='<p><span>'+data.resultset[i]['pubdate']+'</span></p><span>'+data.resultset[i]['description']+'</span></div>';
			}
			$('#photosgrid').html(html);
        },
        error:function()
        {
			
		}    
    });
	
}
function videos()
{
	var html='';
	$.ajax({
        url: 'videos',
        type: "GET",
        dataType:'JSON',
        success: function(data) {
			for(i=0;i<data.resultset.length;i++)
			{
				html+='<div class = "grid-item"><a target="_blank" href = "'+data.resultset[i]['link']+'" class = "lightbox"><img src="'+data.resultset[i]['src']+'"></a>';
				html+='<p><span>'+data.resultset[i]['pubdate']+'</span>-<span>'+data.resultset[i]['time']+'</span></p><p><b>'+data.resultset[i]['title']+'</b></p><span>'+data.resultset[i]['description']+'</span></div>';
			}
			$('#videosgrid').html(html);
        },
        error:function()
        {
			
		}    
    });
	
}
function article()
{
	$.ajax({
        url: 'article',
        type: "GET",
        dataType:'JSON',
        success: function(data) {
			html='<a class="pull-left" href="#"><img src="Images/img01_03.png"></a>';
  			html+='<div class="media-body"><h4 class="media-heading"><a href = "#">'+data.resultset[0]['title']+'</a></h4>';
            html+='<p>'+data.resultset[0]['content'].substring(0,800)+'....<a href="#">Read more</a></p></div>';
            $('#farticle').html(html);
            html='';
			for(i=1;i<data.resultset.length;i++)
			{
				html+='<li class="nav-menu"><a href="#">'+data.resultset[i]['title']+' - By '+data.resultset[0]['author']+'</a></li>';
                        
			//	html+='<div class = "grid-item"><a target="_blank" href = "'+data.resultset[i]['link']+'" class = "lightbox"><img src="'+data.resultset[i]['src']+'"></a>';
			//	html+='<p><span>'+data.resultset[i]['pubdate']+'</span>-<span>'+data.resultset[i]['time']+'</span></p><p><b>'+data.resultset[i]['title']+'</b></p><span>'+data.resultset[i]['description']+'</span></div>';
			}
			$('#rarticles').html(html);
        },
        error:function()
        {

		}    
    });
	
}

