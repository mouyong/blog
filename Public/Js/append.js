$(function(){
	$('div.summary>p>br').remove();
	$('div.summary>p').append('&nbsp;<b>...</b>');
	//后台添加
	$('td.summary>p:eq(0)>br:eq(0)').remove();
	$('td.summary>p').append('&nbsp;<b>...</b>');
});
