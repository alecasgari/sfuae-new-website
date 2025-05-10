<?php
// footer.php

// 1. Include the configuration file to get the $base_path if not already included
// (e.g., if footer.php could somehow be loaded standalone, though unlikely with header.php)
// Using include_once is safe. If header.php already included it, it won't be included again.
if (!isset($base_path)) { // Check if $base_path is already set (e.g., by header.php)
    // If config.php is not in the same directory, adjust the path accordingly.
    // Assuming config.php is in the root, same as footer.php
    $configFile = __DIR__ . '/config.php';
    if (file_exists($configFile)) {
        include_once $configFile;
    } else {
        // Fallback or error handling if config.php is not found
        // For simplicity, we'll define a default $base_path, but ideally, config.php should always be found.
        // This fallback is more for preventing errors if somehow $base_path isn't set.
        // On a live server or properly configured local server, $base_path from header's include should be sufficient.
        $base_path = '/'; // Default to root if config.php is missing and not included by header
        // You might want to log an error here in a real application
    }
}

// For footer navigation links, ensure $current_page_filename is available if you plan to use it for active states
// It's usually defined in header.php. If footer is ever used standalone, it would need to be defined here too.
// For now, we assume header.php has already defined it if needed for other parts of the page.

?>
<footer class="cs_footer cs_primary_bg">
    <div class="cs_height_150 cs_height_lg_60"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="cs_footer_info">
                    <img src="<?php echo htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8'); ?>assets_new/img/SF%20Logo%20Full%20White.svg" alt="Spring Future Logo" style="max-height: 100px; margin-bottom: 25px;" />
                    <p>
                        With over 15 years of experience in website designing and Online advertisement, Spring Future is here to help you succeed online.
                    </p>
                    <a href="mailto:info@sfuae.co"
                        class="cs_primary_font anim_text_upanddowns"><span>info@sfuae.co</span></a>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="cs_footer_social">
                    <a href="https://www.facebook.com/sfuae.co" class="cs_center" target="_blank">Facebook</a>
                    <a href="https://www.linkedin.com/company/spring-future/" class="cs_center" target="_blank">Linkedin</a>
                    <a href="https://www.instagram.com/sfuae.co/" class="cs_center" target="_blank">Instagram</a>
                    <a href="https://twitter.com/AlecAsgari" class="cs_center" target="_blank">Twitter</a>
                    <a href="https://wa.me/971504302948" class="cs_center" target="_blank">WhatsApp</a>
                </div>
                <div class="cs_height_60 cs_height_lg_30"></div>
                <ul class="cs_footer_contact_list cs_mp0">
                    <li>
                        <i>
                            <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 0.0195312C3.14027 0.0195312 0 3.01027 0 6.68621C0 7.78973 0.289693 8.88387 0.840408 9.85434L6.6172 17.8047C6.69411 17.9373 6.84065 18.0195 7 18.0195C7.15935 18.0195 7.30589 17.9373 7.3828 17.8047L13.1617 9.85105C13.7103 8.88387 14 7.78969 14 6.68617C14 3.01027 10.8597 0.0195312 7 0.0195312ZM7 10.0195C5.07014 10.0195 3.50002 8.52418 3.50002 6.68621C3.50002 4.84824 5.07014 3.35289 7 3.35289C8.92986 3.35289 10.5 4.84824 10.5 6.68621C10.5 8.52418 8.92986 10.0195 7 10.0195Z" fill="currentColor" />
                            </svg>
                        </i>
                        Business Bay, Dubai, UAE
                    </li>
                    <li>
                        <i>
                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.6837 11.9266C13.0957 11.3461 12.3616 11.3461 11.7773 11.9266C11.3316 12.3686 10.8859 12.8105 10.4477 13.26C10.3278 13.3836 10.2267 13.4098 10.0806 13.3274C9.79225 13.1701 9.48513 13.0427 9.20797 12.8704C7.91581 12.0577 6.8334 11.0127 5.87458 9.83668C5.39891 9.2524 4.97568 8.62692 4.6798 7.92279C4.61987 7.78046 4.63111 7.68683 4.74721 7.57072C5.19292 7.14 5.62738 6.69805 6.06559 6.25609C6.67609 5.64185 6.67609 4.92273 6.06185 4.30474C5.71353 3.95268 5.3652 3.6081 5.01688 3.25604C4.65733 2.89648 4.30151 2.53318 3.93821 2.17736C3.35018 1.60432 2.61609 1.60432 2.03181 2.18111C1.58236 2.62306 1.15164 3.07626 0.694705 3.51072C0.271476 3.91148 0.0579884 4.40212 0.0130438 4.97517C-0.0581186 5.90777 0.17035 6.78794 0.492454 7.64563C1.15164 9.42095 2.15541 10.9978 3.37266 12.4435C5.01688 14.3986 6.97947 15.9454 9.27539 17.0615C10.3091 17.5634 11.3803 17.9492 12.5451 18.0129C13.3466 18.0578 14.0433 17.8556 14.6013 17.2301C14.9834 16.8031 15.4141 16.4136 15.8186 16.0053C16.4178 15.3986 16.4216 14.6645 15.8261 14.0652C15.1145 13.3499 14.3991 12.6382 13.6837 11.9266Z" fill="currentColor" />
                                <path d="M12.9672 8.93825L14.3493 8.70229C14.132 7.4326 13.5328 6.28277 12.6227 5.36889C11.6601 4.40633 10.4428 3.79957 9.10199 3.6123L8.90723 5.00184C9.9447 5.14791 10.8885 5.61609 11.6339 6.36142C12.338 7.06555 12.7987 7.95696 12.9672 8.93825Z" fill="currentColor" />
                                <path d="M15.1294 2.93344C13.5338 1.33791 11.5151 0.330398 9.28656 0.0195312L9.0918 1.40907C11.0169 1.67874 12.7623 2.55141 14.1406 3.92597C15.4477 5.23311 16.3054 6.88483 16.6163 8.70134L17.9983 8.46538C17.635 6.36047 16.6425 4.45033 15.1294 2.93344Z" fill="currentColor" />
                            </svg>
                        </i>
                        +971 50 430 2948
                    </li>
                    <li>
                        <i>
                            <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5043 8.78757C10.0565 9.08612 9.53631 9.24394 9 9.24394C8.46373 9.24394 7.94356 9.08612 7.49574 8.78757L0.119848 3.87016C0.0789258 3.84288 0.0390586 3.81444 0 3.78519V11.8429C0 12.7667 0.749707 13.4999 1.65702 13.4999H16.3429C17.2668 13.4999 18 12.7502 18 11.8429V3.78516C17.9608 3.81448 17.9209 3.84299 17.8799 3.87031L10.5043 8.78757Z" fill="currentColor" />
                                <path d="M0.704883 2.99347L8.08077 7.91091C8.35998 8.09707 8.67997 8.19012 8.99996 8.19012C9.31999 8.19012 9.64002 8.09703 9.91923 7.91091L17.2951 2.99347C17.7365 2.69939 18 2.2072 18 1.67599C18 0.762594 17.2569 0.0195312 16.3435 0.0195312H1.65646C0.743098 0.0195664 0 0.762629 0 1.67687C0 2.2072 0.263531 2.69939 0.704883 2.99347Z" fill="currentColor" />
                            </svg>
                        </i>
                        info@sfuae.co
                    </li>
                </ul>
            </div>
        </div>
        <div class="cs_height_90 cs_height_lg_60"></div>
        <ul class="cs_footer_nav">
            <li><a href="<?php echo htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8'); ?>home.php">HOME</a></li>
            <li><a href="<?php echo htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8'); ?>about.php">ABOUT</a></li>
            <li><a href="https://sfuae.co/blog/" target="_blank">BLOG</a></li> <li><a href="<?php echo htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8'); ?>contact.php">CONTACT US</a></li>
        </ul>
    </div>
    <div class="cs_copyright text-center">
        <div class="container">Copyright © <?php echo date("Y"); ?> Spring Future. All Rights Reserved</div>
    </div>
