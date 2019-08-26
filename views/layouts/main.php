<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\PublicAsset;
use yii\helpers\Html;
use yii\helpers\Url;

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<nav class="navbar main-menu navbar-default">
    <div class="container">
        <div class="menu-content">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="/public/images/logo.jpg" alt=""></a>
            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav text-uppercase">
                    <li><a data-toggle="dropdown" class="dropdown-toggle" href="/">Home</a>

                    </li>
                </ul>
                <div class="i_con">
                    <ul class="nav navbar-nav text-uppercase">
                        <?php if(Yii::$app->user->isGuest):?>
                            <li><a href="<?= Url::toRoute(['auth/login'])?>">Login</a></li>
                            <li><a href="<?= Url::toRoute(['auth/signup'])?>">Register</a></li>
                        <?php else: ?>
                            <?= Html::beginForm(['/auth/logout'], 'post')
                            . Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->name . ')',
                                ['class' => 'btn btn-link logout', 'style'=>"padding-top:10px;"]
                            )
                            . Html::endForm() ?>
                        <?php endif;?>
                    </ul>
                </div>

            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>

<?= $content ?>

<footer class="footer-widget-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <aside class="footer-widget">
                    <div class="about-img"><img src="/public/images/logo2.png" alt=""></div>
                    <div class="about-content">If you are looking for transparent, unbiased casino and game reviews,
                        real players' opinions and ratings, AskGamblers is the place to be. Over the past decade,
                        we have built a trusted online casino portal, dedicated to guide players to a safe gambling experience.
                    </div>
                    <div class="address">
                        <h4 class="text-uppercase">contact Info</h4>

                        <p> 10001 Wall Street, NY, NY</p>

                        <p> Phone: +981 777 78122</p>

                        <p>casino.loc</p>
                    </div>
                </aside>
            </div>

            <div class="col-md-4">
                <aside class="footer-widget">
                    <h3 class="widget-title text-uppercase">Testimonials</h3>

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!--Indicator-->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="single-review">
                                    <div class="review-text">
                                        <p>Casino.loc is on a mission to provide current and accurate information
                                            about online casinos worldwide, as well as offer players the opportunity
                                            to resolve their issues transparently. We are to push boundaries and keep
                                            inspiring this whole industry to honour players, work for them,
                                            and deliver the best service there is.</p>
                                    </div>
                                    <div class="author-id">
                                        <img src="/public/images/author.png" alt="">

                                        <div class="author-text">
                                            <h4>Kate</h4>

                                            <h4>CEO, EmotionCasino</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-review">
                                    <div class="review-text">
                                        <p>Casino.loc is on a mission to provide current and accurate information
                                            about online casinos worldwide, as well as offer players the opportunity
                                            to resolve their issues transparently. We are to push boundaries and keep
                                            inspiring this whole industry to honour players, work for them,
                                            and deliver the best service there is.</p>
                                    </div>
                                    <div class="author-id">
                                        <img src="/public/images/author.png" alt="">

                                        <div class="author-text">
                                            <h4>Kate</h4>

                                            <h4>CEO, EmotionCasino</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-review">
                                    <div class="review-text">
                                        <p>Casino.loc is on a mission to provide current and accurate information
                                            about online casinos worldwide, as well as offer players the opportunity
                                            to resolve their issues transparently. We are to push boundaries and keep
                                            inspiring this whole industry to honour players, work for them,
                                            and deliver the best service there is.</p>
                                    </div>
                                    <div class="author-id">
                                        <img src="/public/images/author.png" alt="">

                                        <div class="author-text">
                                            <h4>Kate</h4>

                                            <h4>CEO, EmotionCasino</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </aside>
            </div>
            <div class="col-md-4">
                <aside class="footer-widget">
                    <h3 class="widget-title text-uppercase">Custom Category Post</h3>


                    <div class="custom-post">
                        <div>
                            <a href="#"><img src="/public/images/footer-img.png" alt=""></a>
                        </div>
                        <div>
                            <a href="#" class="text-uppercase">Win a Share of The Progressive Pot Every Week at Cleopatra Casino</a>
                            <span class="p-date">May 15, 2018</span>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <div class="footer-copy">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">&copy; 2019 <a href="#">Clever MIND, </a> Built with <i
                                class="fa fa-heart"></i> by <a href="#">Zhonochyn</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
