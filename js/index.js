function onChangeTujuan(value) {
	var harga = value.harga;
	$('#harga').numberbox('setValue', harga);
}
function onChangeHarga(value) {
	
}
function onChangeJmlBiaya(value) {
	
}
function onChangeHargaAsuransi(value) {
	$('#biayaAsuransi').numberbox('setValue', (value*0.035));
		
}
function onClickAsuransi(value) {
	var checked = $('#asuransi')[0].checked;
	if (checked) {
		$('#hargaAsuransi').numberbox({readonly: false});
	} else {
		$('#hargaAsuransi').numberbox({readonly: true});
		$('#hargaAsuransi').numberbox({value: ""});
		$('#biayaAsuransi').numberbox({value: ""});
	}
}
function onClickPackingKayu(value) {
	var checked = $('#packingKayu')[0].checked;
	if (checked) {

		$('#panjangPacking').numberbox({readonly: false});
		$('#lebarPacking').numberbox({readonly: false});
		$('#tinggiPacking').numberbox({readonly: false});

		$('#beratPackingKayu').numberbox({value: ($('#berat').numberbox('getValue')*1)});
		// $('#panjangPacking').numberbox({value: ($('#panjang').numberbox('getValue')*1)+4});
		// $('#lebarPacking').numberbox({value: ($('#lebar').numberbox('getValue')*1)+4});
		// $('#tinggiPacking').numberbox({value: ($('#tinggi').numberbox('getValue')*1)+4});
	} else {
		$('#beratPackingKayu').numberbox({value: ""});
		$('#panjangPacking').numberbox({value: ""});
		$('#lebarPacking').numberbox({value: ""});
		$('#tinggiPacking').numberbox({value: ""});
	}
}
function onChangeHasilVolum(value) {
	var volum = value*1;
	var kilogram = $('#berat').numberbox('getValue')*1;
	if (volum > kilogram) {		
		volum = volum;
	}
	$('#charge').numberbox('setValue', volum);
}
function onChangeVolumKayu(value) {
	var panjang = $('#panjangPacking').numberbox('getValue')*1;
	var tinggi = $('#lebarPacking').numberbox('getValue')*1;
	var lebar = $('#tinggiPacking').numberbox('getValue')*1;

	if (panjang != 0 && tinggi != 0 && lebar != 0) {
		var val = 6000;
		if ($('#layanan').combobox('getValue') == "darat") {
			val = 4000;
		}
		val = ((panjang * tinggi * lebar) / val)
		$('#beratPacking').numberbox('setValue', val);
		$('#biaya').numberbox('setValue', (((panjang + tinggi + lebar) / 3) * 2000));
	}
}
function onChangeVolum(value) {
	var panjang = $('#panjang').numberbox('getValue');
	var tinggi = $('#lebar').numberbox('getValue');
	var lebar = $('#tinggi').numberbox('getValue');

	if (panjang != 0 && tinggi != 0 && lebar != 0) {
		var val = 6000;
		if ($('#layanan').combobox('getValue') == "darat") {
			val = 4000;
		}
		val = ((panjang * tinggi * lebar) / val)
		$('#hasilVolum').numberbox('setValue', val);
	}
}
function onChangeCharge(value) {
	var jml = value * $('#harga').numberbox('getValue');
	$('#jmlBiaya').numberbox('setValue', jml);
}
function onChangeBerat(value) {
	var volum = value*1;
	var kilogram = $('#berat').numberbox('getValue')*1;
	if (volum > kilogram) {		
		volum = volum;
	}
	$('#charge').numberbox('setValue', volum);
}