var allcompanies = {
	"data": [{
		"numericalId": 36,
		"name": "Vivenda do Camarão BarraShopping",
		"displayName": "Vivenda do Camarão"
	}, {
		"numericalId": 29,
		"name": "Fry's BarraShopping",
		"displayName": "Fry's"
	}, {
		"numericalId": 89,
		"name": "Crepelocks BarraShopping",
		"displayName": "Crepelocks"
	}, {
		"numericalId": 92,
		"name": "Bibi BarraShopping",
		"displayName": "Bibi"
	}, {
		"numericalId": 94,
		"name": "Montana Grill BarraShopping",
		"displayName": "Montana Grill"
	}, {
		"numericalId": 102,
		"name": "Mister Pizza BarraShopping",
		"displayName": "Montana Grill"
	}, {
		"numericalId": 103,
		"name": "Mr. Maki BarraShopping",
		"displayName": "Mr. Maki"
	}, {
		"numericalId": 108,
		"name": "Creps BarraShopping",
		"displayName": "Creps"
	}, {
		"numericalId": 100,
		"name": "Subway Vila Olímpia",
		"displayName": "Subway"
	}]
}

var companies = {};

companies = {
	showCompany : function ( elem, fila, qnt ){

		$(".all-company ul").append("<li id='" + elem.numericalId + "'><strong> " + elem.numericalId + " </strong> " + elem.name + "<b class='" + elem.status + "'>" + elem.status + "</b></li>");
		if (fila===qnt) {
			var end = 0,
			total = $(".all-company ul li").length;

			$(".all-company ul li").sort(function(a, b) {
				return parseInt(a.id) - parseInt(b.id);
			}).each(function() {
				end++;
				var elem = $(this);

				elem.remove();
				$(elem).appendTo(".all-company ul");
				if (end === total) {

					$(".all-company ul").show();

					setTimeout(function(){
						companies.loadComapny();
					}, 300000);
				}
			});
		}

	},
	statusCompany : function ( elem, qnt, fila){

		$.ajax({
			cache: false,
			dataType: "json",
			type: "GET",
			url: "http://api.onyo.com/v1/mobile/company/" + elem.numericalId + "/online",
			success: function( data ) {

				if (data.online) {
					elem.status = "online";
				} else {
					elem.status = "offline";
				}

				companies.showCompany(elem, fila, qnt);
			},
			error: function( data ) {

				console.error(data);
				return true;
			}

		});
	},
	loadComapny : function (){
		$(".all-company ul").html("").hide();
		var qnt = allcompanies.data.length,
		fila = 0;

		for (var i = 0; i < allcompanies.data.length; i++) {
			var elem = allcompanies.data[i];
			fila++;

			this.statusCompany(elem, qnt, fila);
		}
	}
};

companies.init = function () {
	companies.loadComapny();
}();
