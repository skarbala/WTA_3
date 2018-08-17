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

function fillInDetail(data) {
    detail.find('div.title').find('h4').text(data.title);
    detail.find('div.title').find('h4.recipent').text(data.author);
    detail.find('p').text(data.message);
    detail.find('div.title').find('span.date').text(data.creation_date);
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