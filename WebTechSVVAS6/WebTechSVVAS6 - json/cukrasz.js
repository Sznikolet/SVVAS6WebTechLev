$(document).ready(function () {
    $("#read-json").click(function () {
      $.getJSON("cukrasz.json", function (data) {
        $('#stg').html('<h2>Cukrász szakképző</h2>');
        data.forEach(function (data) {
          $('#stg').append(`<p><b>Cím:</b></p>${data.cim.code} ${data.cim.city} ${data.cim.street}</p>`)
          $('#stg').append('<p><b>Telefonszámok:</b></p>');
  
          for (i = 0; i < data["phone number"].length; i++) {
            $('#stg').append(`<li>${data["phone number"][i].type} ${data["phone number"][i].number}</li>`);
          }
  
          $('#stg').append('<p><h3>Cukrász kurzusok 2024</h3><ul>');
          $('#stg').append(`<p><b>Kurzus: </b>${data.kurzus}</p>`);
          $('#stg').append(`<p><b>Szakács: </b>${data.szakacs}</p>`);
          $('#stg').append(`<p><b>Szakma: </b>${data.szakma}</p>`);
          $('#stg').append(`<b>Időpont:</b><br>&nbsp;&nbsp;Nap:&nbsp;${data.idopont.nap}<br> &nbsp;&nbspTól: &nbsp;${data.idopont.tol}<br>&nbsp;&nbsp;Ig: &nbsp;${data.idopont.ig}<br>`);
          $('#stg').append(`<p><b>Helyszín: </b>${data.helyszin}</p>`);
          $('#stg').append('<br>')
          $('#stg').append('<hr>')
          $('#stg').append('<br>')
        });
      });
    });
  });