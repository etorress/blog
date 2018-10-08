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
                    $('#newmessage').append('<section class="comment"><section class="comment-avatar"><img width="48" height="48" src="user.png" /></section><section class="comment-autor" style="position: relative; left: 20px; top:-5px;"><strong>'+name+'</strong> <br/><small style="position: relative; left: 20px; top:-5px;">'+date_show+'</small></section><section class="comment-text" style="text-align: left;">'+comment+'</section></section>');
                }
        });
        return false;
    });
});
