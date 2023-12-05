var app = new function(){
    var combi1 = {
        origen: "UPP",
        destino: "Central",
        hora: new Date(2023, 4, 15, 12),
        costobase: 13,
        costoneto: 0,
        reservas: []
      };
      var combi2 = {
        origen: "UPP",
        destino: "Polideportivo",
        hora: new Date(2023, 4, 28, 7, 30),
        costobase: 13,
        costoneto: 0,
        reservas: []
      };
      var combi3 = {
        origen: "UPP",
        destino: "Sagun",
        hora: new Date(2023, 4, 21, 18),
        costobase: 13,
        costoneto: 0,
        reservas: []
      };
      var combi4 = {
        origen: "UPP",
        destino: "Central",
        hora: new Date(2023, 4, 28, 6, 50),
        costobase: 13,
        costoneto: 0,
        reservas: []
      };
      var combi5 = {
        origen: "UPP",
        destino: "Central",
        hora: new Date(2023, 5, 1, 19, 30),
        costobase: 13,
        costoneto: 0,
        reservas: []
      };
      var combi6 = {
        origen: "UPP",
        destino: "Central",
        hora: new Date(2023, 5, 1, 19, 30),
        costobase: 13,
        costoneto: 0,
        reservas: []
      };
      this.combis = [combi1, combi2, combi3, combi4, combi5 , combi6];
      for (var i = 0; i < this.combis.length; i++) {
        this.combis[i].costoneto = this.combis[i].costobase + aumentomanana + aumentofindesemana;
      }

      this.mostrarCombis = function() {
          var el = document.getElementById('documento');
          document.getElementById('documento').value = "";
          document.getElementById('datosvuelo').style.display = 'block';
          document.getElementById('vuelos').style.display = 'none';
          document.getElementById('menu1').style.display = 'none';
          document.getElementById('menu2').style.display = 'none';
          document.getElementById('btnback').style.display = 'block';
          
          var data = '<br>';
          if (this.combis.length > 0) {
            for (i = 0; i < this.combis.length; i++) {
              var hora = this.combis[i].hora.getHours() < 10 ? '0' + this.combis[i].hora.getHours() : this.combis[i].hora.getHours();
              var minutos = this.combis[i].hora.getMinutes() < 10 ? '0' + this.combis[i].hora.getMinutes() : this.combis[i].hora.getMinutes();
              data += '<tr>';
              data += '<td>CHOMBY # '+ (i+1) + ' ORIGEN: ' + this.combis[i].origen + ', DESTINO: ' + this.combis[i].destino + ', SALIDA: ' + this.combis[i].hora.toDateString() + " " + hora + ":" + minutos + '</td>';
              data += '<td><button onclick="app.Reservar(' + i + ')">Reservar</button></td>';
              data += '</tr>';
            }
          }
          document.getElementById('vuelos').innerHTML = data;
          document.getElementById('vuelos').style.display = 'block';
        };

        this.hola =function(){
            alert("Hello world!");
        };
}
