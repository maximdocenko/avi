<form name="add" method="post" action="/success" enctype="multipart/form-data">
    <label>Фамилия Имя Отчество <span class="star">*</span></label>
    <input data-required="required" class="form-control" type="text" name="fio">

    <label>Фотография врача: (jpg, jpeg, png) <span class="star">*</span></label>
    <input data-required="required" class="form-control" type="file" name="medPhoto">

    <label>Мед.диплом (pdf, docx, xls, xlsx, txt, doc, jpg, jpeg, png) <span class="star">*</span></label>
    <input data-required="required" class="form-control" type="file" name="medDocument">

    <label>Документ по специализации (pdf, docx, xls, xlsx, txt, doc, jpg, jpeg, png) <span class="star">*</span></label>
    <input data-required="required" class="form-control" type="file" name="specDocument">

    <label>Образование (институт,ординатура, аспирантура) <span class="star">*</span></label>
    <input data-required="required" class="form-control" type="text" name="education">

    <label>Опыт работы <span class="star">*</span></label>
    <input data-required="required" class="form-control" type="text" name="experience">

    <label>Курсы повышение квалификации</label>
    <input class="form-control" type="text" name="courses">

    <label>Специальность <span class="star">*</span></label>
    <select data-required="required" name="cat" class="form-control">
        <option value="">Не выбрано</option>
        <option>Акушер</option>
        <option>Аллерголог</option>
        <option>Андролог</option>
        <option>Венеролог</option>
        <option>Гастроэнтеролог</option>
        <option>Гематолог</option>
        <option>Гепатолог</option>
        <option>Гинеколог</option>
        <option>Дерматолог</option>
        <option>Диагностика МРТ,МСКТ</option>
        <option>Иммунолог</option>
        <option>Инфекционист</option>
        <option>Кардиолог</option>
        <option>Косметолог</option>
        <option>Логопед</option>
        <option>Лор (отоларинголог)</option>
        <option>Маммолог</option>
        <option>Мануальный терапевт</option>
        <option>Массажист</option>
        <option>Нарколог</option>
        <option>Невролог</option>
        <option>Нейрохирург</option>
        <option>Нефролог</option>
        <option>Онколог</option>
        <option>Ортопед</option>
        <option>Офтальмолог</option>
        <option>Педиатр</option>
        <option>Пластический хирург</option>
        <option>Проктолог</option>
        <option>Психиатр</option>
        <option>Психолог</option>
        <option>Психотерапевт</option>
        <option>Пульмонолог</option>
        <option>Ревматолог</option>
        <option>Репродуктолог</option>
        <option>Сексолог</option>
        <option>Стоматолог</option>
        <option>Терапевт</option>
        <option>УЗИ-специалист</option>
        <option>Уролог</option>
        <option>Физиотерапевт</option>
        <option>Хирург</option>
        <option>Эндокринолог</option>
        <option>Педиатр</option>
    </select>

    <label>Регион <span class="star">*</span></label>
    <select data-required="required" name="region" class="form-control">
        <option value="">Не выбрано</option>
        <option>Ташкент</option>
        <option>Андижанская область</option>
        <option>Бухарская область</option>
        <option>Джизакская область</option>
        <option>Кашкадарьинская область</option>
        <option>Наманганская область</option>
        <option>Навоийская область</option>
        <option>Самаркандская область</option>
        <option>Сурхандарьинская область</option>
        <option>Сырдарьинская область</option>
        <option>Ташкентская область</option>
        <option>Ферганская область</option>
        <option>Хорезмская область</option>
        <option>Республика Каракалпакстан</option>
    </select>
    <div class="rayon-972">
    <label>Район Ташкента <span class="star">*</span></label>
    <select data-required="required" class="form-control" name="rayon">
        <option value="">Не выбрано</option>
        <option>Алмазарский</option>
        <option>Бектемирский</option>
        <option>Мирзо-улугбекский</option>
        <option>Сабир-рахимовский</option>
        <option>Сергелийский</option>
        <option>Учтепинский</option>
        <option>Хамзинский</option>
        <option>Чиланзарский</option>
        <option>Шайхантахурский</option>
        <option>Мирабадский</option>
        <option>Юнусабадский</option>
        <option>Яккасарайский</option>
    </select>
    </div>

    <label>Адрес медицинского учреждения <span class="star">*</span></label>
    <input data-required="required" type="text" name="place_address" class="form-control">

    <label>Ориентир</label>
    <input type="text" name="reference_point" class="form-control">

    <label>Телефон медицинского учреждения</label>
    <input type="text" name="place_phone" class="form-control">

    <label>Телефон мобильный доктора ( по желанию будет скрыт от общего доступа, только для модераторов сайта) <span class="star">*</span></label>
    <input data-required="required" type="text" name="doctor_phone" class="form-control">

    <label>e-mail доктора</label>
    <input type="text" name="doctor_email" class="form-control">

    <label>e-mail медицинского учреждения</label>
    <input type="text" name="place_email" class="form-control">

    <label>Страничка в Фейсбук</label>
    <input type="text" name="facebook_page" class="form-control">

    <label>Учреждение, где работает доктор</label>
    <select class="form-control" name="work_place">
        <option value="">Не выбрано</option>
        <option>частное</option>
        <option>государственное</option>
        <option>частное/ государственное</option>
    </select>

    <label>Стаж работы:</label>
    <select data-required="required" class="form-control" name="experience2">
        <option value="">Не выбрано</option>
        <option>до 10 лет</option>
        <option>10-20 лет</option>
        <option>20-30 лет</option>
        <option>свыше 30 лет</option>
    </select>


    <label>Доктор взрослый / детский <span class="star">*</span></label>
    <select data-required="required" class="form-control" name="doctor_type">
        <option value="">Не выбрано</option>
        <option>взрослый</option>
        <option>детский</option>
    </select>

    <label>Категория врача: <span class="star">*</span></label>
    <select data-required="required" class="form-control" name="doctor_rank">
        <option value="">Не выбрано</option>
        <option>высшая</option>
        <option>первая</option>
        <option>вторая</option>
        <option>третья</option>
    </select>

    <label>Научная степень: <span class="star">*</span></label>
    <select data-required="required" class="form-control" name="rank">
        <option>Без научной степени</option>
        <option>доктор медицинских наук</option>
        <option>кандидат медицинских наук</option>
    </select>

    <div class="form-group checkboxes">
        <label>Дни и время приема:</label>
        <span>Понедельник: <input name="days_of_admission[]" value="Понедельник" type="checkbox"></span>
        <div class="checkbox-field-control">
            Врямя приема с <input placeholder="" name="days_time_from_1" type="text" class="days_time"> до <input placeholder="" name="days_time_to_1" type="text" class="days_time">
        </div><br>
        <span>Вторник: <input name="days_of_admission[]" value="Вторник" type="checkbox"></span>
        <div class="checkbox-field-control">
            Врямя приема с <input placeholder="" name="days_time_from_2" type="text" class="days_time"> до <input placeholder="" name="days_time_to_2" type="text" class="days_time">
        </div><br>
        <span>Среда: <input name="days_of_admission[]" value="Среда" type="checkbox"></span>
        <div class="checkbox-field-control">
            Врямя приема с <input placeholder="" name="days_time_from_3" type="text" class="days_time"> до <input placeholder="" name="days_time_to_3" type="text" class="days_time">
        </div><br>
        <span>Четверг: <input name="days_of_admission[]" value="Четверг" type="checkbox"></span>
        <div class="checkbox-field-control">
            Врямя приема с <input placeholder="" name="days_time_from_4" type="text" class="days_time"> до <input placeholder="" name="days_time_to_4" type="text" class="days_time">
        </div><br>
        <span>Пятница: <input name="days_of_admission[]" value="Пятница" type="checkbox"></span>
        <div class="checkbox-field-control">
            Врямя приема с <input placeholder="" name="days_time_from_5" type="text" class="days_time"> до <input placeholder="" name="days_time_to_5" type="text" class="days_time">
        </div><br>
        <span>Суббота: <input name="days_of_admission[]" value="Суббота" type="checkbox"></span>
        <div class="checkbox-field-control">
            Врямя приема с <input placeholder="" name="days_time_from_6" type="text" class="days_time"> до <input placeholder="" name="days_time_to_6" type="text" class="days_time">
        </div><br>
        <span>Воскресенье: <input name="days_of_admission[]" value="Воскресенье" type="checkbox"></span>
        <div class="checkbox-field-control">
            Врямя приема с <input placeholder="" name="days_time_from_7" type="text" class="days_time"> до <input placeholder="" name="days_time_to_7" type="text" class="days_time">
        </div><br>
    </div>

    <label>Стоимость приема:от <span class="star">*</span></label>
    <input data-required="required" type="text" name="cost_from" class="form-control">

    <div class="form-group checkboxes">
        <label>Есть ли у вас возможность проводить платные онлайн-консультации пациентов</label>
        <span>Да <input name="pay_online_consult" value="Да" type="radio"></span>
        <span>Нет <input name="pay_online_consult" value="Нет" type="radio"></span>
    </div>
    <label>Видеосвязь с помощью (написать данные выхода):</label>
    <input type="text" name="video_feedback" class="form-control">

    <label>Стоимость онлайн консультации 30 минут: от </label>
    <input type="text" name="half_hour_cost" class="form-control">

    <label>Стоимость онлайн консультации 1 час: от </label>
    <input type="text" name="one_hour_cost" class="form-control">

    <label>Специализируется на диагностике и лечении следующих заболеваний: <span class="star">*</span></label>
    <input data-required="required" type="text" name="specialised" class="form-control">

    <label>Дополнительная информация (научные разработки, статьи, зарубежные и местные стажировки и другая информация, важная для пациентов):</label>
    <textarea name="additional_information" class="form-control"></textarea>

    <div class="form-group checkboxes">
        <span class="show_agree">я принимаю правила регистрации <input value="" name="agree" type="checkbox"></span>
    </div>

    <script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
    <p>&nbsp;</p>
    <label>Подтвердите что вы не робот: <span class="star">*</span></label>
    <div data-callback="recaptchaCallback" class="g-recaptcha" data-sitekey="6LclvVIUAAAAAGwBDhB1_XDDpkX6cFNB2y_zikJL"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LclvVIUAAAAAGwBDhB1_XDDpkX6cFNB2y_zikJL&amp;co=aHR0cDovL2Jlc3Rkb2N0b3IudXo6ODA.&amp;hl=ru&amp;v=vP4jQKq0YJFzU6e21-BGy3GP&amp;size=normal&amp;cb=rf4438clz2yf" width="304" height="78" role="presentation" name="a-o8qznrsm43z5" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
    <script type="text/javascript">

    </script>
    <p>&nbsp;</p>
    <span class="star">*</span> обязательные поля для заполнения
    <input id="docReg" type="submit" value="Регистрация">

    </form>