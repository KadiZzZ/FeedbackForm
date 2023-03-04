<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="reset.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="container">
        <div class="content">
            <div class="contact us">
                <div class="address details">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="topic">Адрес</div>
                    <div class="info-one">г. Ульяновск</div>
                    <div class="info-two">проезд Сиреневый, 7А</div>
                </div>
                <div class="phone details">
                    <i class="fas fa-phone-alt"></i>
                    <div class="topic">Контактный телефон</div>
                    <div class="info-one">8-904-186-02-88</div>
                    <div class="info-two">8-904-186-02-89</div>
                </div>
                <div class="mail details">
                    <i class="fas fa-envelope"></i>
                    <div class="topic">Электронный адрес</div>
                    <div class="info-one">contactfeedback51@gmail.com</div>
                    <div class="info-two">contactfeedback52@gmail.com</div>
                </div>
            </div>
            <div class="feedback-from">
                <div class="topic-text">Отправьте нам своё сообщение</div>
                <p>В случае, если у вас есть вопросы - заполните форму ниже</p>

                <form action="connect.php" method="post" id="form" name="form">
                    <div class="input-box">
                        <input type="text" placeholder="Введите ваше имя"
                               id="name"
                               name="name"
                               data-reg="^[А-ЯЁ][а-яё]*$">
                        <label for="name">Только русские буквы</label>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Введите email"
                               id="email"
                               name="email"
                               data-reg="^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$">
                        <label for="email">В формате - example@mail.com</label>
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Введите номер телефона"
                        id="phone"
                        name="phone"
                        data-reg="^(\+)?((\d{2,3}) ?\d|\d)(([ -]?\d)|( ?(\d{2,3}) ?)){5,12}\d$">
                        <label for="phone"> формата +7, 7, 8</label>
                    </div>


                            <div class="checkbox">
                                <select class="form-control" name="theme">
                                    <option value="Вопрос о сотрудничестве">Вопрос о сотрудничестве</option>
                                    <option value="Техническая проблема">Техническая проблема</option>
                                    <option value="Информационная рассылка">Информационная рассылка</option>
                        </select>
                        <br><label for="theme">Выберите тему обращения</label>
                    </div>
                    <div class="input-box message-box">
                        <textarea placeholder="Сообщение" required name="message"></textarea>
                    </div>



                        <input type="file" name="file">


                    <label class="checkbox style-c">
                        <input type="checkbox" required name="checkbox"/>
                        <div class="checkbox__checkmark"></div>
                        <div class="checkbox__body">Согласие на обработку данных</div>
                    </label>

                    <div class="button">
                        <input type="submit" value="Отправить" id="button" name="button"/>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <form action="BD.php">
        <input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="Все обращения"  tabindex="100" />
    </form>
    <script src="https://kit.fontawesome.com/e63fbe296f.js" crossorigin="anonymous"></script>
    <script src="app.js"></script>
  </body>
</html>
