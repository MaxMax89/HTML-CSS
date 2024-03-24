<footer>
    <div class="footer_labels">
        <div class="footer_labels_container container">
			<? for ($i = 1; $i <= 5; $i++): ?>
                <div class="footer_labels_img">
                    <img src="img/footer_label<?= $i ?>.png" alt="img">
                </div>
			<? endfor; ?>
        </div>
    </div>
    <div class="footer_navbar">
        <div class="footer_navbar_container container">
            <div class="about_creation">
                <p>built with <img src="img/heart.png" alt="img"> wp theme by alitstudio</p>
            </div>
            <ul class="footer_navbar_manu navbar_manu">
                <li><a href="#">home</a></li>
                <li><a href="#">pages</a></li>
                <li><a href="#">shortcodes</a></li>
                <li><a href="#">features</a></li>
                <li><a href="#">blog</a></li>
                <li><a href="#">portfolio</a></li>
                <li><a href="#">shop</a></li>
            </ul>
        </div>
    </div>
</footer>
</body>
</html>