<footer class="footer">
    <div class="container">
        <div class="footer_body">
            <div class="footer_body_column">
                <div class="footer_contact_info">
                    <h3 class="footer_contact_title footer_title">Contact Information</h3>
                    <div class="footer_contact_body">
                        <div class="footer_contact_info_icon">
                            <img src="img/logo/icon_location.png" alt="">
                        </div>
                        <div class="footer_contact_text footer_text">
                            <div class="footer_contact_text_location">
                                Consult aid, Newyork, 1st block
                                1234 Building no 8, floor 3
                            </div>
                            <div class="footer_contact_communication">
                                <span>Email:</span> info@consultaid.com
                                <span>Phone:</span> 8425 848 895
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_navigation">
                    <h3 class="footer_title">Navigation</h3>
                    <div class="footer_navigation_body footer_text">
                        <ul class="footer_navigation_menu">
                            <li><a class="footer_navigation_menu_link" href="">Home</a></li>
                            <li><a class="footer_navigation_menu_link" href="">About us</a></li>
                            <li><a class="footer_navigation_menu_link" href="">Services</a></li>
                            <li><a class="footer_navigation_menu_link" href="">Pages</a></li>
                            <li><a class="footer_navigation_menu_link" href="">Blog</a></li>
                            <li><a class="footer_navigation_menu_link" href="">Carreers</a></li>
                            <li><a class="footer_navigation_menu_link" href="">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer_body_column">
                <div class="footer_services">
                    <h3 class="footer_title">Services</h3>
                    <div class="footer_services_body footer_text">
                        <ul class="footer_services_menu">
                            <li><a class="footer_services_menu_link" href="">Customer Support</a></li>
                            <li><a class="footer_services_menu_link" href="">Bulk Sms service</a></li>
                            <li><a class="footer_services_menu_link" href="">Business boosting</a></li>
                            <li><a class="footer_services_menu_link" href="">Money exchange</a></li>
                            <li><a class="footer_services_menu_link" href="">Consulting Services</a></li>
                            <li><a class="footer_services_menu_link" href="">Strategic Planning</a></li>
                            <li><a class="footer_services_menu_link" href="">International</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer_newsletter">
                    <h3 class="footer_title">Newsletter</h3>
                    <div class="footer_newsletter_body">
                        <div class="footer_newsletter_text footer_text">
                            Enter your email & subscribing newsletter
                        </div>
                        <form class="footer_newsletter_form">
                            <div class="footer_newsletter_form_img">
                                <img src="img/logo/icon_email.png" alt="">
                            </div>
                            <input type="text" placeholder="Email address" class="footer_newsletter_input">
                            <button class="footer_newsletter_button">subscribe</button>
                        </form>
                        <div class="footer_newsletter_social">
                            <a href="">
                                <div class="footer_newsletter_social_facebook "><?= $footerSocialLink['facebook'] ?></div>
                            </a>
                            <a href="">
                                <div class="footer_newsletter_social_tweeter"><?= $footerSocialLink['google'] ?></div>
                            </a>
                            <a href="">
                                <div class="footer_newsletter_social_google"><?= $footerSocialLink['tweeter'] ?></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_text_bottom footer_text">2017 © Consultaid. All rights reserved</div>
    </div>
</footer>

<script src='js/j.query.mins.js'></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src='js/swiper.js?<?= time() ?>'></script>
<script src="js/validate_form.js?<?= time() ?>"></script>
<script src='js/script.js?<?= time() ?>'></script>
</body>
</html>
