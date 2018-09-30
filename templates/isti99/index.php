<?php
 /**
 * Template for ISTI99.RU by Gutnev Andrey
 * @author     Gutnev Andrey
 * @copyright  Copyright (c) 2014
 * @license    GNU GPL
 */
 
 defined('_JEXEC') or die('Restricted access');
 $mytitle = JFactory::getDocument()->getTitle();
$myurl = JURI::current();
unset(	$this->_scripts[$this->baseurl.'/media/system/js/caption.js']);
$this->_script = preg_replace('%window\.addEvent\(\'load\',\s*function\(\)\s*{\s*new\s*JCaption\(\'img.caption\'\);\s*}\);\s*%', '', $this->_script);

	unset(	$this->_scripts[$this->baseurl.'/media/jui/js/jquery.min.js'],
	$this->_scripts[$this->baseurl.'/media/jui/js/jquery-migrate.min.js'],
	$this->_scripts[$this->baseurl.'/media/jui/js/jquery-noconflict.js'],
	$this->_scripts[$this->baseurl.'/media/system/js/mootools-core.js'],
	$this->_scripts[$this->baseurl.'/media/system/js/core.js'],
	$this->_scripts[$this->baseurl.'/media/jui/js/bootstrap.min.js'],
	$this->_scripts[$this->baseurl.'/media/system/js/tabs-state.js']);	
 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<meta content="telephone=no" name="format-detection">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<jdoc:include type="head" />
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/myscripts.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/init.js" type="text/javascript"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/mobilyslider.js" type="text/javascript"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/lightbox.js" type="text/javascript"></script>

</head>

<body>
<div class="header">
	<div class="center-header">
	<a class="logo" href="/"><img src="templates/isti99/images/logo.png" alt="Империя стиля" title="Империя стиля"/></a>
	
	<div class="slider slider2">
		<div class="sliderContent">
			<div class="item">
				<img src="templates/isti99/images/slider/img1.jpg" alt="" />
			</div>
			<div class="item">
				<img src="templates/isti99/images/slider/img2.jpg" alt="" />
			</div>
			<div class="item">
				<img src="templates/isti99/images/slider/img3.jpg" alt="" />
			</div>
			<div class="item">
				<img src="templates/isti99/images/slider/img4.jpg" alt="" />
			</div>
			<div class="item">
				<img src="templates/isti99/images/slider/img5.jpg" alt="" />
			</div>
		</div>
	</div>
    
    <div class="contacts">
    <div class="adres">
    	<div class="adr"> г. Курск, пр-т Дружбы, 11/2</div>
        <div class="time">Время работы: без выходных</div>
        <div class="time">10:00 - 20:00</div>
    </div>
    <a href="mailto:i.sti.99@yandex.ru" class="email">i.sti.99@yandex.ru</a>
    </div>    
</div>
	</div>
	
	
	<div class="topmenu">
		<jdoc:include type="modules" name="topmenu" style="xhtml"/>
	</div>

	
<div class="container">
	
	<div class="main">
	
        <div class="content">
            <div class="message_error"><jdoc:include type="message" /></div>
            <jdoc:include type="component" />
        </div>
    
         <div class="advent">
            <a href="http://isti99.ru/nashi-mastera" class="adv1">
                <p>Лучшие мастера</p>
            </a>
            <a href="http://isti99.ru/skidki" class="adv2">
                <p>Скидки</p>
            </a>
            <a href="http://isti99.ru/aktsii" class="adv3">
                <p>Акции</p>
            </a>
        </div>
    
	</div>

    <div class="left">
        <div class="leftsoc">
            <h3>Мы в социальных сетях</h3>
            <div class="soc-wrap">
                <!--noindex--><a rel="nofollow" href="https://vk.com/club130080017" class="soc-block soc-vk" target="_blank">В контакте</a><!--/noindex-->
                <!--noindex--><a rel="nofollow" href="https://ok.ru/profile/571571185998" class="soc-block soc-ok" target="_blank">Одноклассники</a><!--/noindex-->
            </div>
            <div class="soc-info">Добавьтесь в друзья и получите скидку до 50%!</div>
        </div>
        <div class="leftmenu">
            <jdoc:include type="modules" name="leftmenu" style="xhtml"/>
        </div>
    </div>
       
</div>

	<!--end-conteiner-->
<div class="footer">
	<div itemscope itemtype="http://schema.org/LocalBusiness" class="footer-center vcard">
		<div class="copyright">&copy; <span class="category">Студия красоты </span><a itemprop="name" class="fn org url" href="http://isti99.ru">Империя стиля.</a> Все права защищены.</div>
        <div class="footer-contacts"><p><span class="tel" itemprop="telephone">57-38-88</span>, <span class="tel" itemprop="telephone">+7(910)217-21-84</span></p>
        <p itemprop="email">i.sti.99@yandex.ru</p>
        <p class="workhours" itemprop="openingHours">пн-вс 10:00-20:00</p>
		 <div class="adr" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
			<span class="street-address" itemprop="streetAddress">пр-т Дружбы, 11/2,</span>
			<span class="locality" itemprop="addressLocality">г. Курск</span>
		 </div>
        </div>
		
		<div class="metrika">
		<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=26237505&amp;from=informer"
target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/26237505/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:26237505,lang:'ru'});return false}catch(e){}"/></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter26237505 = new Ya.Metrika({id:26237505,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/26237505" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
		</div>
		
		<div class="enterkursk"><a target="_blank" href="https://enterkursk.ru">enterkursk</a></div>
        
            <div class="socbuttons">
            	<div class="vk">
				<!-- noindex --><a rel="nofollow" target="_blank" href="http://vkontakte.ru/share.php?url=<?php echo($myurl)?>"></a><!--/ noindex -->
				</div>
				
				<div class="twitter">
				<!-- noindex --><a rel="nofollow" target="_blank" href="http://twitter.com/intent/tweet?text=<?php echo($myurl);?>"></a><!--/ noindex -->
				</div>
				
				<div class="facebook">
				<!-- noindex --><a rel="nofollow" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo($myurl);?>"></a><!--/ noindex -->
				</div>
				
				<div class="mail">
				<!-- noindex --><a rel="nofollow" target="_blank" href="http://connect.mail.ru/share?share_url=<?php echo($myurl);?>"></a><!--/ noindex -->
				</div>
				
				<div class="google">
				<!-- noindex --><a rel="nofollow" target="_blank" href="https://plus.google.com/share?url=<?php echo($myurl);?>"></a><!--/ noindex -->
				</div>
				
				<div class="odnoclassniki">
				<!-- noindex --><a rel="nofollow" target="_blank" href="http://www.odnoklassniki.ru/dk?st.cmd=addShare&amp;st.s=1&amp;st._surl=<?php echo($myurl);?>"></a><!--/ noindex -->
				</div>
        
        </div>
        
    </div>
</div>

<div class="form-box">
    <div class="form-wrap">
        <a class="obr-call" href="#">Записаться на прием</a>
        <div class="form-zakaz">
            <form action="/mail.php" method="post">

                <div class="form-input">
                    <input class="form-name" type="text" placeholder="Введите имя" required name="name" size="16" />
                </div>

                <div class="form-input">
                    <input class="form-phone" type="tel" placeholder="телефон" required pattern="(\+?\d[- .]*){7,13}" title="Международный, государственный или местный телефонный номер" name="phone" size="16" />
                </div>

                <p><input class="form-submit" type="submit" name="submit" value="Отправить" /></p>

            </form>
        </div>
    </div>
</div>

<div class="scroll">Наверх</div>
</body>
</html>
