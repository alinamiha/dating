<?php
session_start();
//unset($_SESSION['user_rates']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Seeko - новый сайт знакомств в интернете </title>
    <link rel="stylesheet" href="main/styles/header.css">
    <link rel="stylesheet" href="main/styles/index.css">
    <link rel="stylesheet" href="main/styles/footer.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.typekit.net/ved6crj.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="icons.html">
</head>
<body>
<header id="header">
    <div class="header">
        <div class="logo">
            <a href="/">
                <img src="src/img/logo.png" alt="logo">
            </a>
        </div>
        <nav id="main-menu" class="menu">
            <ul class="menu-list">
                <li class="menu-item">
                    <a href="/about-us">О нас</a>
                </li>
                <li class="menu-item">
                    <a href="/community">Сообщества</a>
                </li>
                <li class="menu-item">
                    <a href="/membership">Подпсика</a>
                </li>
                <li class="menu-item">
                    <a href="/blog">Блог</a>
                </li>
                <li class="menu-item">
                    <a href="/contact">Контакты</a>
                </li>
                <li class="menu-item">
                    <a href="/my-account">Мой аккаунт</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<div class="content">
    <section class="seeko-section">
        <div class="left-section">
            <div class="main-title">
                <h1>Найди свою <br> л<img src="src/img/icon-heart.svg" alt="heart">бовь
                </h1>
            </div>
            <div class="form-section">
                <form class="filter-form">
                    <div class="form-line">
                        <div class="form-title">
                            <h3>Я</h3>
                        </div>
                        <div class="form-wrap-item">
                            <div class="form-item">
                                <input type="radio" id="" name="">
                                <label for="">Женщина</label>
                            </div>
                            <div class="form-item">
                                <input type="radio" id="" name="">
                                <label for="">Мужчина</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-line">
                        <div class="form-title">
                            <h3>Ищу</h3>
                        </div>
                        <div class="form-wrap-item">
                            <div class="form-item">
                                <input type="radio" id="" name="">
                                <label for="">Мужчину</label>
                            </div>
                            <div class="form-item">
                                <input type="radio" id="" name="">
                                <label for="">Женщину</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-line">
                        <div class="form-title">
                            <h3>Возраст</h3>
                        </div>
                        <div class="form-wrap-item">
                            <div class="form-item">
                                <select name="from-age" id="from-age"></select>
                            </div>
                            <div class="form-item">
                                <div class="form-arrow">
                                    <img src="src/img/icon-right-arrow.svg" alt="arrow">
                                </div>
                            </div>
                            <div class="form-item">
                                <select name="to-age" id="to-age"></select>
                            </div>
                        </div>
                    </div>
                    <div class="form-line">
                        <div class="form-title">
                            <h3>Страна</h3>
                        </div>
                        <div class="form-wrap-item">
                            <div class="form-item form-item-country">
                                <select name="country" id="country">
                                    <option value="Албания">Албания</option>
                                    <option value="Армения">Армения</option>
                                    <option value="Германия">Германия</option>
                                    <option value="Франция">Франция</option>
                                    <option value="Чехия">Чехия</option>
                                    <option value="Украина">Украина</option>
                                    <option value="Турция">Турция</option>
                                    <option value="Филиппины">Филиппины</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-line">
                        <div class="form-btn-submit">
                            <button type="submit">Найти партнера</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="right-section">
            <div class="search-bg-img"></div>
        </div>
    </section>
    <section class="seeko-section">
        <div class="left-section">
            <div class="power-section-title">
                <h2>Seeko - сайт знакомств для встреч</h2>
            </div>
            <div class="power-section-content">
                <p>Наше сообщество знакомств в интернете - это глоток свежего воздуха. Помощь в поиске партнера, подтвержденные
                    пользователи, умная фильтрация и подбор партнера. Мы уверены, что вам понравится общение в интернете!</p>
            </div>
            <div class="power-section-img">
                <img src="src/img/power-bg.png" alt="">
            </div>
        </div>
        <div class="right-section">
            <div class="container">
                <div class="row">
                    <div class="power-card col-sm">
                        <div class="power-card-img">
                            <img src="src/img/pointer.svg" alt="">
                        </div>
                        <div class="power-card-title">
                            <h3>Легкий и доступный сайт</h3>
                        </div>
                        <div class="power-card-content">
                            <p>Простые шаги, которые нужно выполнить, чтобы получить подходящего партнера.</p>
                        </div>
                    </div>
                    <div class="power-card col-sm">
                        <div class="power-card-img">
                            <img src="src/img/relationship.svg" alt="">
                        </div>
                        <div class="power-card-title">
                            <h3>Современный поиск партнера</h3>
                        </div>
                        <div class="power-card-content">
                            <p>Создавайте отношения с такими же пользователями, как вы.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="power-card col-sm">
                        <div class="power-card-img">
                            <img src="src/img/funnel.svg" alt="">
                        </div>
                        <div class="power-card-title">
                            <h3>Быстрая фильтрация по интересам</h3>
                        </div>
                        <div class="power-card-content">
                            <p>Не теряйте время зря! Найдите только того, кто вам будет интересен</p>
                        </div>
                    </div>
                    <div class="power-card col-sm">
                        <div class="power-card-img">
                            <img src="src/img/user.svg" alt="">
                        </div>
                        <div class="power-card-title">
                            <h3>Интересные люди в сообществах</h3>
                        </div>
                        <div class="power-card-content">
                            <p>Наш сайт знакомств полон крутых участников</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="seeko-section about-work-section">
        <div class="about-work-title">
            <h2>Как это <br>работает</h2>
        </div>
        <div class="about-work-container container">
            <div class="about-work-row row">
                <div class="about-work-right-block col">
                    <img src="src/img/home-dating-search.png" alt="">
                </div>
                <div class="about-work-left-block col">
                    <div class="about-work-block-title">
                        <h3>Поиск</h3>
                    </div>
                    <div class="about-work-block-text">
                        <p>Простые советы в поиске собеседника, которым нужно следовать, чтобы получить отличный опыт
                            использования любовного сайта Seeko. Все, что тебе нужно сделать, это
                            следуй своей интуиции и своему сердцу!</p>
                    </div>
                </div>
            </div>
            <div class="about-work-row row">
                <div class="about-work-right-block col">
                    <div class="about-work-block-title">
                        <h3>Соответсвие</h3>
                    </div>
                    <div class="about-work-block-text">
                        <p>Легкий подбор собеседника. В один клик вы можете найти свою судьбу. Вы можете выбрать
                            критерии партнера, а дальше мы вам обязательно поможем с поиком!</p>
                    </div>
                </div>
                <div class="about-work-left-block col">
                    <img src="src/img/home-dating-match.png" alt="">
                </div>
            </div>
            <div class="about-work-row row">
                <div class="about-work-right-block col">
                    <img src="src/img/home-dating-find-out.png" alt="">
                </div>
                <div class="about-work-left-block col">
                    <div class="about-work-block-title">
                        <h3>Начало</h3>
                    </div>
                    <div class="about-work-block-text">
                        <p>Пользователи могут создать красивый профиль, добавить изображения, написать на своей стене и
                            начать добавлять
                            друзей.</p>
                    </div>
                </div>
            </div>
            <div class="about-work-row row">
                <div class="about-work-right-block col">
                    <div class="about-work-block-title">
                        <h3>Время</h3>
                    </div>
                    <div class="about-work-block-text">
                        <p>Пришло время для нового поколения сайтов. Seeko - новый сайт знакомств для встреч с легким и приятным
                            интерфейсом. Seeko создан для того, чтоб сократить ваше время поиска партнера в
                            интернете</p>
                    </div>
                </div>
                <div class="about-work-left-block col">
                    <img src="src/img/home-dating-live-the-story.png" alt="">
                </div>
            </div>
        </div>
    </section>
