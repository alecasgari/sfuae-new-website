<?php
// header.php

// Determine the current page to set the active class for navigation
$current_page = basename($_SERVER['PHP_SELF']);

// Default Title and Favicon - Can be overridden by individual pages if needed
$site_title = "Spring Future - Digital Innovation Agency";
$favicon_path = "assets/img/logo/sf-circle-logo.png"; // Ensure this favicon exists

// You can define meta tags here or in individual pages
$meta_author = "Spring Future";
$meta_description = "Spring Future is a leading digital innovation agency in Dubai, specializing in AI solutions, digital marketing, web design, and event management.";
$meta_keywords = "Spring Future, AI, Digital Marketing, Web Design, Event Management, Dubai, UAE, Innovation";

?>
<head>
    <meta charset="utf-8" /> <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="<?php echo $meta_author; ?>" />
    <meta name="description" content="<?php echo $meta_description; ?>"/>
    <meta name="keywords" content="<?php echo $meta_keywords; ?>"/>

    <link rel="icon" href="<?php echo $favicon_path; ?>" />
    <title><?php echo $site_title; // Use a dynamic title, or set one per page before including header.php ?></title>

    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Kanit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>

<body>
    <div class="cs_cursor_1"></div>
    <div class="cs_cursor_2"></div>

    <div class="cs_preloader cs_center">
        <div class="cs_preloader_in">
            <div class="loading loading05">
                <span>S</span>
                <span>P</span>
                <span>R</span>
                <span>I</span>
                <span>N</span>
                <span>G</span>
                <span>&nbsp;</span>
                <span>F</span>
                <span>U</span>
                <span>T</span>
                <span>U</span>
                <span>R</span>
                <span>E</span>
            </div>
        </div>
    </div>

    <header class="cs_site_header cs_style1 cs_sticky_header cs_site_header_full_width">
        <div class="cs_main_header">
            <div class="container">
                <div class="cs_main_header_in">
                    <div class="cs_main_header_left">
                        <a class="cs_site_branding logo-dark" href="index.php">
                            <img src="assets/img/logo/logo.webp" alt="Spring Future Logo">
                        </a>
                        <a class="cs_site_branding logo-white" href="index.php">
                            <img src="assets/img/logo/logo_white.webp" alt="Spring Future Logo White">
                        </a>
                    </div>
                    <div class="cs_main_header_right">
                        <nav class="cs_nav cs_medium"> <ul class="cs_nav_list">
                                <li <?php echo ($current_page == 'index.php') ? 'class="active"' : ''; ?>>
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="menu-item-has-children <?php echo (in_array($current_page, ['digital-marketing.php', 'ai-solutions.php', 'event-management.php'])) ? 'active' : ''; ?>">
                                    <a href="#">Services</a>
                                    <ul class="cs_mega_wrapper cs_secondary_font">
                                        <li><a href="https://sfuae.co/marketing/" target="_blank">Digital Marketing</a></li>
                                        <li><a href="https://sfuae.co/ai-artificial-intelligence/" target="_blank">Artificial Intelligence</a></li>
                                        <li><a href="https://sfuae.co/event/" target="_blank">Event Management</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="https://sfuae.co/blog/" target="_blank">Blog</a>
                                </li>
                                <li <?php echo ($current_page == 'about.php') ? 'class="active"' : ''; ?>>
                                    <a href="about.php">About Us</a>
                                </li>
                                <li <?php echo ($current_page == 'contact.php') ? 'class="active"' : ''; ?>>
                                    <a href="contact.php">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="cs_toolbox"> <span class="cs_icon_btn">
                                <span class="cs_icon_btn_in">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="cs_side_header">
        <button class="cs_close" aria-label="Close mobile menu"></button> <div class="cs_side_header_overlay"></div>
        <div class="cs_side_header_in">
            <div class="cs_side_header_top"> <a class="cs_site_branding" href="index.php">
                    <img src="assets/img/logo/logo_white.webp" alt="Spring Future Logo" />
                </a>
            </div>

            <div class="row align-items-end" style="height: calc(100% - 100px); /* Adjust 100px if logo area height is different */">
                <div class="col-lg-7 col-md-6"> <div class="cs_box_one">
                        <div class="cs_nav_black_section cs_font_changes">
                            <ul>
                                <li class="menu-item-has-black-section cs_style_1 <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="menu-item-has-black-section cs_style_1 <?php echo (in_array($current_page, ['digital-marketing.php', 'ai-solutions.php', 'event-management.php'])) ? 'active' : ''; ?>">
                                    <a href="#">Services</a>
                                    <ul>
                                        <li><a href="https://sfuae.co/marketing/" target="_blank">Digital Marketing</a></li>
                                        <li><a href="https://sfuae.co/ai-artificial-intelligence/" target="_blank">Artificial Intelligence</a></li>
                                        <li><a href="https://sfuae.co/event/" target="_blank">Event Management</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-black-section cs_style_1">
                                    <a href="https://sfuae.co/blog/" target="_blank">Blog</a>
                                </li>
                                <li class="menu-item-has-black-section cs_style_1 <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">
                                    <a href="about.php">About Us</a>
                                </li>
                                <li class="menu-item-has-black-section cs_style_1 <?php echo ($current_page == 'contact.php') ? 'class="active"' : ''; ?>">
                                    <a href="contact.php">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-5 offset-md-1"> <div class="cs_box_two">
                        <div>
                            <p class="cs_contact_info_item"> <svg width="14" height="18" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 0.0195312C3.14027 0.0195312 0 3.01027 0 6.68621C0 7.78973 0.289693 8.88387 0.840408 9.85434L6.6172 17.8047C6.69411 17.9373 6.84065 18.0195 7 18.0195C7.15935 18.0195 7.30589 17.9373 7.3828 17.8047L13.1617 9.85105C13.7103 8.88387 14 7.78969 14 6.68617C14 3.01027 10.8597 0.0195312 7 0.0195312ZM7 10.0195C5.07014 10.0195 3.50002 8.52418 3.50002 6.68621C3.50002 4.84824 5.07014 3.35289 7 3.35289C8.92986 3.35289 10.5 4.84824 10.5 6.68621C10.5 8.52418 8.92986 10.0195 7 10.0195Z" fill="currentColor"></path>
                                </svg>
                                <span class="ms-2">Office 707, Bldg 10, <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bay Square, Business Bay, <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dubai, UAE</span>
                            </p>

                            <h6 class="cs_phone_number cs_fs_22"> <a href="tel:+971504302948">
                                    <svg width="24" height="24" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg" style="transform: scale(1.3); margin-right: 8px;"> <path d="M13.6837 11.9266C13.0957 11.3461 12.3616 11.3461 11.7773 11.9266C11.3316 12.3686 10.8859 12.8105 10.4477 13.26C10.3278 13.3836 10.2267 13.4098 10.0806 13.3274C9.79225 13.1701 9.48513 13.0427 9.20797 12.8704C7.91581 12.0577 6.8334 11.0127 5.87458 9.83668C5.39891 9.2524 4.97568 8.62692 4.6798 7.92279C4.61987 7.78046 4.63111 7.68683 4.74721 7.57072C5.19292 7.14 5.62738 6.69805 6.06559 6.25609C6.67609 5.64185 6.67609 4.92273 6.06185 4.30474C5.71353 3.95268 5.3652 3.6081 5.01688 3.25604C4.65733 2.89648 4.30151 2.53318 3.93821 2.17736C3.35018 1.60432 2.61609 1.60432 2.03181 2.18111C1.58236 2.62306 1.15164 3.07626 0.694705 3.51072C0.271476 3.91148 0.0579884 4.40212 0.0130438 4.97517C-0.0581186 5.90777 0.17035 6.78794 0.492454 7.64563C1.15164 9.42095 2.15541 10.9978 3.37266 12.4435C5.01688 14.3986 6.97947 15.9454 9.27539 17.0615C10.3091 17.5634 11.3803 17.9492 12.5451 18.0129C13.3466 18.0578 14.0433 17.8556 14.6013 17.2301C14.9834 16.8031 15.4141 16.4136 15.8186 16.0053C16.4178 15.3986 16.4216 14.6645 15.8261 14.0652C15.1145 13.3499 14.3991 12.6382 13.6837 11.9266Z" fill="currentColor"></path>
                                        <path d="M12.9672 8.93825L14.3493 8.70229C14.132 7.4326 13.5328 6.28277 12.6227 5.36889C11.6601 4.40633 10.4428 3.79957 9.10199 3.6123L8.90723 5.00184C9.9447 5.14791 10.8885 5.61609 11.6339 6.36142C12.338 7.06555 12.7987 7.95696 12.9672 8.93825Z" fill="currentColor"></path>
                                        <path d="M15.1294 2.93344C13.5338 1.33791 11.5151 0.330398 9.28656 0.0195312L9.0918 1.40907C11.0169 1.67874 12.7623 2.55141 14.1406 3.92597C15.4477 5.23311 16.3054 6.88483 16.6163 8.70134L17.9983 8.46538C17.635 6.36047 16.6425 4.45033 15.1294 2.93344Z" fill="currentColor"></path>
                                    </svg><span class="ms-2">+971 50 430 2948</span>
                                </a>
                            </h6>

                            <ul class="cs_social_link cs_style_1"> <li><a href="https://www.facebook.com/SpringFutureUAE/" target="_blank">Facebook</a></li>
                                <li><a href="https://twitter.com/SpringFutureUAE" target="_blank">Twitter</a></li>
                                <li><a href="https://www.linkedin.com/company/spring-future/" target="_blank">LinkedIn</a></li>
                                <li><a href="https://www.instagram.com/springfutureuae/" target="_blank">Instagram</a></li>
                            </ul>

                            <hr class="mt-3 me-lg-5 mb-3" /> <h6 class="cs_fs_20"> <a href="mailto:info@sfuae.co" class="cs_primary_font cs_text_btn">
                                  <span class="cs_text_white">info@sfuae.co</span> </a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    