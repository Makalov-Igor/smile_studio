
<div class="modal" id="reviews_form">
    <div class="rf">
        <form name="form-callback">
            @csrf
            <div class="title-h3">Расскажите пожалуйста, что думаете о нас?</div>
            <div class="form-group">
                <input name="user-name" type="text" class="form-control required" placeholder="Ваше имя *" />
            </div>
            <div class="push10"></div>
            <div class="form-group">
                <textarea name="message" class="form-control required" placeholder="Ваше мнение *"></textarea>
            </div>
            <div class="push20"></div>
            <p><small><span class="red f16">*</span> - поля, обязательные для заполнения</small></p>
            <input type="submit" class="tplbutton btn big reviews" value="Отправить отзыв" />
        </form>
    </div>
</div>
