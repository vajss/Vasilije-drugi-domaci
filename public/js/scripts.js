$(document).ready(function () {
    $("#prijaviSeForma").submit(function (e) {
        e.preventDefault();

        const ime_prezime = $("#ime_prezime").val();
        const broj_sobe = $("#broj_sobe").val();
        const putovanje_id = $("#putovanje_id").val();

        $.ajax({
            type: "POST",
            url: "http://127.0.0.1:8000/api/studenti/store",
            data: {
                ime_prezime,
                broj_sobe,
                putovanje_id,
            },
            dataType: "json",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            success: function (response) {
                alert(response.message);
            },
        });
    });

    $("body").on("click", ".destroy", function (e) {
        let id = $(this).attr("id");
        $.ajax({
            type: "DELETE",
            url: "http://127.0.0.1:8000/api/putovanja/destroy/" + id,
            dataType: "json",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            success: function (response) {
                alert(response.message);
            },
        });
    });
});
