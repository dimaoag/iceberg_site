<?php


?>

<section class="s-order-form">
    <div class="container">
        <div class="custom_row">
            <div class="column">
                <p class="top_order-headlist">
                    Бриф на разработку интернет проекта | Iceberg
                </p>
            </div>
        </div>
        <div class="custom_row">
            <div class="column order-form_column">
                <form action="<?= PATH ?>/main/send-brif" method="post" id="form">
                    <div class="form_order-main_wrapper">
                        <div class="form_order-main_box about_us_order">
                            <label class="label_order">
                                Имя<sup>*</sup>
                                <input type="text" name="username" class="order_input" required>
                            </label>
                            <div class="order-two_column">
                                <label class="label_order">
                                    Телефон<sup>*</sup>
                                    <input type="tel" name="phone" class="order_input" required>
                                </label>
                                <label class="label_order">
                                    Emai<sup>*</sup>
                                    <input type="email" name="email" class="order_input" required>
                                </label>
                            </div>
                        </div>
                        <div class="form_order-main_box info_company_order">
                            <div class="headline_form_small">
                                1. Информация о компании
                            </div>
                            <label class="label_order">
                                Название компании
                                <input type="text" name="company_name" class="order_input">
                            </label>
                            <label class="label_order">
                                Сфера деятельности
                                <input type="text" name="activity_area" class="order_input">
                            </label>
                            <label class="label_order">
                                Вы знаете ваших конкурентов в сети? Если да, дайте на них ссылки:
                                <textarea name="competitors_text" class="order_textarea"></textarea>
                            </label>
                        </div>
                        <div class="form_order-main_box info_company_order">
                            <div class="headline_form_small">
                                2. Деятельность заказчика
                            </div>
                            <label class="label_order">
                                Продукция, услуги
                                <input type="text" name="activity_customer" class="order_input">
                            </label>
                            <label class="label_order">
                                Кто является целевой аудиторией вашего продукта / услуги?
                                <textarea class="order_textarea" name="goal_text" placeholder="Какой возраст, пол, должность, интересы? Опишите подробно, кто будет посещать ваш сайт. Разумеется, у вас может быть несколько типов клиентов."></textarea>
                            </label>
                            <label class="label_order">
                                Выделите ключевое преимущество продукта / услуги
                                <textarea name="advantages_text" class="order_textarea"></textarea>
                            </label>
                            <label class="label_order">
                                С какими проблемами к вам приходит клиент? Что в вашем случае можно назвать "болью" клиента?
                                <textarea name="problems_text" class="order_textarea"></textarea>
                            </label>
                            <label class="label_order">
                                На что опирается клиент, сравнивая ваш продукт с продуктом конкурента? Какие критерии являются основными при принятии решения о покупке?
                                <textarea name="compare_text" class="order_textarea"></textarea>
                            </label>
                            <div class="input_chekbox_wrapper">
                                <div class="input_chekbox_wrapper-item">
                                    <label class="label_order">
                                        Выберите 5 наиболее распространенных возражения в вашем бизнесе.
                                    </label>
                                </div>
                                <div class="input_chekbox_wrapper-item">
                                    <label class="checkbox">
                                        <input type="checkbox" name="objections[]" value="Безопасно?">
                                        <div class="checkbox__text">Безопасно?</div>
                                    </label>
                                </div>
                                <div class="input_chekbox_wrapper-item">
                                    <label class="checkbox">
                                        <input type="checkbox" name="objections[]" value="Есть гарантии?">
                                        <div class="checkbox__text">Есть гарантии?</div>
                                    </label>
                                </div>
                                <div class="input_chekbox_wrapper-item">
                                    <label class="checkbox">
                                        <input type="checkbox" name="objections[]" value="Сертификаты, награды и прочие документы?">
                                        <div class="checkbox__text">Сертификаты, награды и прочие документы?</div>
                                    </label>
                                </div>
                                <div class="input_chekbox_wrapper-item">
                                    <label class="checkbox">
                                        <input type="checkbox" name="objections[]" value="Качественно?">
                                        <div class="checkbox__text">Качественно?</div>
                                    </label>
                                </div>
                                <div class="input_chekbox_wrapper-item">
                                    <label class="checkbox">
                                        <input type="checkbox" name="objections[]" value="Как выбрать среди большого количества аналогов? Чем вы лучше?">
                                        <div class="checkbox__text">
                                            Как выбрать среди большого количества аналогов? Чем вы лучше?
                                        </div>
                                    </label>
                                </div>
                                <div class="input_chekbox_wrapper-item">
                                    <label class="checkbox">
                                        <input type="checkbox" name="objections[]" value="Насколько это сложно?">
                                        <div class="checkbox__text">
                                            Насколько это сложно?
                                        </div>
                                    </label>
                                </div>
                                <div class="input_chekbox_wrapper-item">
                                    <label class="checkbox">
                                        <input type="checkbox" name="objections[]" value="Не завышена ли цена?">
                                        <div class="checkbox__text">Не завышена ли цена?</div>
                                    </label>
                                </div>
                                <div class="input_chekbox_wrapper-item">
                                    <label class="checkbox">
                                        <input type="checkbox" name="objections[]" value="Есть отзывы?">
                                        <div class="checkbox__text">Есть отзывы?</div>
                                    </label>
                                </div>
                                <div class="input_chekbox_wrapper-item">
                                    <label class="checkbox">
                                        <input type="checkbox" name="objections[]" value="Сколько людей уже пользуются?">
                                        <div class="checkbox__text">Сколько людей уже пользуются?</div>
                                    </label>
                                </div>
                                <div class="input_chekbox_wrapper-item">
                                    <label class="checkbox">
                                        <input type="checkbox" name="objections[]" value="Насколько известная компания?">
                                        <div class="checkbox__text">Насколько известная компания?</div>
                                    </label>
                                </div>
                                <div class="input_chekbox_wrapper-item">
                                    <label class="checkbox">
                                        <input type="checkbox" name="objections[]" value="Есть какие-то скидки\акции?">
                                        <div class="checkbox__text">Есть какие-то скидки\акции?</div>
                                    </label>
                                </div>
                                <div class="input_chekbox_wrapper-item">
                                    <label class="checkbox">
                                        <input type="checkbox" name="objections[]" value="Какие сроки?">
                                        <div class="checkbox__text">Какие сроки?</div>
                                    </label>
                                </div>
                            </div>
                            <label class="label_order">
                                Какие решения вы предоставляете клиенту?
                                <textarea name="solutions_text" class="order_textarea" placeholder="Полный спектр ваших услуг или продуктовая линейка."></textarea>
                            </label>
                            <label class="label_order">
                                Покажите ваши цифры
                                <textarea name="numbers_text" class="order_textarea" placeholder="Возможно, вы можете похвастаться цифрами? Например: построено 1324 домов, 321543 человек уже пользуются нашим приложением, суммарный опыт сотрудников больше 100 лет."></textarea>
                            </label>
                            <label class="label_order">
                                У вас есть качественные изображения или видео для сайта?
                                <input type="text" name="quality_images_text" class="order_input">
                            </label>
                        </div>
                        <div class="form_order-main_box portret_project_order">
                            <div class="headline_form_small">
                                3. Портрет интернет-проекта
                            </div>
                            <label class="label_order">
                                Какой сайт можно взять за пример полностью или с частью функционала
                                <input type="text" name="example_site" class="order_input">
                            </label>
                            <label class="label_order">
                                У вас сейчас есть сайт? Что вам не нравится в нынешнем сайте?
                                <input type="text" name="is_have_site" class="order_input">
                            </label>
                            <label class="label_order">
                                На сколько срочен данный проект для вас? Когда дедлайн по запуску ресурса (НЕ путать с дедлайном по выбору подрядчика)
                                <input type="text" name="term_site" class="order_input">
                            </label>
                            <label class="label_order">
                                Есть ли у вас особая идея? Возможно, у вас есть сформированное видение будущего сайта?
                                <textarea name="idea_text" class="order_textarea"></textarea>
                            </label>
                            <label class="label_order">
                                Укажите предполагаемые основные разделы вашего будущего сайта (структуру)
                                <textarea name="structure_site" class="order_textarea"></textarea>
                            </label>
                            <label class="label_order">
                                Есть ли у вас прототип будущего сайта?
                                <input type="text" name="prototype_site" class="order_input">
                            </label>
                        </div>
                        <div class="form_order-main_box portret_project_order">
                            <div class="headline_form_small">
                                4. Дизайн
                            </div>
                            <label class="label_order">
                                Сайты, которые нравятся
                                <input type="text" name="likes_sites" class="order_input">
                            </label>
                            <label class="label_order">
                                Сайты, которые не нравятся
                                <input type="text" name="unlikes_sites" class="order_input">
                            </label>
                        </div>
                        <div class="form_order-main_box portret_project_order">
                            <div class="headline_form_small">
                                5. Функциональность сайта
                            </div>
                            <label class="label_order">
                                Какой сайт можно взять за пример полностью или с частью функционала. Опишите отличия и разницу.
                                <textarea name="example_sites_text" class="order_textarea"></textarea>
                            </label>
                            <div class="input_chekbox_wrapper">
                                <div class="input_chekbox_wrapper-item">
                                    <label class="label_order">
                                        Что из этого необходимо?
                                    </label>
                                </div>
                                <div class="input_chekbox_wrapper-item">
                                    <label class="checkbox">
                                        <input type="checkbox" name="features[]" value="Мультиязычность (несколько языковых версий)">
                                        <div class="checkbox__text">Мультиязычность (несколько языковых версий)</div>
                                    </label>
                                </div>
                                <div class="input_chekbox_wrapper-item">
                                    <label class="checkbox">
                                        <input type="checkbox" name="features[]" value="Експорт / Импорт товаров">
                                        <div class="checkbox__text">Експорт / Импорт товаров</div>
                                    </label>
                                </div>
                                <div class="input_chekbox_wrapper-item">
                                    <label class="checkbox">
                                        <input type="checkbox" name="features[]" value="Онлайн оплата на сайте">
                                        <div class="checkbox__text">Онлайн оплата на сайте</div>
                                    </label>
                                </div>
                                <div class="input_chekbox_wrapper-item">
                                    <label class="checkbox">
                                        <input type="checkbox" name="features[]" value="Интеграция с другими сервисами">
                                        <div class="checkbox__text">Интеграция с другими сервисами</div>
                                    </label>
                                </div>
                            </div>
                            <label class="label_order">
                                Дополнения, замечания, пожелания, требования к сайту
                                <textarea name="desire_text" class="order_textarea"></textarea>
                            </label>
                        </div>
                    </div>
                    <div class="brief-page__sub-title">
                        <span class="red_star">*</span>
                        <span>Обязательные поля</span>
                    </div>
                    <div class="order-button_blok">
                        <button type="submit" class="btn_blue">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>