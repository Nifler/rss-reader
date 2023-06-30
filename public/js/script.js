$("#send").on( "click", function( event ) {
    url = $("#link").val();

    $.get( "/get-rss", { link: url } )
        .done(function( data ) {
            $('#title').empty();
            $('#small-title').empty();
            $('#content').empty();
            $('#error').empty();
            if (data.success) {
                $( "#title" ).append(data.rssData.title);
                $( "#small-title" ).append(data.rssData.small_title);
                $( "#content" ).append(data.rssData.content);
            } else {
                $( "#error" ).append(data.message);
            }
        });
});
