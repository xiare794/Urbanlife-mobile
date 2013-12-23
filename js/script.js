// JavaScript Document

$(function(){
	
	$('#GalleryContent').load("getGallery.php",function(data){
			console.log("load GalleryContent");
			});
			
	$('#NewsPageContent').load('getNews.php',function(){
		$('.newsClick').click(function(){
			console.log("newsClick");
			console.log($(this).attr('data'));
			$('#newsItemcontent').load('getNews.php?uid='+$(this).attr('data'),function(data){
			});
		});
	});
	
	$('#pageStoreList').load('getStores.php',function(){
		$('.newsClick').click(function(){
			console.log("newsClick");
			console.log($(this).attr('data'));
			$('#newsItemcontent').load('getNews.php?uid='+$(this).attr('data'),function(data){
			});
		});
	});
	
	/*$('#featurelist').load('getFeatures.php',function(){
		$('.newsClick').click(function(){
			console.log("newsClick");
			console.log($(this).attr('data'));
			$('#newsItemcontent').load('getNews.php?uid='+$(this).attr('data'));
			//$('#featureListGot').load('getFeatures.php');
		});
		console.log($(".newsClick"));
		//$('#featurelist').listview('refresh');
	});
	*/
	
	
	$('#featureListGot').load('getFeatures.php',function(){
		console.log("刷新特辑列表");
		$('#featureListGot').listview('refresh');
		$('.featureClick').click(function(){
			//$('#pageMagazineConent').load("test");
			console.log( $(this).attr("data"));
			//$( ":mobile-pagecontainer" ).pagecontainer( "load", pageUrl, { showLoadMsg: false } );
			$('#pageMagazineConent').load('getMagazine.php?uid='+ $(this).attr("data"),function(data){
				//add code here
				//$('#pageMagazineConent  img').remove();
				
				$('#pageMagazine').trigger( "create" );
				
				$('div#pageMagazine').live('pageshow', function(e){
					$("div#Gallery a", e.target).photoSwipe()
					return true;
				});
				
			});
		});
	});
	
	//var list = $().load('getFeatures.php');
	//$('#featureListGot').append(list);
	console.log("尺寸"+$(document).width());
	//document.addEventListener('DOMContentLoaded', function(){ Code.photoSwipe('a', '#Gallery'); }, false);
	//$(document).ready(function(){ $("#Gallery a").photoSwipe(); });
});