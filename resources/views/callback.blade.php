
<div class="modal" id="callback">
    <div class="rf">
        <form name="form-callback">
            @csrf
            <div class="title-h3">Есть вопросы? Мы вам перезвоним!</div>
            <div class="form-group">
                <input name="user-name" type="text" class="form-control required" placeholder="Ваше имя *" />
            </div>
            <div class="form-group">
                <input name="tel" type="text" class="form-control required tel" placeholder="Телефон *" />
            </div>
            <div class="push10"></div>
            <div class="form-group">
                <textarea name="message" class="form-control" placeholder="Сообщение"></textarea>
            </div>
            <div class="push20"></div>
            <p><small><span class="red f16">*</span> - поля, обязательные для заполнения</small></p>
            <input type="submit" class="tplbutton btn big feedback" value="Отправить" />
        </form>
    </div>
</div>
