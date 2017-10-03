var allcompanies = {
  "data": [{
    "numericalId": 36,
    "name": "Vivenda do Camarão BarraShopping",
    "displayName": "Vivenda do Camarão",
    "shopping": "BarraShopping"
  }, {
    "numericalId": 31,
    "name": "Baked Potato Vila Olímpia",
    "displayName": "Shopping Vila Olímpia"
  }, {
    "numericalId": 29,
    "name": "Fry's BarraShopping",
    "displayName": "Fry's",
    "shopping": "BarraShopping"
  }, {
    "numericalId": 89,
    "name": "Crepelocks BarraShopping",
    "displayName": "Crepelocks",
    "shopping": "BarraShopping"
  }, {
    "numericalId": 92,
    "name": "Bibi BarraShopping",
    "displayName": "Bibi",
    "shopping": "BarraShopping"
  }, {
    "numericalId": 94,
    "name": "Montana Grill BarraShopping",
    "displayName": "Montana Grill",
    "shopping": "BarraShopping"
  }, {
    "numericalId": 102,
    "name": "Mister Pizza BarraShopping",
    "displayName": "Montana Grill",
    "shopping": "BarraShopping"
  }, {
    "numericalId": 103,
    "name": "Mr. Maki BarraShopping",
    "displayName": "Mr. Maki",
    "shopping": "BarraShopping"
  }, {
    "numericalId": 108,
    "name": "Creps BarraShopping",
    "displayName": "Creps",
    "shopping": "BarraShopping"
  }, {
    "numericalId": 100,
    "name": "Subway Vila Olímpia",
    "displayName": "Subway",
    "shopping": "Vila Olímpia"
  }, {
    "numericalId": 114,
    "name": "Rizzo Vila Olímpia",
    "displayName": "Rizzo",
    "shopping": "Vila Olímpia"
  }, {
    "numericalId": 113,
    "name": "Mania de Churrasco Vila Olímpia",
    "displayName": "Mania de Churrasco",
    "shopping": "Vila Olímpia"
  }, {
    "numericalId": 101,
    "name": "Patroni Pizza Vila Olímpia",
    "displayName": "Patroni Pizza",
    "shopping": "Vila Olímpia"
  }, {
    "numericalId": 121,
    "name": "Gendai Vila Olímpia",
    "displayName": "Gendai",
    "shopping": "Vila Olímpia"
  }, {
    "numericalId": 120,
    "name": "Pizza Hut Vila Olímpia",
    "displayName": "Pizza Hut",
    "shopping": "Vila Olímpia"
  }, {
    "numericalId": 127,
    "name": "Rock and Ribs Vila Olímpia",
    "displayName": "Rock and Ribs",
    "shopping": "Vila Olímpia"
  }, {
    "numericalId": 126,
    "name": "Spoleto Vila Olímpia",
    "displayName": "Spoleto",
    "shopping": "Vila Olímpia"
  }]
}

var companies = {};

companies = {
  showCompany: function(elem, fila, qnt, allcompanies) {
    $(".all-company ul").append("<li id='" + elem.numericalId + "'><strong> " + elem.numericalId + " </strong> " + elem.name + "<b class='" + elem.status + "'>" + elem.status + "</b></li>");

    if (fila === qnt) {
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

          setTimeout(function() {
            console.log('veio aqui 123');
            companies.loadComapny();
          }, 300000);
        }
      });

    }

  },
  statusCompany: function(elem, qnt, fila, allcompanies) {

    $.ajax({
      cache: false,
      dataType: "json",
      type: "GET",
      url: "http://api.onyo.com/v1/mobile/company/" + elem.numericalId + "/online",
      success: function(data) {

        if (data.online) {
          elem.status = "online";
        } else {
          elem.status = "offline";
        }

        companies.showCompany(elem, fila, qnt, allcompanies);
      },
      error: function(data) {

        console.error(data);
        return true;
      }

    });
  },
  loadComapny: function() {
    $(".all-company ul").html("").hide();
    var qnt = allcompanies.data.length,
      fila = 0;

    for (var i = 0; i < allcompanies.data.length; i++) {
      var elem = allcompanies.data[i];
      fila++;

      this.statusCompany(elem, qnt, fila, allcompanies);
    }
  }
};

companies.init = function() {
  companies.loadComapny();
}();
