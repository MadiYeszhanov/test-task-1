




let like_counter = $("#likes");
let watch_counter = $("#watched");



$("#like_click").click(function() {
    $.post(`${article_id}/like`,
        function(data) {
            like_counter.html(data.data);
        }
    );
});

setTimeout(function() {
    $.post(`${article_id}/watch`,
        function(data) {
            watch_counter.html(data.data);
        }
    );
}, 5000);
