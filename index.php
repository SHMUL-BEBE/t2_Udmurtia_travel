<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>t2_izhevsk</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <header>
        <div class="title">УДМУРТ<a class="pink">иЯ</a>&nbsp;с&nbsp;</div>
        <img class="logo" src="img/logo1.svg" alt="логотип">
        <nav>
            <ul>
                <li><a href="#">Маршруты</a></li>
                <li><a href="#">Экскурсии</a></li>
                <li><a href="#">Гиды</a></li>
                <li><a href="#">Мы в соцсетях</a></li>
                <li><a href="#">Экскурсии на карте</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="block1">
            <img class="pattern" src="img/back-patt.png" alt="паттерн">
            <div class="block1_1">
                <p class="name1"><strong>Туристические маршруты</strong></p>
                <p class="text1">Путешествуй по Удмуртии с удобством</p>

                <div class="filter">
                    <form action="#" method="GET" class="filter-form">
                        <div class="filter-group">
                            <label>Дата начала поездки</label>
                            <input type="date" name="start_date" required class="filter-input">
                        </div>

                        <div class="filter-group">
                            <label>Дата конца поездки</label>
                            <input type="date" name="end_date" required class="filter-input">
                        </div>

                        <div class="filter-group">
                            <label>Компания</label>
                            <select name="company" class="filter-select">
                                <option value="alone">Один</option>
                                <option value="family_with_children">С семьей</option>
                                <option value="friends">С друзьями</option>
                            </select>
                        </div>

                        <div class="filter-group">
                            <label>Транспорт</label>
                            <select name="transport" class="filter-select">
                                <option value="own_car">Есть свой автомобиль</option>
                                <option value="no_car">Нет своего автомобиля</option>
                            </select>
                        </div>

                        <div class="filter-group">
                            <label>Бюджет</label>
                            <select name="budget" class="filter-select">
                                <option value="lawful">Экономный</option>
                                <option value="medium">Средний</option>
                                <option value="everywhere">Не важен</option>
                            </select>
                        </div>

                        <div class="filter-group">
                            <label>Интересы</label>
                            <select name="interests" class="filter-select" multiple size="1">
                                <option value="history_culture">История и культура</option>
                                <option value="nature">Природа</option>
                                <option value="active">Активный отдых</option>
                            </select>
                        </div>

                        <div class="filter-group">
                            <label>Дополнительно</label>
                            <select name="additional" class="filter-select">
                                <option value="animals">Животные</option>
                                <option value="without_animals">Без животных</option>
                            </select>
                        </div>

                        <button class="btn1" type="submit">Найти</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="block2">
            <p class="name2">Наши преимущества</p>
            <div class="block2_1">
                <div class="prime">
                    <p class="name3">Питание</p>
                    <p class="text3">Вкусные обеды и ужины в самых
                        культовых ресторанах города</p>
                </div>
                <div class="prime">
                    <p class="name3">Трансфер</p>
                    <p class="text3">Удобный и комфортный
                        транспорт</p>
                </div>
                <div class="prime">
                    <p class="name3">Интересная программа</p>
                    <p class="text3">Вам гарантирован насыщенный и
                        продуктивный день</p>
                </div>
                <div class="prime">
                    <p class="name3">Профессиональные гиды</p>
                    <p class="text3">Увлекательные истории и полное
                        погружение в культуру края</p>
                </div>
            </div>
        </div>
        <section class="block3" id="destinations">
            <h2 class="section-title">Наши экспедиции</h2>
            <div class="destinations-container"> <!-- Важная обертка для сетки -->
                <?php include 'php/card.php'; ?>
            </div>
        </section>

        <div class="gids">
            <p class="name4">Наши гиды</p>
            <div class="block_gid">
                <div class="gid1">
                    <img src="img/marina.png" alt="марина">
                    <p class="gid_name">Марина</p>
                    <p class="gid_prof">Историк-краевед</p>
                </div>
                <div class="gid1">
                    <img src="img/nastya.png" alt="настя">
                    <p class="gid_name">Анастасия</p>
                    <p class="gid_prof">Гид-проводник</p>
                </div>
                <div class="gid1">
                    <img src="img/kirill.png" alt="кирилл">
                    <p class="gid_name">Кирилл</p>
                    <p class="gid_prof">Гастрогид</p>
                </div>
                <div class="gid1">
                    <img src="img/oleg.png" alt="олег">
                    <p class="gid_name">Олег</p>
                    <p class="gid_prof">Волонтер</p>
                </div>
            </div>
        </div>
        <div class="separator"></div>

        <div class="reklama">
            <div class="reklama1">
                <p class="rek_title">Следите за персональными акциями и скидками!</p>
                <p class="rek_text">Подпишитесь на нашу рассылку</p>
                <div class="forma_email">
                    <form>
                        <input type="email" placeholder="Электронная почта" required>
                        <button class="button" type="submit">Подписаться</button>
                    </form>
                </div>
                <p class="small_text">Нажимая «Подписаться», вы даете согласие на
                    получение рекламных и информационных сообщений в
                    соответствии с условиями политики обработки персональных данных</p>
                <img class="rek1" src="img/izh_v_rekl.png" alt="фон">
            </div>
            <div class="reklama1">
                <p class="rek_title">Планируйте путешествие вместе с нами</p>
                <p class="rek_text">Мы в соцсетях</p>
                <div class="rek_ssilki">
                    <div class="rek_block">
                        <img src="img/qr-code.png" alt="куаркод">
                    </div>
                    <div class="rek_block">
                        <img src="img/tg.png" alt="тг">
                    </div>
                    <div class="rek_block">
                        <img src="img/vk.png" alt="вк">
                    </div>
                </div>

                <img class="rek2" src="img/izh_v_rekl2.png" alt="фон">
            </div>
        </div>

        <div class="separator"></div>

        <div class="block4">
            <video controls preload="metadata">
                <source src="img/udm.mp4" type="video/mp4">
                Ваш браузер не поддерживает тег video.
            </video>
        </div>

        <div class="shop">
            <p class="name4">Экипировка</p>
            <div class="block_shop">
                <div class="shop1">
                    <p class="tovar">Термос t2</p>
                    <img src="img/termos.png" alt="термос">
                    <p class="price">899₽</p>
                    <button class="button_shop">Купить</button>
                </div>
                <div class="shop1">
                    <p class="tovar">Рюкзак t2</p>
                    <img src="img/rukzak.png" alt="термос">
                    <p class="price">1899₽</p>
                    <button class="button_shop">Купить</button>
                </div>
                <div class="shop1">
                    <p class="tovar">Шапка t2</p>
                    <img src="img/shapka.png" alt="термос">
                    <p class="price">1299₽</p>
                    <button class="button_shop">Купить</button>
                </div>
                <div class="shop1">
                    <p class="tovar">Мешок t2</p>
                    <img src="img/meshok.png" alt="термос">
                    <p class="price">1499₽</p>
                    <button class="button_shop">Купить</button>
                </div>
                <div class="shop1">
                    <p class="tovar">Сумка t2</p>
                    <img src="img/sumka.png" alt="термос">
                    <p class="price">2499₽</p>
                    <button class="button_shop">Купить</button>
                </div>
                <div class="shop1">
                    <p class="tovar">Свитшот t2</p>
                    <img src="img/svitshot.png" alt="термос">
                    <p class="price">3499₽</p>
                    <button class="button_shop">Купить</button>
                </div>

            </div>
        </div>

        <div id="map-container">
            <h2 class="map-title">Маршруты на карте</h2>
            <div id="map"></div>
        </div>

        <div id="cardModal" class="modal">
            <div class="modal-content">
                <div id="modalCardContent"></div>
            </div>
        </div>
        </div>
        <script src="https://api-maps.yandex.ru/2.1/?apikey=YOUR_YANDEX_MAPS_API_KEY&lang=ru_RU"></script>
        <script>
            // Функция открытия модального окна с карточкой
            window.openCardModal = function (cardId) {
                console.log("Открываем карточку:", cardId);

                var originalCard = document.getElementById(cardId);
                if (!originalCard) {
                    console.error("Карточка не найдена:", cardId);
                    return;
                }

                // Клонируем карточку
                var cardClone = originalCard.cloneNode(true);
                cardClone.classList.add('modal-card');

                // Убираем все ограничения
                cardClone.style.width = '100%';
                cardClone.style.maxWidth = '100%';

                // Находим изображение и убираем ограничения
                var img = cardClone.querySelector('img');
                if (img) {
                    img.style.height = 'auto';
                    img.style.maxHeight = 'none';
                }

                // Добавляем крестик наверх (БЕЗ АНИМАЦИИ)
                var closeCross = document.createElement('div');
                closeCross.innerHTML = '✕';
                closeCross.className = 'modal-close-cross';
                closeCross.style.transition = 'none'; // убираем анимацию
                closeCross.onclick = function (e) {
                    e.stopPropagation();
                    window.closeModal();
                };

                // Добавляем крестик в карточку
                cardClone.insertBefore(closeCross, cardClone.firstChild);

                // Очищаем и заполняем контент модалки
                var modalContent = document.getElementById('modalCardContent');
                modalContent.innerHTML = '';
                modalContent.appendChild(cardClone);

                // Показываем модальное окно
                var modal = document.getElementById('cardModal');
                modal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            }

            // Функция закрытия модального окна
            function closeModal() {
                var modal = document.getElementById('cardModal');
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }

            // Закрытие по клику вне окна
            window.onclick = function (event) {
                var modal = document.getElementById('cardModal');
                if (event.target == modal) {
                    closeModal();
                }
            }

            // Инициализация карты
            ymaps.ready(function () {
                var myMap = new ymaps.Map("map", {
                    center: [56.85, 53.2],
                    zoom: 8,
                    controls: ["zoomControl", "fullscreenControl"]
                });

                var locations = [
                { name: "Ижевск", coords: [56.8528, 53.2119], cardId: "card-1" },
                { name: "Игра", coords: [57.5564, 53.0691], cardId: "card-2" },
                { name: "Воткинск", coords: [57.0546, 54.0078], cardId: "card-3" },
                { name: "Сарапул", coords: [56.4666, 53.8001], cardId: "card-4" },
                { name: "Иднакар", coords: [58.1553, 52.6323], cardId: "card-5" },
                { name: "Лудорвай", coords: [56.8226, 53.3683], cardId: "card-6" },
                { name: "Нечкинский парк", coords: [56.6858, 53.7869], cardId: "card-7" },
                { name: "Книга природы", coords: [57.5730, 52.3423], cardId: "card-8" },
                { name: "Глазов", coords: [58.1356, 52.6514], cardId: "card-9" },
                { name: "Ува", coords: [56.9873094,52.1309213], cardId: "card-10" }
                ];

                locations.forEach(function (loc) {
                    var placemark = new ymaps.Placemark(loc.coords, {
                        hintContent: loc.name,
                    }, {
                        preset: 'islands#redIcon',
                        iconColor: '#c72a2a'
                    });

                    // Клик по метке - прокрутка к карточке (можно заменить на открытие модалки)
                    placemark.events.add('click', function () {
                        openCardModal(loc.cardId);  // или openCardModal(loc.cardId)
                    });

                    myMap.geoObjects.add(placemark);
                });
            });
        </script>




    </main>
    <footer>
        <div class="title1">УДМУРТ<a class="pink">иЯ</a>&nbsp;с&nbsp;</div>
        <img class="logo" src="img/logo1.svg" alt="логотип">
        <nav>
            <ul>
                <li><a href="#">Маршруты</a></li>
                <li><a href="#">Экскурсии</a></li>
                <li><a href="#">Гиды</a></li>
                <li><a href="#">Мы в соцсетях</a></li>
                <li><a href="#">Экскурсии на карте</a></li>
            </ul>
        </nav>
        <p class="protect">©2026 Все права защищены</p>
    </footer>
</body>

</html>