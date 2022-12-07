<div class="feedback-section">
    <div class="push60"></div>

    <div class="container">
        <div class="text-center">
            <div class="title-h1 bold">Запись на приём</div>
            <div class="subtitle-h1">
                Значимость этих проблем настолько очевидна, что дальнейшее развитие <br/>
                различных форм деятельности представляет
            </div>
            <div class="push10"></div>

            <div class="rf">
                <form name="form-feedback">
                    @csrf
                    <div class="row min">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input name="user-name" type="text" class="form-control required"
                                       placeholder="Имя *"/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input name="last-name" type="text" class="form-control required"
                                       placeholder="Фамилия *"/>
                            </div>
                        </div>
                    </div>
                    <div class="row min">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input name="tel" type="text" class="form-control tel required"
                                       placeholder="Телефон *"/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="Email"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="message" class="form-control" placeholder="Ваше сообщение"></textarea>
                    </div>
                    <div class="push10"></div>
                    <button type="submit" class="btn min feedback"><i class="fa fa-paper-plane"
                                                                      aria-hidden="true"></i> Отправить заявку
                    </button>
                </form>
            </div>

        </div>
    </div>

    <div class="push60"></div>
</div>
