<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" href="main.css" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
    />
    <title>РумТибет</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header
      style="background-image: url(<?= bloginfo('template_url'); ?>/assets/images/headerBG.d6c539cd63d146d54b94.png);"
    >
      <div class="container">
        <div class="menu">
          <img
            class="logo"
            src="<?= bloginfo('template_url'); ?>/assets/images/logo.d5a07060ae2c05c7249c.png"
            alt="logo"
          />
          <nav>
            <div class="exitPopup">+</div>
            <ul>
              <li>Главная</li>
              <li>Про гида</li>
              <li>Программа тура</li>
              <li>Стоимость</li>
              <li>Блог</li>
              <li>Контакты</li>
            </ul>
          </nav>
          <button class="headerMenuBtn">Консультация</button>
          <div class="popUpOpenBtn">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <div class="headerWrapper">
          <h1>
            Насладись прогулкой в горах
            <br />
            с командой единомышленников
          </h1>
          <div class="search">
            <div class="searchItem">
              <div class="searchSelect">
                <select name="location">
                  <option value="">Локация для тура</option>
                  <option value="krichev">Кричев</option>
                  <option value="Mogilev">Могилев</option>
                </select>
              </div>
              <p>выберите из списка</p>
            </div>
            <div class="searchItem">
              <div class="searchSelect dataSelect">
                <p class="dataTripTitle">Дата похода</p>
                <div class="customDateInput">
                  <p class="customInputValue"></p>
                  <div class="calendar-wrapper">
                    <div class="btnWrapper">
                      <button class="btnPrev">Предыдущий</button>
                      <button class="btnNext">Следующий</button>
                    </div>
                    <div class="divCal"></div>
                  </div>
                  <div class="calendar-wrapper">
                    <div class="btnWrapper">
                      <button class="btnPrev btnPrev2">Предыдущий</button>
                      <button class="btnNext btnNext2">Следующий</button>
                    </div>
                    <div class="divCal2"></div>
                  </div>
                  <button class="dataBtn">Сохранить</button>
                </div>
              </div>
              <p>укажите диапазон</p>
            </div>
            <div class="searchItem">
              <div class="searchSelect">
                <select name="party">
                  <option value="">Участники</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="13">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                </select>
              </div>
              <p>минимум 4 человека</p>
            </div>
            <button>Найти программу</button>
          </div>
          <button class="mobileBtn">Найти программу</button>
        </div>
      </div>
    </header>
    <main>
      <section class="explore">
        <div class="exploreContainer">
          <div class="exloreImgContainer">
            <img
              class="positionAbsolute"
              src="<?= bloginfo('template_url'); ?>/assets/images/img1.66af520e3b2143d4a5db.png"
              alt="explore"
            />
            <img src="<?= bloginfo('template_url'); ?>/assets/images/img2.5f1864cb4f466b11fadd.png" alt="explore" />
          </div>
          <div class="exploreDescription">
            <div class="exploreDescriptionWrapper">
              <p class="exploreSubtitle">о нашем походе</p>
              <h2>Исследуйте все горные массивы мира вместе с нами</h2>
              <p>
                Его корни уходят в один фрагмент классической латыни 45 года
                н.э., то есть более двух тысячелетий назад. Ричард МакКлинток,
                профессор латыни из колледжа Hampden-Sydney, штат Вирджиния,
                взял одно из самых странных слов в Lorem Ipsum, "consectetur"и
                занялся его поисками в классической латинской литературе.
              </p>
              <button>Программа тура</button>
            </div>
          </div>
        </div>
      </section>
      <section class="offer">
        <div class="offerContainer">
          <div class="offerDescriptionWrapper">
            <p class="offerSubtitle">наше предложение</p>
            <h2 class="offerTitle">Лучшие программы для тебя</h2>
            <p class="offerDescription">
              Его корни уходят в один фрагмент классической латыни 45 года н.э.,
              то есть более двух тысячелетий назад. Ричард МакКлинток, профессор
              латыни из колледжа.
            </p>
            <div class="descriptionProgramms">
              <div class="programmsItem">
                <img src="<?= bloginfo('template_url'); ?>/assets/images/1.95be4eaf31ecda050d95.png" alt="programms" />
                <div class="descriptionWrapper">
                  <h3>Опытный гид</h3>
                  <p>
                    Для современного мира базовый вектор развития предполагает
                    независимые способы реализации соответствующих условий
                    активизации.
                  </p>
                </div>
              </div>
              <div class="programmsItem">
                <img src="<?= bloginfo('template_url'); ?>/assets/images/2.3d817b87a484fcdcf852.png" alt="programms" />
                <div class="descriptionWrapper">
                  <h3>Безопасный поход</h3>
                  <p>
                    Для современного мира базовый вектор развития предполагает
                    независимые способы реализации соответствующих условий
                    активизации.
                  </p>
                </div>
              </div>
              <div class="programmsItem">
                <img src="<?= bloginfo('template_url'); ?>/assets/images/3.0f4f14fd3312ef2073f5.png" alt="programms" />
                <div class="descriptionWrapper">
                  <h3>Лояльные цены</h3>
                  <p>
                    Для современного мира базовый вектор развития предполагает
                    независимые способы реализации соответствующих условий
                    активизации.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="offerImg">
            <img src="<?= bloginfo('template_url'); ?>/assets/images/1.72073bd726a8b57767b0.png" alt="offerImg" />
            <img src="<?= bloginfo('template_url'); ?>/assets/images/2.e156b5a4cae67878938a.png" alt="offerImg" />
            <img src="<?= bloginfo('template_url'); ?>/assets/images/3.1182e482f5038dd75764.png" alt="offerImg" />
            <img src="<?= bloginfo('template_url'); ?>/assets/images/4.50d310b5fa642b437d30.png" alt="offerImg" />
          </div>
          <button>Стоимость программы</button>
        </div>
      </section>
      <section class="popular">
        <div class="popularContainer">
          <p class="popularSubtitle">по версии отдыхающих</p>
          <h2 class="popularTitle">Популярные направления</h2>
          <div class="popularCardWrapper">
            <div
              class="card"
              style="background-image: url(<?= bloginfo('template_url'); ?>/assets/images/1.9f04e988984702f0ca20.png);"
            >
              <div class="rate"><span>4.9</span></div>
              <div class="costWrapper">
                <div class="cardTitle">
                  <h3>Озеро возле гор</h3>
                  <h4>романтическое приключение</h4>
                </div>
                <p class="cost">480 $</p>
              </div>
            </div>
            <div
              class="card"
              style="background-image: url(<?= bloginfo('template_url'); ?>/assets/images/2.6f7136023503046bc994.png);"
            >
              <div class="rate"><span>4.5</span></div>
              <div class="costWrapper">
                <div class="cardTitle">
                  <h3>Ночь в горах</h3>
                  <h4>в компании друзей</h4>
                </div>
                <p class="cost">500 $</p>
              </div>
            </div>
            <div
              class="card"
              style="background-image: url(<?= bloginfo('template_url'); ?>/assets/images/3.26c4824eca6856b9cccb.png);"
            >
              <div class="rate"><span>5.0</span></div>
              <div class="costWrapper">
                <div class="cardTitle">
                  <h3>Йога в горах</h3>
                  <h4>для тех, кто забоится о себе</h4>
                </div>
                <p class="cost">230 $</p>
              </div>
            </div>
          </div>
          <button>Рейтинг направлений</button>
        </div>
      </section>
      <section class="blog">
        <div class="blogContainer">
          <p class="blogSubtitle">делимся впечатлениями</p>
          <h2 class="blogTitle">Блог о путешествиях</h2>
          <div class="blogCardWrapper">
            <div class="blogCard">
              <img src="<?= bloginfo('template_url'); ?>/assets/images/1.7cd50ee5db2c8c5e1b90.png" alt="blogPhoto" />
              <div class="blogCardDescription">
                <div class="blogTitleAndDecsriptionWrapper">
                  <h3>Красивая Италя, какая она в реальности?</h3>
                  <p>
                    Для современного мира базовый вектор развития предполагает
                    независимые способы реализации соответствующих условий
                    активизации.
                  </p>
                </div>
                <div class="blogFooter">
                  <p class="blogDate">01/04/2023</p>
                  <a class="blogLink" href="#">читать статью</a>
                </div>
              </div>
            </div>
            <div class="blogCard">
              <img src="<?= bloginfo('template_url'); ?>/assets/images/2.5fc0c278c0bf964d522d.png" alt="blogPhoto" />
              <div class="blogCardDescription">
                <div class="blogTitleAndDecsriptionWrapper">
                  <h3>Долой сомнения! Весь мир открыт для вас!</h3>
                  <p>
                    Для современного мира базовый вектор развития предполагает
                    независимые способы реализации соответствующих условий
                    активизации ... независимые способы реализации
                    соответствующих условий активизации ...Для современного мира
                    базовый вектор развития предполагает независимые способы
                    реализации соответствующих условий активизации ...
                    независимые способы реализации соответствующих условий
                    активизации ...
                  </p>
                </div>
                <div class="blogFooter">
                  <p class="blogDate">01/04/2023</p>
                  <a class="blogLink" href="#">читать статью</a>
                </div>
              </div>
            </div>
            <div class="blogCard">
              <img src="<?= bloginfo('template_url'); ?>/assets/images/3.f814adad441b59cd7365.png" alt="blogPhoto" />
              <div class="blogCardDescription">
                <div class="blogTitleAndDecsriptionWrapper">
                  <h3>Как подготовиться к путешествию в одиночку?</h3>
                  <p>
                    Для современного мира базовый вектор развития предполагает.
                  </p>
                </div>
                <div class="blogFooter">
                  <p class="blogDate">01/04/2023</p>
                  <a class="blogLink" href="#">читать статью</a>
                </div>
              </div>
            </div>
            <div class="blogCard">
              <img src="<?= bloginfo('template_url'); ?>/assets/images/4.316f67bd039482fd073b.png" alt="blogPhoto" />
              <div class="blogCardDescription">
                <div class="blogTitleAndDecsriptionWrapper">
                  <h3>Индия ... летим?</h3>
                  <p>Для современного мира базовый.</p>
                </div>
                <div class="blogFooter">
                  <p class="blogDate">01/04/2023</p>
                  <a class="blogLink" href="#">читать статью</a>
                </div>
              </div>
            </div>
          </div>
          <button>Другие материалы</button>
        </div>
      </section>
    </main>
    <section class="impression">
      <div class="impressionContainer">
        <p class="impressionSubtitle">фото-отчет</p>
        <h2 class="impressionTitle">Делимся впечатлениями</h2>
        <div class="impressionPhotoWrapper">
          <img src="<?= bloginfo('template_url'); ?>/assets/images/1.f627046fa25119e2f364.png" alt="photo" />
          <img src="<?= bloginfo('template_url'); ?>/assets/images/2.5bfc1967141bf577dbf0.png" alt="photo" />
          <img src="<?= bloginfo('template_url'); ?>/assets/images/3.4c767999dc42d8257c1e.png" alt="photo" />
          <img src="<?= bloginfo('template_url'); ?>/assets/images/4.ff61dd12683690e61f99.png" alt="photo" />
          <img src="<?= bloginfo('template_url'); ?>/assets/images/5.4e862a49d45e8beb3215.png" alt="photo" />
          <img src="<?= bloginfo('template_url'); ?>/assets/images/6.4221067e9d8c1567445f.png" alt="photo" />
        </div>
        <button>Наш pinterest</button>
      </div>
    </section>
    <section class="contacts">
      <div class="contactsContainer">
        <div class="contactsTitleWrapper">
          <p class="contactsSubtitle">актуально</p>
          <h2 class="contactsTitle">
            Получайте полезные рассылки о путешествиях
          </h2>
        </div>
        <div class="contactsEmailWrapper">
          <form>
            <label for="">Введите e-mail адрес</label>
            <div class="inputWrapper">
              <input placeholder="name@domain.com" />
              <button>Подписаться на новости</button>
            </div>
          </form>
          <p>
            подписываясь на новости, вы автоматически соглашаетесь
            <span>с условиями обработки персональных данных</span>
            и
            <span>правилами рекламных рассылок</span>
          </p>
        </div>
      </div>
    </section>
    <section class="about">
      <div class="aboutContainer">
        <div class="aboutCompany">
          <div class="aboutCompanyDescriptionWrapper">
            <h2 class="aboutCompanyDescriptionTitle">Компания «РумТибет»</h2>
            <p class="aboutCompanyDescription">
              Его корни уходят в один фрагмент классической латыни 45 года н.э.,
              то есть более двух тысячелетий назад. Ричард МакКлинток, профессор
              латыни из колледжа Hampden-Sydney.
            </p>
          </div>
          <div class="aboutCompanyContactsWrapper">
            <div class="aboutCompanyContactsPhoneEmail">
              <p class="aboutCompanyContactsEmail">info@domain.com</p>
              <p class="aboutCompanyContactsPhone">+7 (123) 456-78-90</p>
            </div>
            <div class="aboutCompanyContactsSocial">
              <a href="#">
                <img src="<?= bloginfo('template_url'); ?>/assets/images/tg.fee4b4b1447c54e1e477.png" alt="tg icon" />
              </a>
              <a href="#">
                <img src="<?= bloginfo('template_url'); ?>/assets/images/vk.a132ae1796b37fe9d60e.svg" alt="vk icon" />
              </a>
              <a href="#">
                <img
                  src="<?= bloginfo('template_url'); ?>/assets/images/pinterest.0d547333f153fade122a.png"
                  alt="pinterest icon"
                />
              </a>
              <a href="#">
                <img
                  src="<?= bloginfo('template_url'); ?>/assets/images/skype.a8826c6ca3dff94bd91b.png"
                  alt="skype icon"
                />
              </a>
            </div>
          </div>
        </div>
        <div class="aboutOurServices">
          <h2 class="aboutOurServicesTitle">Наши услуги</h2>
          <ul>
            <li>Прогулки в горы летом</li>
            <li>Зимние походы в горы</li>
            <li>Посещение храмов в горах</li>
            <li>Экстремальные виды туризма</li>
            <li>Походы в джунглях Амазонии</li>
            <li>Поездка в Африку</li>
          </ul>
        </div>
        <div class="aboutTravel">
          <h2 class="aboutTravelTitle">Важно для путешествий</h2>
          <ul>
            <li>Как собрать в долгий поход?</li>
            <li>Жизненно важные предметы для похода</li>
            <li>Медицинская страховка, гарантии безопасности</li>
            <li>Если вы врач - загляните сюда</li>
          </ul>
        </div>
      </div>
    </section>
    <footer>
      <div class="footerContainer">
        <p>ИП Константинопольский К.К., 2023</p>
        <p class="underline">Политика обработки персональных данных</p>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
