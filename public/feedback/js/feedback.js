/**
 * Отправка форм.
 *
 */

function send(data) {
       $.ajax({
            url: "feedback_h/",
            type:"POST",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: data,
            success:function(response){
                $.fancybox.open([{ href : '#responseMessage', padding : 0 }] );
                $('#responseMessage .modal-content').removeClass('error').html(response);
            },
        });
}

/**
 * Обработчик кнопки форм.
 * Кнопка должна быть внутри тегов <form> c классом .feedback
 * будет отправлено любое кол-во полей, кроме файлов
 *
 */


$(document).on('click', '.feedback', function (e) {
    e.preventDefault();
    send($(this).closest('form').serialize());
});

$(document).on('click', '.callback', function (e) {
    e.preventDefault();
    send($(this).closest('form').serialize());
});
