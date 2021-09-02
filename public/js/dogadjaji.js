$(document).ready(function () {
    const dogadjajBody = $("#dogadjaji tbody");
    const baseURL = "http://127.0.0.1:8000";

    $.ajax({
        type: "GET",
        url: baseURL + "/api/dogadjaji/get",
        dataType: "json",
        success: function (res) {
            const dogadjaji = res.dogadjaji;
            dogadjajBody.html("");

            dogadjaji.forEach((dogadjaj) => {
                dogadjajBody.append(
                    `
                <tr>
                  <td>${dogadjaj.naziv}</td>
                  <td>${dogadjaj.tip}</td>
                  <td>${dogadjaj.broj_mesta}</td>
                  
                  <td>
                  <a href="${
                      baseURL + "/dogadjaj/" + dogadjaj.id
                  }" class="btn btn-info btn-block pregled">Pregledaj</a>
                 
                  </td>
              `
                );
            });
        },
    });
});