</div>
<section>
    <div class="clear-btn"><button>Clear session</button></div>
    <div class="user-list">


        <div class="user-item" data-rate="<?php echo $_SESSION['user_rates'][1] != null ? $_SESSION['user_rates'][1]->rate : 0;?>" data-user-id="<?php echo $_SESSION['user_rates'][1] ? $_SESSION['user_rates'][1]->user_id : 1;?>">
            <div class="user-item__img">
                <img src="src/img/man.jpg" alt="">
            </div>
            <div class="star-rating">
                <span class="rating-star fa fa-star checked" data-id="1"></span>
                <span class="rating-star fa fa-star checked" data-id="2"></span>
                <span class="rating-star fa fa-star checked" data-id="3"></span>
                <span class="rating-star fa fa-star" data-id="4"></span>
                <span class="rating-star fa fa-star" data-id="5"></span>
            </div>
        </div>

        <div class="user-item"  data-rate="<?php echo $_SESSION['user_rates'][2] ? $_SESSION['user_rates'][2]->rate : 0;?>" data-user-id="<?php echo $_SESSION['user_rates'][2] ? $_SESSION['user_rates'][2]->user_id : 2;?>">
            <div class="user-item__img">
                <img src="src/img/wooman.jpg" alt="">
            </div>
            <div class="star-rating"  >
                <span class="rating-star fa fa-star checked" data-id="1"></span>
                <span class="rating-star fa fa-star checked" data-id="2"></span>
                <span class="rating-star fa fa-star checked" data-id="3"></span>
                <span class="rating-star fa fa-star" data-id="4"></span>
                <span class="rating-star fa fa-star" data-id="5"></span>
            </div>
        </div>
        <div class="user-item"  data-rate="<?php echo $_SESSION['user_rates'][3] ? $_SESSION['user_rates'][3]->rate : 0;?>" data-user-id="<?php echo $_SESSION['user_rates'][3] ? $_SESSION['user_rates'][3]->user_id : 3;?>">
            <div class="user-item__img">
                <img src="src/img/man.jpg" alt="">
            </div>
            <div class="star-rating" >
                <span class="rating-star fa fa-star checked" data-id="1"></span>
                <span class="rating-star fa fa-star checked" data-id="2"></span>
                <span class="rating-star fa fa-star checked" data-id="3"></span>
                <span class="rating-star fa fa-star" data-id="4"></span>
                <span class="rating-star fa fa-star" data-id="5"></span>
            </div>
        </div>
        
    </div>
    

