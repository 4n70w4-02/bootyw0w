<?php
// Query params are: utm_placement={{placement}}&campaign_id={{campaign.id}}&adset_id={{adset.id}}&ad_id={{ad.id}}&adset_name={{adset.name}}&utm_creative={{ad.name}}&utm_campaign={{campaign.name}}&utm_source={{site_source_name}} 

require_once dirname(__FILE__) . '/kclient.php';
$client = new KClient('https://blackwordstrack.ru/api.php?', 'xmw5RwJ9SLypQtmc');
$client->sendAllParams();       // to send all params from page query
$client->forceRedirectOffer();       // redirect to offer if an offer is chosen
// $client->param('sub_id_5', '123'); // you can send any params
// $client->keyword('PASTE_KEYWORD');  // send custom keyword
// $client->currentPageAsReferrer(); // to send current page URL as click referrer
// $client->disableSessions(); // to disable using session cookie (without this cookie restoreFromSession wouldn't work)
// $client->debug();              // to enable debug mode and show the errors
// $client->execute();             // request to api, show the output and continue
$client->executeAndBreak();     // to stop page execution if there is redirect or some output
?>
<!DOCTYPE html>
<html lang="ru"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Booty WoW - накачай и сделай попу упругой всего за 28 дней!</title>
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/pay.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta name="format-detection" content="telephone=no"><link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
	
	<script type="text/javascript" async="" src="https://analytics.tiktok.com/i18n/pixel/config.js?sdkid=C5G18446J7TSRVQCTV30&amp;hostname="></script><script type="text/javascript" async="" src="https://analytics.tiktok.com/i18n/pixel/events.js?sdkid=C5G18446J7TSRVQCTV30&amp;lib=ttq"></script><script>
		!function (w, d, t) {
		  w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};var o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=i+"?sdkid="+e+"&lib="+t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o,a)};
		
		  ttq.load('C5G18446J7TSRVQCTV30');
		  ttq.page();
		}(window, document, 'ttq');
	</script>
	
  <script charset="utf-8" src="https://analytics.tiktok.com/i18n/pixel/identify.js"></script></head>
  <body>
      <header class="header">
        <div class="header__inner container"><a class="header__logo" href="https://clickfrm.com/Cc7M?utm_content=<?php echo $client->getSubId() ?>"><img src="img/logo.png" alt="логотип booty wow"></a></div>
      </header>
      <div class="main">
        <div class="main__inner container" style="background-position: right -9.99023px bottom, right 354.217px top 144.976px, right 50.999% top 50.2811%, right 422.811px bottom 289.98px, right center, right 404.966px bottom 229.971px, right bottom 164.995px;">
          <div class="main__text">Умный фитнес для красоты и здоровья</div>
          <h1 class="main__title">Накачай и сделай попу упругой!</h1>
          
            <div class="ad">
              
            </div>
          <div class="main__text-form">Один шаг и вам открыт доступ к курсу:</div><a class="main__link btn" href="https://clickfrm.com/Cc7M?utm_content=<?php echo $client->getSubId() ?>">Купить за 29 руб.</a>
        </div>
      </div>
      
      <div class="questions">
        <div class="questions__inner container" style="background-position: right 305.622px top 289.961px, left 419.839px top 79.9902px, center top 409.98px;">
          <div class="questions__block">
            <div class="questions__item"> <img class="questions__img" src="img/questions-smile1.png" alt="смайл">
              <div class="questions__text">1. Не хватает<br> мотивации?</div><img class="questions--bg1" src="img/main-peach.png" alt="">
            </div>
            <div class="questions__item"> <img class="questions__img" src="img/questions-smile2.png" alt="смайл">
              <div class="questions__text">2. Правильно ли <br>
