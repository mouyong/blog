$(function(){
	$('div.first>p>br').remove();
	$('div.first>p').append('&nbsp;<b>...</b>');
	//后台添加
	$('td.first>p:eq(0)>br:eq(0)').remove();
	$('td.first>p').append('&nbsp;<b>...</b>');
});
