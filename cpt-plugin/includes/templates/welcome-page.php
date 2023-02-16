<header>
    <div class="header-menu-container">
        <img src="http://localhost:10015/wp-content/themes/astra/inc/assets/images/astra-logo.svg"></img>
            <nav>
                <h2>Welcome</h2>
            </nav>
    </div>
    <button class="header-cta">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
            <path d="M8.16667 3.90182V15.0335C8.16667 15.8434 7.51008 16.5 6.70015 16.5C6.08038 16.5 5.52752 16.1104 5.31907 15.5267L3.53039 10.4024M14 9.83333C15.3807 9.83333 16.5 8.71404 16.5 7.33333C16.5 5.95262 15.3807 4.83333 14 4.83333M3.53039 10.4024C2.33691 9.89508 1.5 8.71194 1.5 7.33333C1.5 5.49238 2.99238 4 4.83333 4H6.36007C9.77727 4 12.7141 2.97159 14 1.5L14 13.1667C12.7141 11.6951 9.77727 10.6667 6.36007 10.6667L4.83331 10.6667C4.37098 10.6667 3.93064 10.5725 3.53039 10.4024Z" stroke="#475569" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
    </button>
</header>
<div class="tutorial-container">
    <div class="tutorial-container-text">
        <div>
            <?php echo "<p>Hello ".ucfirst( wp_get_current_user()->display_name ).",</p>"; ?>
        </div>
        <div class="welcome-text"><h1>Welcome to Astra </h1><span>FREE</span></div>
        <div>
            <p>
                Astra is fast, fully customizable & beautiful WordPress theme suitable for blog, personal portfolio, business website and WooCommerce storefront. It is very lightweight and offers unparalleled speed.
            <p>
        </div>
    </div>
    <div class="tutorial-container-video">
        <iframe class="astra-video" src="https://www.youtube.com/embed/uBNUpyCM8G8?showinfo=0&amp;autoplay=0&amp;mute=0&amp;rel=0" allow="autoplay" title="YouTube video player" frameborder="0" allowfullscreen=""></iframe>
    </div>
</div>

<!-- Implemented wp_kses -->
<!-- $welcome_page_video_img = '<a href="https://www.youtube.com/" target="_blank"><img class="yt-image" width="200px" height="100px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/Logo_of_YouTube_%282015-2017%29.svg/1004px-Logo_of_YouTube_%282015-2017%29.svg.png"></a>';

$welcome_page_video_img_args = array(
        'a' => array(
            'href' => array(),
            'target' => array()
        ),
        'img' => array(
            'class' => array(),
            'src' => array(),
            'width' => array(),
            'height' => array()
        )
        );

// print_r( wp_kses( $welcome_page_video_img, $welcome_page_video_img_args) ); -->