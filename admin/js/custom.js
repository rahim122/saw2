var appMaster = {
	menuToggler: function(){
		// Menu Toggler
	    $('#menuToggler').on('click', function(e) {
	    	e.preventDefault();
	    	/* Act on the event */
	    	$('#wrapper').toggleClass('toggled');
	    });
	    
	},
	anotherFunction: function(){
		// Add you custom here and don't forget to change the object title (anotherFunction)
	}
}
$(document).ready( function(){
	//Penilaian Kapasitas Intelektual
	$(document).on('change', '#pf,#pt,#pk', function() {
		var a = $("#pf").val();
		var b = $("#pt").val();
		var c = $("#pk").val();
		if (a == '') {a = 0};
		if (b == '') {b = 0};
		if (c == '') {c = 0};
		a = parseInt(a);
		b = parseInt(b);
		c = parseInt(c);
		var d = parseInt(a+b+c);
		$("#ki").val(d);
	});

	//Penilaian Kapasitas Kepribadian
	$(document).on('change', '#di,#mo,#et,#ke', function() {
		var a = $("#di").val();
		var b = $("#mo").val();
		var c = $("#et").val();
		var d = $("#ke").val();
		if (a == '') {a = 0};
		if (b == '') {b = 0};
		if (c == '') {c = 0};
		if (d == '') {d = 0};
		a = parseInt(a);
		b = parseInt(b);
		c = parseInt(c);
		d = parseInt(d);
		var e = parseInt(a+b+c+d);
		$("#kk").val(e);
	});

	//Penilaian Pola Kerja
	$(document).on('change', '#si,#an,#kec,#ta,#ker,#tj', function() {
		var a = $('#si').val();
		var b = $('#an').val();
		var c = $('#kec').val();
		var d = $('#ta').val();
		var e = $('#ker').val();
		var f = $('#tj').val();
		if (a == '') {a = 0};
		if (b == '') {b = 0};
		if (c == '') {c = 0};
		if (d == '') {d = 0};
		if (f == '') {f = 0};
		if (e == '') {e = 0};
		a = parseInt(a);
		b = parseInt(b);
		c = parseInt(c);
		d = parseInt(d);
		e = parseInt(e);
		f = parseInt(f);
		var g = parseInt(a+b+c+d+e+f);
		$("#npk").val(g);
	});

	//Penilaian Kepemimpinan
	$(document).on('change', '#ks,#ma,#pi,#ket', function() {
		var a = $("#ks").val();
		var b = $("#ma").val();
		var c = $("#pi").val();
		var d = $("#ket").val();
		if (a == '') {a = 0};
		if (b == '') {b = 0};
		if (c == '') {c = 0};
		if (d == '') {d = 0};
		a = parseInt(a);
		b = parseInt(b);
		c = parseInt(c);
		d = parseInt(d);
		var e = parseInt(a+b+c+d);
		$("#nkp").val(e);
	});
	
});