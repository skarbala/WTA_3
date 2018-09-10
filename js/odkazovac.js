var detail = $('div.detail div.content');
var loader = $('.loader');
detail.hide();

$("li.sin").click(function (event) {
    event.preventDefault();
    var key = $(this).find('a').attr("data");
    loader.fadeIn();
    detail.hide();
    setTimeout(function () {
        loadDetail(key);
    }, 800);

});

$('#confirm').click(function () {
    $.ajax({
        url: baseURL + 'erase-all-sins.php',
        type: 'GET'
    })
        .done(function () {
            $("#sinCityModal").modal('hide');
            $("div.sinsListArea").remove();
            $("h3.sin-header span").text("(0)");
        })
        .fail(function (msg) {
        })
        .always(function () {
        });
});

function fillInDetail(data) {
    detail.find('div.title').find('h4').text(data.title);
    detail.find('div.title').find('h4.recipent').text(data.author);
    detail.find('p').text(data.message);
    detail.find('div.title').find('span.date').text(data.creation_date);
    detail.find('button').attr("data", data.id);
    var tags = detail.find('ul');
    if (data.tags) {
        data.tags.forEach(function (element) {
            tags.append('<li>#' + element + '</li>');
        });
    } else {
        tags.append('<li>no tags</li>')
    }
}

function loadDetail(key) {
    $.ajax({
        url: baseURL + 'get-detail.php',
        data: {key: key},
        dataType: "json"
    })
        .done(function (data) {
            loader.fadeOut(200);
            fillInDetail(data);
            detail.fadeIn(500);

        })
        .fail(function (msg) {
            console.log(msg);
        })
        .always(function () {
        });
}


$('#confirm_delete_one').click(function () {
    var key = detail.find('button').attr('data');
    console.log(key);
    $.ajax({
        url: baseURL + 'delete.php',
        data: {key: key},
        type: 'POST',
        dataType: "json"
    })
        .done(function (data) {
            console.log(data);
            $("#myModal").modal('hide');
            $('article#' + data.id).hide();
        })
        .fail(function (msg) {
        })
        .always(function () {
        });
});

