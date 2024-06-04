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