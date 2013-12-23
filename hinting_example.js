// JavaScript Document

$(function(){
	//获取具体文章内容
    /*$.ajax({                                      
      url: 'http://localhost/dreamweaver_site/jsonApi.php',                  //the script to call to get data          
      data: ' ',                        //you can insert url argumnets here to pass to api.php
                                       //for example "id=5&parent=6"
      dataType: 'html',                //data format      
      success: function(data)          //on recieve of reply
      {
       	console.log(data);
		$('#FeaturePageContent').html(data);
       	//需要user
        
      },
      error: function(jqXHR,textStatus,errorThrown){
      	console.log("error");
      	console.log(jqXHR);
      	console.log(textStatus);
      	console.log(errorThrown);
      } 
    });
	*/
	$('#FeaturePageContent').load('getNews.php',function(){
		$('.newsClick').click(function(){
			console.log("newsClick");
			console.log($(this).attr('data'));
			$('#newsItemcontent').load('getNews.php?uid='+$(this).attr('data'));
		});
		console.log($(".newsClick"));
	});
	
	$(document).bind("mobileinit",function(){
		$.mobile.page.prototype.options.addBackBtn="ture";
	});	
	console.log("where AM I");
	
	/*var deviceAgent = navigator.userAgent.toLowerCase();
	 var agentID = deviceAgent.match(/(iphone|ipod|ipad|android)/);
	 if(agentID.indexOf("iphone")>=0){
	  alert("iphone");
	 }
	 if(agentID.indexOf("ipod")>=0){
	  alert("ipod");
	 }
	 if(agentID.indexOf("ipad")>=0){
	  alert("ipad");
	 }
	 if(agentID.indexOf("android")>=0){
	  alert("android");
	 }*/
});