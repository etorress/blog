$(document).ready(function() {

    $("#enviar-btn").click(function() {

        var name = $("input#name").val();
        var comment = $("textarea#comment").val();
        var now = new Date();
        var date_show = now.getDate() + '-' + now.getMonth() + '-' + now.getFullYear() + ' ' + now.getHours() + ':' + + now.getMinutes() + ':' + + now.getSeconds();

        if (name == '') {
            alert('Debe añadir su nombre.');
            return false;
        }

        if (comment == '') {
            alert('Debe añadir un comentario.');
            return false;
        }


        var dataString = 'name=' + name + '&comment=' + comment;

        $.ajax({
                type: "POST",
                url: "vendor/php/add_comment.php",
                data: dataString,
                success: function() {
                    $('#newmessage').append('<div class="comment"><div class="comment-avatar"><img width="48" height="48" src="user.png" /></div><div class="comment-autor"><strong>'+name+'</strong> <br/><small>'+date_show+'</small></div><div class="comment-text">'+comment+'</div></div>');
                }
        });
        return false;
    });
});
