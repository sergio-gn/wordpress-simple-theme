<body class="bg-primary">
    <header class="header">
            <nav>
                <div id="logo">
                    <img class="main-logo" src="./wp-content/uploads/2023/10/logo-abrap.png"  alt="Abrap Associação Brasileira dos Advogados Públicos" />
                </div>
                <label for="drop" class="toggle">Menu</label>
                <input type="checkbox" id="drop" />
                <ul class="menu">
                    <li><a href="#">Home</a></li>
                        <li>
                            <label for="drop-1" class="toggle">WordPress +</label>
                            <a href="#">WordPress</a>
                            <input type="checkbox" id="drop-1" />
                            <ul>
                                <li><a href="#">Themes and stuff</a></li>
                                <li><a href="#">Plugins</a></li>
                                <li><a href="#">Tutorials</a></li>
                            </ul>
                        </li>
                    <li>
                        <label for="drop-2" class="toggle">Web Design +</label>
                        <a href="#">Web Design</a>
                        <input type="checkbox" id="drop-2" />
                        <ul>
                            <li><a href="#">Resources</a></li>
                            <li><a href="#">Links</a></li>
                            <li>
                                <label for="drop-3" class="toggle">Tutorials +</label>
                                <a href="#">Tutorials</a>
                                <input type="checkbox" id="drop-3" />
        
                                <ul>
                                    <li><a href="#">HTML/CSS</a></li>
                                    <li><a href="#">jQuery</a></li>
                                    <li><a href="#">Other</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Graphic Design</a></li>
                    <li><a href="#">Inspiration</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </nav>
            <!-- <nav class="navbar">
                <div class="d-flex flex-d-column m-auto">
                    <div class="logo align-center">
                        <a class="logo-link" href="#">
                            <img class="main-logo" src="http://localhost/root/abrap/wp-content/uploads/2023/10/logo-abrap.png"  alt="Abrap" />
                        </a>
                    </div>
                    <div id="navbarContent" class="d-flex">
                        <div class="flex-10 bg-3 border-black-2_noleft height-3"></div>
                        <?php wp_nav_menu(['theme_location' => 'header', 'menu_class' => 'navbar-ul height-3 flex-70']); ?>
                        <div class="border-black-2_noright height-3 flex-20 align-items-center d-flex">
                            <p class="px-2 px-05_mb">
                                <form class="d-flex" role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <label>
                                        <input type="search" class="search-field" placeholder="Search..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" />
                                    </label>
                                    <button type="submit" class="search-submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 -0.5 21 21" version="1.1">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="Dribbble-Light-Preview" transform="translate(-299.000000, -280.000000)" fill="#000000">
                                                    <g id="icons" transform="translate(56.000000, 160.000000)">
                                                        <path d="M264,138.586 L262.5153,140 L258.06015,135.758 L259.54485,134.343 L264,138.586 Z M251.4,134 C247.9266,134 245.1,131.309 245.1,128 C245.1,124.692 247.9266,122 251.4,122 C254.8734,122 257.7,124.692 257.7,128 C257.7,131.309 254.8734,134 251.4,134 L251.4,134 Z M251.4,120 C246.7611,120 243,123.582 243,128 C243,132.418 246.7611,136 251.4,136 C256.0389,136 259.8,132.418 259.8,128 C259.8,123.582 256.0389,120 251.4,120 L251.4,120 Z" id="search_left-[#1504]"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </button>
                                </form>
                            </p>
                        </div>
                    </div>
                    <button onclick="toggleNav()" id="navbar-toggler" class="navbar-toggler" type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav> -->
        </header>
        <script>
            function toggleNav() {
              const navbarContent = document.getElementById('navbarContent');
              navbarContent.classList.toggle('show');
            }
        </script>