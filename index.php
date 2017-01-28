<?php include_once("template-parts/header.php"); ?>
    <main>
        <div class="container-fluid">

            <div class="row col-md-12">

                <!-- Homepage Jumbotron -->
                <div class="jumbotron col-md-12">
                    <div class="">

                        <!-- Carousel Start -->
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="im/delicate.jpg" alt="Try It On Tool">
                                    <div class="carousel-caption text-uppercase">
                                        <h3><a href="#">Try It On Tool</a></h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/fashion.jpg" alt="shop">
                                    <div class="carousel-caption text-uppercase">
                                        <h3><a href="#">Shop Our New Collection</a></h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/spring_flower.jpg" alt="blog">
                                    <div class="carousel-caption text-uppercase">
                                        <h3><a href="#">The Newest Spring Styles</a></h3>
                                    </div>
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div> <!-- /Carousel -->
                    </div>
                </div> <!-- /Jumbotron -->
            </div> <!-- /end row 1 -->

            <div class=" row col-md-12 bggrey border"></div>
            <div class="section row col-md-12 bggrey">
                <div class="col-md-4">
                    <div class="type">
                        <h2>
                            <a href="#">SHOP SS17</a>
                        </h2>
                        <p class="txtlt">
                            shop our latest collection
                        </p>
                    </div>
                </div>
                <div class="col-md-8">
                    <img class="img-responsive" src="img/fashion.jpg" alt="shop">
                </div>
            </div> <!-- /end row 2 -->
            <div class="row col-md-12 bggrey border">
            </div>
            <div class="section row col-md-12 bglt">
                <div class="col-md-8">
                    <img class="img-responsive" src="img/evergreen.jpg" alt="shop">
                </div>
                <div class="col-md-4">
                    <div class="type">
                        <h2 class="txtdrk">
                            <a href="#">
                                Lacquer studio
                            </a>
                        </h2>
                        <p>
                            try it on first
                        </p>
                    </div>
                </div>
            </div> <!-- /end row 3 -->
            <div class="row col-md-12 bglt border"></div>
            <div class="section row col-md-12 bggrey">
                <div class="col-md-4">
                    <div class="type">
                        <h2>
                            <a href="#">
                                spring styles
                            </a>
                        </h2>
                        <p class="txtlt">
                            the latest styles on the maniblog
                        </p>
                    </div>
                </div>
                <div class="col-md-8">
                    <img class="img-responsive" src="img/spring_flower.jpg" alt="shop">
                </div>
            </div> <!-- /end row 4 -->
            <div class="row col-md-12 bggrey border"></div>

        </div>
    </main>

<?php include_once("template-parts/footer.php"); ?>