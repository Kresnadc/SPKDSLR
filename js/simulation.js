$(function() {
	$('#img-canon').click(function() {
		console.log("sadad");
		$('#rad-canon').prop("checked", true);
	});
	$('#img-nikon').click(function() {
		$('#rad-nikon').prop("checked", true);
	});
});