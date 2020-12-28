<!-- Requried Files -->
<?php require_once("../private/init.php"); ?>
<?php $title = "Capstone Project Repository"; ?>
<?php include(SHARED_PATH . '/main_header.php'); ?>
<!-- Requried Files // -->

<div class="navigation">
    <div class="container">
        <div class="row">
            <div class="navigation__brand">Capstone Repository</div>
            <input type="checkbox" class="navigation__input" id="navi-toggle">
            <label for="navi-toggle" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
            </label>

            <ul class="navigation__list">
                <li class="navigation__item"><a href="#" class="navigation__link"><i class="fas fa-home"></i> &nbsp; Home</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link"><i class="fas fa-database"></i> &nbsp; Repository</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link"><i class="fas fa-share-alt"></i> &nbsp; Share Idea</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link">About</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link"><i class="fas fa-sign-in-alt"></i> &nbsp; Login</a></li>
            </ul>
        </div>
    </div>
</div>

<header class="header">
    <div class="container">
        <div class="header__text-box">
            <h1 class="heading-primary u-margin-bottom-medium">Take an Idea, make an awesome project</h1>
            <a href="#" class="btn btn--white btn--animated">Find one</a>
        </div>
    </div>
</header>

<main class="main">
    <section class="section-aim">
        <div class="container">
            <h2 class="heading-secondary u-text-center u-margin-bottom-big">The aim of the project</h2>
            <div class="grid grid--3">
                <!-- Col 1 -->
                <div class="grid-col-1">
                    <div class="aim">
                        <div class="aim__icon u-text-center">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="aim__title u-text-center u-margin-top-small u-margin-bottom-small">
                            <h3 class="heading-tertiary">Helps Students</h3>
                        </div>
                        <div class="aim__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, molestiae nesciunt veniam voluptates magni iusto incidunt voluptatem fugiat aperiam repellendus dolore omnis nostrum praesentium necessitatibus?</div>
                    </div>
                </div> <!-- Col 1 / -->

                <!-- Col 2 -->
                <div class="grid-col-1">
                    <div class="aim">
                        <div class="aim__icon u-text-center">
                            <i class="fas fa-praying-hands"></i>

                        </div>
                        <div class="aim__title u-text-center u-margin-top-small u-margin-bottom-small">
                            <h3 class="heading-tertiary">Allows Contribution</h3>
                        </div>
                        <div class="aim__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, molestiae nesciunt veniam voluptates magni iusto incidunt voluptatem fugiat aperiam repellendus dolore omnis nostrum praesentium necessitatibus?</div>
                    </div>
                </div> <!-- Col 2 / -->

                <!-- Col 3 -->
                <div class="grid-col-1">
                    <div class="aim">
                        <div class="aim__icon u-text-center">
                            <i class="fab fa-slideshare"></i>
                        </div>
                        <div class="aim__title u-text-center u-margin-top-small u-margin-bottom-small">
                            <h3 class="heading-tertiary">Improves Cooperation</h3>
                        </div>
                        <div class="aim__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, molestiae nesciunt veniam voluptates magni iusto incidunt voluptatem fugiat aperiam repellendus dolore omnis nostrum praesentium necessitatibus?</div>
                    </div>
                </div> <!-- Col 3 / -->
            </div>
        </div>
    </section>

    <section class="section-about">
        <div class="container">
            <h2 class="heading-secondary u-text-center u-margin-bottom-big">About Us</h2>
            <p class="section-about__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus, pariatur suscipit ratione mollitia amet porro asperiores? Enim repellendus labore voluptatibus recusandae porro modi omnis, cumque quibusdam reiciendis veritatis molestiae odio aliquid perferendis perspiciatis sequi pariatur assumenda, harum quis iure nesciunt officiis rerum quae maxime. Delectus, natus magni? Ab alias laudantium et nihil nisi, nobis accusantium. Tempore error nam non illum magnam facilis tenetur nulla dolore eaque architecto eveniet, incidunt ad illo ratione sunt molestiae temporibus natus provident quisquam molestias at impedit! Debitis dolor exercitationem quibusdam veritatis sed soluta rem! Quos ex obcaecati repellendus pariatur ipsam doloribus minima sed, molestiae recusandae deleniti ut eos quas? Rerum tempore consequatur harum a aspernatur rem neque sit reiciendis amet sunt. Aut est sapiente consequatur.</p>
        </div>
    </section>

    <section class="section-idea">
        <div class="container">
            <h2 class="heading-secondary u-text-center u-margin-bottom-big">Share your idea</h2>

            <div class="grid grid--2">
                <div class="grid-col-1">
                    <div class="section-idea__detail">
                        <h3 class="heading-tertiary u-margin-bottom-small">Contribute to others</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non expedita aliquid odio modi? Deserunt ut voluptate molestias ipsa nemo nihil quo, architecto alias vitae consectetur cupiditate corporis dolore, provident sit recusandae? Provident veritatis earum quaerat itaque delectus perferendis maiores eum perspiciatis eos accusamus, hic, doloremque distinctio optio impedit quibusdam beatae. Maiores at accusamus fugiat fuga laborum tempore, saepe modi odit ad ab placeat facere voluptatem praesentium esse eaque molestiae officiis sed excepturi doloremque! Excepturi, earum.</p>
                    </div>
                </div>
                <div class="grid-col-1">
                    <form action="#" class="sharing">
                        <input type="text" name="name" id="name" class="sharing__input" placeholder="Enter Your Full Name">
                        <input type="email" name="email" id="idea_email" class="sharing__input" placeholder="Enter Your Email Address">
                        <input type="text" name="idea_title" id="idea_title" class="sharing__input" placeholder="Enter Your Idea Title">
                        <textarea name="idea_detail" id="idea_detail" class="sharing__textarea" placeholder="Enter your idea detail "></textarea>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="footer">
    
</footer>



<?php include(SHARED_PATH . '/main_footer.php'); ?>