</section>


<footer>
    <div class="footer-container container">
        <div class="row">
            <div class="footer-block col">
                <div class="footer-logo">
                    <img src="src/img/balloons.svg" alt="">
                    <span>seeko</span>
                </div>
                <div class="footer-about-us">
                    <h2>О нас</h2>
                    <p>Seeko - это любовный сайт знакомств, основан для особей, которые находятся в поиске партнера.
                        Наше сообщество обладает современными технологиями, которые помогут вам в поиске любовного
                        партнера</p>
                </div>
            </div>
            <div class="footer-block col">
                <div class="footer-interests">
                    <span class="intr-green">Искусство и любовь</span>
                    <span class="intr-blue">увлечения</span>
                    <span class="intr-pink">творчество</span>
                    <span class="intr-mint">наука</span>
                    <span class="intr-green">развлечения</span>
                    <span class="intr-mint">здоровье</span>
                    <span class="intr-pink">хобби</span>
                    <span class="intr-red">стиль жизни</span>
                    <span class="intr-blue">истории любви</span>
                    <span class="intr-red">страсть</span>
                    <span class="intr-blue">психология</span>
                    <span class="intr-pink">сексуальность</span>
                    <span class="intr-red">спорт</span>
                    <span class="intr-mint">бандитская жизнь</span>
                </div>
            </div>
            <div class="footer-block col">
                <div class="footer-menu">
                    <nav class="menu">
                        <span>меню</span>

                        <ul class="menu-list">

                            <li class="menu-item">
                                <a href="/about-us">О нас</a>
                            </li>
                            <li class="menu-item">
                                <a href="/community">Сообщества</a>
                            </li>
                            <li class="menu-item">
                                <a href="/membership">Подписка</a>
                            </li>
                            <li class="menu-item">
                                <a href="/blog">Блог</a>
                            </li>
                            <li class="menu-item">
                                <a href="/contact">Контакты</a>
                            </li>
                            <li class="menu-item">
                                <a href="/my-account">Мой аккаунт</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--<h1>Hello</h1>-->
<!--<p>Alina</p>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.3.0/lodash.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="main.js"></script>
<script type="application/javascript">
    setRating();
</script>
</body>
</html>