</footer>
</div> <div class="cs_toggle">
    <div class="setting_mode">
        <button id="open"><img src="<?php echo htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8'); ?>assets_new/img/brightnes.svg" alt="Toggle Light/Dark Mode"></button>
        <button id="clecel"><img src="<?php echo htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8'); ?>assets_new/img/close.svg" alt="Close Mode Settings"></button>
    </div>
    <div class="cs_mode_btn js-mode-type">
        <button class="active" data-mode="light">Light</button>
        <button data-mode="dark">Dark</button>
    </div>
</div>
<span class="cs_scrollup">
    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 10L1.7625 11.7625L8.75 4.7875V20H11.25V4.7875L18.225 11.775L20 10L10 0L0 10Z" fill="currentColor" />
    </svg>
</span>

<script src="<?php echo htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8'); ?>assets_new/js/plugins/jquery-3.7.0.min.js"></script>
<script src="<?php echo htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8'); ?>assets_new/js/plugins/isotope.pkg.min.js"></script>
<script src="<?php echo htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8'); ?>assets_new/js/plugins/swiper.min.js"></script>
<script src="<?php echo htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8'); ?>assets_new/js/plugins/lightgallery.min.js"></script>
<script src="<?php echo htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8'); ?>assets_new/js/plugins/SplitText.min.js"></script>
<script src="<?php echo htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8'); ?>assets_new/js/plugins/ScrollToPlugin.min.js"></script>
<script src="<?php echo htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8'); ?>assets_new/js/plugins/ScrollTrigger.min.js"></script>
<script src="<?php echo htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8'); ?>assets_new/js/plugins/ScrollSmoother.min.js"></script>
<script src="<?php echo htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8'); ?>assets_new/js/plugins/gsap.min.js"></script>
<script src="<?php echo htmlspecialchars($base_path, ENT_QUOTES, 'UTF-8'); ?>assets_new/js/main.js"></script>

</body>
</html>