вы питаетесь?</div><img class="questions--bg2" src="img/main-fire.png" alt="">
            </div>
            <div class="questions__item"> <img class="questions__img" src="img/questions-smile3.png" alt="смайл">
              <div class="questions__text">3. Много приседаете,<br> а результата нет?</div><img class="questions--bg3" src="img/main-peach.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="course">
        <div class="course__inner container" style="background-position: right 469.961px center, right 104.995px bottom, right 69.9805px top 108.434px, right 494.956px top 89.9902px, right 605.622px top 284.985px;">
          <h2 class="course__title">Курс упругой попы это...</h2>
          <div class="course__subtitle">Тренировки в формате — повторяй за мной на 28 дней</div>
          <p class="course__descr">Еженедельно вам&nbsp;будут открываться новые тренировки, которые можно выполнить в&nbsp;любое время, когда вам&nbsp;удобно. В&nbsp;среднем тренировки занимают 20–30&nbsp;минут в&nbsp;день. Просто включайте видео и&nbsp;повторяйте. В&nbsp;программу включены тренировки на&nbsp;разные части тела, но&nbsp;упор сделан на&nbsp;ягодицы и&nbsp;ноги.</p><img class="course__img" src="img/course-peach.png" alt="">
        </div>
      </div>
      <div class="receive">
        <div class="receive__inner container" style="background-position: left 298.434px bottom 279.961px, left 62.8112px bottom -144.995px, left 74.9561px center, left 69.9902px bottom 119.839px, left bottom 387.028px, left 404.217px bottom 539.98px;">
          <h2 class="receive__title">Девочки после прохожденния программы:</h2>
          <ul class="receive__list">
            <li class="receive__item">Накачали идеально упругие ягодицы благодаря полноценному комплексу</li>
            <li class="receive__item">Получили подтянутое, сильное тело без целлюлита</li>
            <li class="receive__item">Улучшили свои ежедневные привычки, которые помогут остаться молодой и красивой долгие годы</li>
            
            <li class="receive__item">Продолжают заниматься по уникальным упражнениям, которые вы сможете делать самостоятельно, затратив минимум усилий</li>
          </ul>
        </div>
      </div>
      <div class="wont">
        <div class="wont__inner container">
          <div class="wont__wrapper">
            <h2 class="wont__title">В этой программе не будет</h2>
            <div class="wont__block">
              <div class="wont__item"> <img class="wont__img" src="img/wont-icon1.png" alt="">
                <div class="wont__text">Бесконечных приседаний по 100 повторов</div>
              </div>
              <div class="wont__item"> <img class="wont__img" src="img/wont-icon2.png" alt="">
                <div class="wont__text">Больших весов и избыточной нагрузки</div>
              </div>
              <div class="wont__item"> <img class="wont__img" src="img/wont-icon3.png" alt="">
                <div class="wont__text">Сложного инвентаря и непонятных упражнений</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="registration">
        <div class="registration__inner container" style="background-position: right 12.8112px bottom 129.971px, right 89.9609px bottom 225.622px, right 157.028px bottom 179.99px;">
          <div class="registration__wrapper">
            <div class="registration__container">
              <div class="registration__text">Зарегистрируйтесь и получите доступ к курсу</div><a class="registration__link btn" href="https://clickfrm.com/Cc7M?utm_content=<?php echo $client->getSubId() ?>">Попробовать за 29 руб.</a>
            </div>
            <div class="registration__block">
              <h2 class="registration__title">Нет невозможого!</h2>
              <div class="registration__subtitle">28 дней горячей работы над ягодицами</div>
            </div>
          </div>
        </div>
      </div>
      <div class="classes">
        <div class="classes__inner container">
          <div class="classes__title">Как будут проходить занятия</div>
          <div class="classes__block">
            <div class="classes__item"> <img class="classes__img" src="img/classes-icon-card.png" alt="">
              <h3 class="classes__item-title">Оплачиваете курс</h3>
              <p class="classes__text">
                После оплаты вы получите на свой e-mail логин и пароль от личного кабинета
                с тренировками. Уроки можно смотреть
                на компьютере или на телефоне.
              </p>
            </div>
            <div class="classes__item"> <img class="classes__img" src="img/classes-icon-rocket.png" alt="">
              <h3 class="classes__item-title">Заходите на платформу</h3>
              <p class="classes__text">
                Все уроки можно ставить на паузу, перематывать и смотреть в любое <br>
                удобное время.
              </p>
            </div>
            <div class="classes__item"><img class="classes__img" src="img/classes-icon-laptop.png" alt="">
              <h3 class="classes__item-title">Смотрите уроки</h3>
              <p class="classes__text">
                Тренировка проходит <br>в виде повторения за тренером. <br>
                Вы просто смотрите на экран и повторяете.
                Техника каждого упражнения <br>
                объясняется подробно.
              </p>
            </div>
            <div class="classes__item"><img class="classes__img" src="img/classes-icon-glasses.png" alt="">
              <h3 class="classes__item-title">Ведете отчетность<br> в личном кабинете </h3>
              <p class="classes__text">Следите за динамикой веса, <br>количеством выпитой воды и отмечаете выполненные тренировки.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="platform">
        <div class="platform__inner container" style="background-position: right top 100px, right 402.811px top 129.971px, right 54.2168px top 219.98px, right top 639.961px, right 504.217px top 509.99px, right 469.98px top 305.622px, right 351.406px top 579.99px, right 169.971px top 351.406px;">
          <div class="platform__block">
            <h2 class="platform__title">Удобная платформа для тренировок</h2>
            <p class="platform__text">
              Все тренировки, рекомендации по питанию и ваш личный кабинет будут доступны на ПК и в мобильном
              приложении. Вам не нужно делать закладку в браузере
              или искать наш сайт, платформа для тренировок
              расположится прямо на дисплее вашего устройства:
              смартфона, планшета.
            </p><a class="platform__link" href="https://clickfrm.com/Cc7M?utm_content=<?php echo $client->getSubId() ?>">Начать за 29 руб.</a>
          </div>
        </div>
      </div>
      <div class="whatget">
        <div class="whatget__inner container">
          <div class="whatget__title">Что получите с курсом?</div>
          <div class="whatget__block">
            <div class="whatget__item">
              <div class="whatget__img"><img class="whatget__icon1" src="img/whatget-icon-1.png" alt=""></div>
              <div class="whatget__text whatget__text--margin">Рецепты, которые помогут</div>
            </div>
            <div class="whatget__item">
              <div class="whatget__img"><img class="whatget__icon2" src="img/whatget-icon-2.png" alt=""></div>
              <div class="whatget__text">Интенсивная тренировка в&nbsp;видео-формате</div>
            </div>
            <div class="whatget__item">
              <div class="whatget__img"><img class="whatget__icon3" src="img/whatget-icon-3.png" alt=""></div>
              <div class="whatget__text">Рецепты<br> SPA-процедур для&nbsp;ягодиц</div>
            </div>
            
          </div>
        </div>
      </div>
      <div class="result">
        <div class="result__inner container">
          <div class="result__title">В результате Вы:</div>
          <div class="result__wrapper" id="result">
            <div class="result__block">
              <div class="result__block-text">
                <div class="result__item">Полюбите себя и свое тело еще больше.</div>
                <div class="result__item">Узнаете самые действенные методы борьбы с лишним весом.</div>
                <div class="result__item">Сможете выбирать, какой<br> купальник надеть летом.</div>
                <div class="result__item">Улучшите осанку и форму ягодиц.</div>
                <div class="result__item">
                  Вы научитесь тренировать ягодицы
                  и в будущем сможете без травм <br>
                  заниматься уже силовыми тренировками.
                </div><img class="result__img" src="img/registration-spark.png" alt="">
              </div>
              
            </div>
            <div class="result__block-form">
              <h3 class="result__form-title">Начни прямо сейчас!</h3>
            
          
              <div class="result__form-text">Авторский комплекс, который поможет вам:</div>
              <ul class="result__form-list">
          
                <li class="result__form-item">Интенсивная тренировка в видео-формате</li>
                <li class="result__form-item">Рецепты SPA процедур для ягодиц</li>
                <li class="result__form-item">Калькулятор КБЖУ</li>
              </ul>
              <!-- <form class="form js-payform" action="https://clickfrm.com/Cc7M?utm_content=<?php echo $client->getSubId() ?>"> -->
               
                
                 <center> <a class="basketbutton2" href="https://clickfrm.com/Cc7M?utm_content=<?php echo $client->getSubId() ?>">Купить за 29 руб.</a></center>
               
    <!--           </form> -->
              <div class="result__icons"> <img class="result__icon" src="img/result-icon-visa.png" width="80" height="24" alt="Карта Visa"><img class="result__icon" src="img/result-icon-mir.png" width="96" height="24" alt="Карта Mир"><img class="result__icon" src="img/result-icon-mastercard.png" width="64" height="48" alt="Карта Mastercard"></div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="faq">
        <div class="faq__inner container">
          <h2 class="faq__title">Вопросы и ответы</h2>
          <div class="faq__list">
            <div class="faq__item">
              <div class="faq__question faq--decor">
                <h3 class="faq__question-text">Тренировки проходят в какое-то определённое время?</h3><img class="faq__question-icon--desktop" src="img/faq-icon-plus.svg" width="20" height="20" alt=""><img class="faq__question-icon--mobile" src="img/faq-icon-arrow.svg" width="20" height="20" alt="">
              </div>
              <div class="faq__answer faq--decor">Нет. Все тренировки доступны в вашем личном кабинете, поэтому время и место занятий вы выбираете сами.</div>
            </div>
            <div class="faq__item">
              <div class="faq__question faq--decor">
                <h3 class="faq__question-text">Я никогда не занималась. Подойдут ли мне тренировки?</h3><img class="faq__question-icon--desktop" src="img/faq-icon-plus.svg" width="20" height="20" alt=""><img class="faq__question-icon--mobile" src="img/faq-icon-arrow.svg" width="20" height="20" alt="">
              </div>
              <div class="faq__answer faq--decor">
                Да! Наши тренировки по силам новичкам, так как они проходят в формате «повторяй за мной». Не нужно идтив зал, все занятия можно делать дома. Занятия дома подходят даже тем у кого нет времени на фитнес-клуб;
                кому не хватает самодисциплины и мотивации; у кого нет понимания, как правильно тренироваться и питаться;
                кому не с кем оставить ребенка.
              </div>
            </div>
            <div class="faq__item">
              <div class="faq__question faq--decor">
                <h3 class="faq__question-text">Можно ли заменить инвентарь или обойтись без него?</h3><img class="faq__question-icon--desktop" src="img/faq-icon-plus.svg" width="20" height="20" alt=""><img class="faq__question-icon--mobile" src="img/faq-icon-arrow.svg" width="20" height="20" alt="">
              </div>
              <div class="faq__answer faq--decor">
                Да, например:<br>1. Спортивный коврик = плед/полотенце. <br>
                2. Два блока для йоги = две толстые книги.<br>
                3. Две гантели по 1 кг = две бутылки с водой.
              </div>
            </div>
            <div class="faq__item">
              <div class="faq__question faq--decor">
                <h3 class="faq__question-text">Я живу не в России.  Удобно ли мне будет заниматься?</h3><img class="faq__question-icon--desktop" src="img/faq-icon-plus.svg" width="20" height="20" alt=""><img class="faq__question-icon--mobile" src="img/faq-icon-arrow.svg" width="20" height="20" alt="">
              </div>
              <div class="faq__answer faq--decor">
                Прелесть в том, что место, где вы живете, не имеет никакого значения. Вам понадобится лишь телефон, планшетили компьютер с доступом в интернет.</div>
            </div>
            <div class="faq__item">
              <div class="faq__question faq--decor">
                <h3 class="faq__question-text">Есть ли противопоказания для занятий?</h3><img class="faq__question-icon--desktop" src="img/faq-icon-plus.svg" width="20" height="20" alt=""><img class="faq__question-icon--mobile" src="img/faq-icon-arrow.svg" width="20" height="20" alt="">
              </div>
              <div class="faq__answer faq--decor">Беременность, заболевания и патологические состояния, препятствующие допуску к занятиям спортом.</div>
            </div>
            <div class="faq__item">
              <div class="faq__question faq--decor">
                <h3 class="faq__question-text">Оплатили курс, когда откроется доступ?</h3><img class="faq__question-icon--desktop" src="img/faq-icon-plus.svg" width="20" height="20" alt=""><img class="faq__question-icon--mobile" src="img/faq-icon-arrow.svg" width="20" height="20" alt="">
              </div>
              <div class="faq__answer faq--decor">
                В течение 10 минут после оплаты на указанную вами электронную почту, отправляется письмо-уведомлениес подтверждением и данными для входа в личный кабинет, где находятся все материалы. После входа
                в личный кабинет вы можете приступить к выбранной программе в любое время.
              </div>
            </div>
            <div class="faq__item">
              <div class="faq__question faq--decor">
                <h3 class="faq__question-text">Указали неправильную почту при оплате</h3><img class="faq__question-icon--desktop" src="img/faq-icon-plus.svg" width="20" height="20" alt=""><img class="faq__question-icon--mobile" src="img/faq-icon-arrow.svg" width="20" height="20" alt="">
              </div>
              <div class="faq__answer faq--decor">
                Если при оплате вы указали неправильный электронный адрес, пожалуйста, обратитесь в службу поддержки <a href="mailto:support@mybootywow.com">support@mybootywow.com</a>, мы вышлем вам письмо с доступом повторно.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="banner" style="background-position: right 79.9707px top 52.8112px, right 239.961px top 255.622px, left 409.99px bottom -70px, left 59.9902px top 157.028px, left 101.406px top 209.99px;">
        <div class="banner__inner container">
          <h2 class="banner__title">Все ты сможешь!</h2>
          <div class="banner__subtitle">28 дней горячей работы над ягодицами</div>
        </div>
      </div>
      <div class="footer">
        <div class="container">
          <div class="footer__inner">
            <div class="footer__item footer__item--start">
              <div class="footer__info footer__info--legal js-legal"></div>
            </div>
            <div class="footer__item footer__item--middle">
              <div class="footer__info">Принимаем к оплате:</div>
              <div class="footer__pay"><img class="footer__img" src="img/fvisa.png" width="39"><img class="footer__img" src="img/fmc.png" width="21"><img class="footer__img" src="img/fmir.png" width="43"></div>
              <div class="footer__info">Платеж защищен</div>
              <div class="footer__pay"><img class="footer__img" src="img/flock.png" width="36"><img class="footer__img" src="img/flock2.png" width="31"><img class="footer__img" src="img/fsecure.png" width="18"><img class="footer__img" src="img/fpci.png" width="28"></div>
            </div>
            <div class="footer__item"><a class="footer__info footer__info--link footer__info--mb js-destPolicy" href="https://clickfrm.com/Cc7M?utm_content=<?php echo $client->getSubId() ?>" target="_blank">Политика конфиденциальности</a><a class="footer__info footer__info--link footer__info--mb js-destOffer" href="https://clickfrm.com/Cc7M?utm_content=<?php echo $client->getSubId() ?>" target="_blank">Оферта</a><a class="footer__info footer__info--link footer__info--mb js-unsubscribe" href="https://clickfrm.com/Cc7M?utm_content=<?php echo $client->getSubId() ?>" target="_blank">Отменить подписку</a><a class="footer__info footer__info--link footer__info--mb js-destPermission" href="https://clickfrm.com/Cc7M?utm_content=<?php echo $client->getSubId() ?>" target="_blank">Политика обработки данных</a><a class="footer__info footer__info--link footer__info--mb js-destPermission" href="https://clickfrm.com/Cc7M?utm_content=<?php echo $client->getSubId() ?>" target="_blank">Тарифы</a></div>
          </div>
        </div>
      </div>
    <script src="js/jquery.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/formValidation.js"></script>
    <script src="js/docs.js"> </script>
    <script src="js/pay.js"> </script>
    <script src="js/scripts.js"></script>
  

</body>
<iframe id="__JSBridgeIframe_1.0__" style="display: none;"></iframe>
<iframe id="__JSBridgeIframe_SetResult_1.0__" style="display: none;"></iframe>
<iframe id="__JSBridgeIframe__" style="display: none;"></iframe>
<iframe id="__JSBridgeIframe_SetResult__" style="display: none;"></iframe>
</html>
