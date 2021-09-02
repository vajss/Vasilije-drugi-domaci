$(document).ready(function () {
    const putovanjaBody = $("#putovanja tbody");
    const baseURL = "http://127.0.0.1:8000";

    $.ajax({
        type: "GET",
        url: baseURL + "/api/putovanja/get",
        dataType: "json",
        success: function (res) {
            const putovanja = res.putovanja;
            putovanjaBody.html("");

            putovanja.forEach((putovanje) => {
                putovanjaBody.append(
                    `
                <tr>
                  <td>${putovanje.domacinLG}</td>
                  <td>${putovanje.hotel}</td>
                  <td>
                  <a href="${baseURL + "/dogadjaj/" + putovanje.dogadjaj.id}" >${
                        putovanje.dogadjaj.naziv
                    }</a></td>
                  <td>${putovanje.datum_pocetka}</td>
                  <td>${putovanje.cena}</td>
                  
                  <td>
                  <a href="${
                      baseURL + "/putovanje/" + putovanje.id
                  }" class="btn btn-info btn-block">Pregledaj</a>
                  <button id=${
                      putovanje.id
                  } class="btn btn-danger btn-block destroy">Obrisi</button>
                 
                  </td>
              `
                );
            });
        },
    });
});
