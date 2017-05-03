$bobotHarga = 0;
$bobotSensor = 0;
$bobotISO = 0;
$bobotResfoto = 0;
$bobotResvideo = 0;
$bobotFitur = 0;
$totalnilai = 0;

$(function() {
	$('#harga').on("change",function () {
        var nilai = parseInt($('#harga option:selected').val());
        console.log(nilai);
        $bobotHarga = nilai;
       	countTotal();
        $('#total-bobot').html($totalnilai);
    });
    $('#sensor').on("change",function () {
        var nilai = parseInt($('#sensor option:selected').val());
        console.log(nilai);
        $bobotISO = nilai;
        countTotal();
        $('#total-bobot').html($totalnilai);
    });
    $('#iso').on("change",function () {
        var nilai = parseInt($('#iso option:selected').val());
        console.log(nilai);
        $bobotResfoto = nilai;
        countTotal();
        $('#total-bobot').html($totalnilai);
    });
    $('#resfoto').on("change",function () {
        var nilai = parseInt($('#resfoto option:selected').val());
        console.log(nilai);
        $bobotSensor = nilai;
        countTotal();
        $('#total-bobot').html($totalnilai);
    });
    $('#resvideo').on("change",function () {
        var nilai = parseInt($('#resvideo option:selected').val());
        console.log(nilai);
        $bobotResvideo = nilai;
        countTotal();
        $('#total-bobot').html($totalnilai);
    });
    $('#fitur').on("change",function () {
        var nilai = parseInt($('#fitur option:selected').val());
        console.log(nilai);
        $bobotFitur = nilai;
        countTotal();
        $('#total-bobot').html($totalnilai);
    });
});

function countTotal(){
	$totalnilai = $bobotHarga + $bobotSensor + $bobotISO + $bobotResfoto
	+$bobotResvideo + $bobotFitur;

	if($totalnilai != 10){
		 $(':input[type="submit"]').prop('disabled', true);
		 $('#warning').html('Total nilai bobot harus 10!');
	}else{
		 $(':input[type="submit"]').prop('disabled', false);
		 $('#warning').html('');
	}

	console.log($totalnilai)
};