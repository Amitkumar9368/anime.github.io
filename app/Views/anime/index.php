<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $webdata['webname']; ?>-<?php echo $webdata['webinfo']; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="charset" content="UTF-8" />
    <meta name="robots" content="index,follow" />
    <meta http-equiv="content-language" content="en" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="<?php echo $webdata['webname']; ?> - Official <?php echo $webdata['webname']; ?> #1 Watch High Quality Anime Online Without Ads. You can watch anime online free in HD without Ads. Best place for free find and one-click anime." />
    <meta name="keywords" content="anime to watch, watch anime,anime online, free anime online, online anime, anime streaming, stream anime online, english anime, english dubbed anime" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>files/css/home.css">
    <link rel="manifest" href="./manifest.json">
    <link rel="icon" sizes="192x192" href="<?php echo $webdata['webicon']; ?>">
    <noscript>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" />
    </noscript>
</head>

<body>
    <div id="wrapper">
        <div id="xheader">
            <div class="container">
                <div id="xheader_browser">
                    <div class="header-btn"><i class="fas fa-bars mr-2"></i>Menu</div>
                </div>
                <div id="xheader_menu">
                    <ul class="nav header_menu-list">
                        <li class="nav-item"><a href="<?php echo base_url(); ?>home" title="Home">Home</a></li>
                        <li class="nav-item"><a href="<?php echo base_url(); ?>type/tv" title="TV Series">TV Series</a></li>
                        <li class="nav-item"><a href="<?php echo base_url(); ?>type/movies" title="Movies">Movies</a></li>
                        <li class="nav-item"><a href="<?php echo base_url(); ?>latest-episode" title="Latest Episode">Latest Episode</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div id="xmain-wrapper">
            <div id="mw-top" style="background-image: url('<?php echo $webdata['webaniscover']; ?>');">
                <div class="container">
                    <div class="mwt-content">
                        <div class="mwt-icon"><img src="<?php echo $webdata['webindexbg']; ?>">
                        </div>
                        <div class="mwh-logo">
                            <a href="<?php echo base_url(); ?>home" class="mwh-logo-div">
                                <img src="<?php echo $webdata['weblogo']; ?>">
                            </a>
                            <div class="clearfix"></div>
                        </div>
                        <div id="xsearch" class="home-search">
                            <div class="search-content">
                                <form action="<?php echo base_url(); ?>search" autocomplete="off" id="search-form">
                                    <div class="search-submit">
                                        <div class="search-icon btn-search"><i class="fa fa-search"></i></div>
                                    </div>
                                    <input type="text" class="form-control search-input" name="keyword" placeholder="Search Anime" required>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mw-body">
                <div class="container">
                    <div id="action-button">
                        <a href="<?php echo base_url(); ?>home" class="btn btn-lg btn-radius btn-primary">View Full Site <i class="fas fa-arrow-circle-right ml-2"></i></a>
                    </div>
                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js">
                    </script>
                    <div class="mwb-2col">
                    <div class="mwb-left">
                        <h1 class="mw-heading"><?php echo $webdata['webname']; ?> - The best site to watch anime online for Free</h1>
                        <p>Do you know that according to Google, the monthly search volume for anime related topics is
                            up to over 1 Billion times? Anime is famous worldwide and it is no wonder we've seen a sharp
                            rise in the number of free anime streaming sites.</p>
                        <p>Just like free online movie streaming sites, anime watching sites are not created equally,
                            some are better than the rest, so we've decided to build <?php echo $webdata['webname']; ?> to be one of the best free
                            anime streaming site for all anime fans on the world.</p>
                        <h2>1/ What is <?php echo $webdata['webname']; ?>?</h2>
                        <p><?php echo $webdata['webname']; ?> is a free site to watch anime and you can even download subbed or dubbed anime in
                            ultra HD quality without any registration or payment. By having No Ads in all kinds, we are
                            trying to make it the safest site for free anime.</p>
                        <h2>2/ Is <?php echo $webdata['webname']; ?> safe?</h2>
                        <p>Yes we are, we do have only one Ads to cover the server cost and we keep scanning the ads
                            24/7 to make sure all are clean, If you find any ads that is suspicious, please forward us
                            the info and we will remove it.</p>
                        <h2>3/ So what make <?php echo $webdata['webname']; ?> the best site to watch anime free online?</h2>
                        <p>Before building <?php echo $webdata['webname']; ?>, we've checked many other free anime sites, and learnt from them. We
                            only keep the good things and remove all the bad things from all the competitors, to put it
                            in our <?php echo $webdata['webname']; ?> website. Let's see how we're so confident about being the best site for anime
                            streaming:</p>
                        <ul>
                            <li><strong>Safety:</strong> We try our best to not having harmful ads on <?php echo $webdata['webname']; ?>.
                            </li>
                            <li><strong>Content library:</strong> Our main focus is anime. You can find here popular,
                                classic, as well as current titles from all genres such as action, drama, kids, fantasy,
                                horror, mystery, police, romance, school, comedy, music, game and many more. All these
                                titles come with English subtitles or are dubbed in many languages.
                            </li>
                            <li><strong>Quality/Resolution:</strong> All titles are in excellent resolution, the best
                                quality possible. <?php echo $webdata['webname']; ?> also has a quality setting function to make sure our users can
                                enjoy streaming no matter how fast your Internet speed is. You can stream the anime at
                                360p if your Internet is being ridiculous, Or if it is good, you can go with 720p or
                                even 1080p anime.
                            </li>
                            <li><strong>Streaming experience:</strong> Compared to other anime streaming sites, the
                                loading speed at <?php echo $webdata['webname']; ?> is faster. Downloading is just as easy as streaming, you won't
                                have any problem saving the videos to watch offline later.
                            </li>
                            <li><strong>Updates:</strong> We updates new titles as well as fulfill the requests on a
                                daily basis so be warned, you will never run out of what to watch on <?php echo $webdata['webname']; ?>.
                            </li>
                            <li><strong>User interface:</strong> Our UI and UX makes it easy for anyone, no matter how
                                old you are, how long have you been on the Internet. Literally, you can figure out how
                                to navigate our site after a quick look. If you want to watch a specific title, search
                                for it via the search box. If you want to look for suggestions, you can use the site's
                                categories or simply scroll down for new releases.
                            </li>
                            <li><strong>Device compatibility:</strong> <?php echo $webdata['webname']; ?> works alright on both your mobile and
                                desktop. However, we'd recommend you use your desktop for a smoother streaming
                                experience.
                            </li>
                            <li><strong>Customer care:</strong> We are in active mode 24/7. You can always contact us
                                for any help, query, or business-related inquiry. On our previous projects, we were
                                known for our great customer service as we were quick to fix broken links or upload
                                requested content.
                            </li>
                        </ul>
                        <p>So if you're looking for a trustworthy and safe site for your Anime streaming, let's give
                            <?php echo $webdata['webname']; ?> a try. And if you like us, please help us to spread the words and do not forget to
                            bookmark our site.</p>
                        <h2>4/ I can not access <?php echo $webdata['webname']; ?> website, what should I do?</h2>
                        <p>Your ISP (Internet Service Provider) may have put <?php echo $webdata['webname']; ?> domain into the block list, you can
                            now access <?php echo $webdata['webname']; ?> website via our Proxy sites network, which can be found here:
                            <a class="highlight" href="<?php echo $webdata['weburl']; ?>" target="_blank"><?php echo $webdata['weburl']; ?></a>. We will keep adding new domain to the list so please bookmark
                            <a href="<?php echo $webdata['weburl']; ?>" target="_blank"><?php echo $webdata['webname']; ?></a> website to stay updated.</p>
                        <p>Thank you!</p>
                        <p>&nbsp;</p>
                    </div>

                        <div class="mwb-right">
                        <h1 class="mw-heading">Support Donation</h1>
                        <a href="https://www.patreon.com/bePatron?u=78681638" data-patreon-widget-type="become-patron-button">Become a Patron!</a>
                                <script async src="https://c6.patreon.com/becomePatronButton.bundle.js"></script>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="xfooter-about">
        <div class="container">
            <p class="copyright">©
                <?php echo date("Y"); ?> <a href="<?php echo base_url(); ?>">Anitium</a>. All rights reserved.
            </p>
        </div>
    </div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#xheader_browser").click(function(e) {
                $("#xheader_menu, #xheader_browser").toggleClass("active");
            });
            $('.btn-search').click(function() {
                if ($('.search-input').val().trim() !== "") {
                    $('#search-form').submit();
                }
            });
        });
    </script>
</body>

</html>