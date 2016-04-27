<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <title>Sample page</title>
        <!-- STYLES -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link href="style.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script type="text/javascript" src="main.js"></script>
    </head>
    <body>
        <header id="header" class="sec sec--head">
            <div class="inner">              
                <nav class="nav nav--main">
                    <ul class="list list--menu-left">
                        <li class="active list--menu__item-left"><a href="#">Home</a></li>
                        <li class="list--menu__item-left"><a href="#">Products</a></li>
                    </ul>                     
                        <figure class="sec--head__logo">
                            <img src="images/logo.png" alt="Logo">
                        </figure>                         
                    <ul class="list list--menu-right">    
                        <li class="list--menu__item-right"><a href="#">About us</a></li>
                        <li class="list--menu__item-right"><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main class="sec sec--main">
            <div class="inner">
                <h1 class="sec--main__title">This is just a sample page</h1>
                <button id="changecolor"class="btn btn--main">push the button</button>
            </div>
        </main>
        <section class="sec sec--art">
            <div class="inner">
                <article class="art art--article">
                    <h2 class="art--article__title">A heading title</h2>
                    <figure class="art--article__img">
                        <img src="images/article_img.png" alt="Article Image">
                    </figure>
                    <p class="art--article__intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.</p>
                    <p class="art--article__desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.
                    </p>
                    <p id="leftcolumn"class="art--article__readmore">read more</p>
                    <div class="art--article__leftcolumn"> 
                        <p class="art--article__more">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget.
                        </p>
                        <p id="leftcolumnhide" class="art--article__hide">hide</p>
                    </div>
                </article>
                  <article class="art art--article">
                    <h2 class="art--article__title">A much longer heading title</h2>
                    <figure class="art--article__img">
                        <img src="images/article_img.png" alt="Article Image">
                    </figure>
                    <p class="art--article__intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.</p>
                    <p class="art--article__desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget.
                    </p>
                    <p id="middlecolumn" class="art--article__readmore">read more</p>
                    <div class="art--article__middlecolumn"> 
                        <p class="art--article__more">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget.
                        </p>
                        <p id="middlecolumnhide" class="art--article__hide">hide</p>
                    </div>
                </article>
                  <article class="art art--article">
                    <h2 class="art--article__title">A heading title</h2>
                    <figure class="art--article__img">
                        <img src="images/article_img.png" alt="Article Image">
                    </figure>
                    <p class="art--article__intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.</p>
                    <p class="art--article__desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.
                    </p>
                    <p id="rightcolumn" class="art--article__readmore">read more</p>
                    <div class="art--article__rightcolumn"> 
                        <p class="art--article__more">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget.
                        </p>
                        <p id="rightcolumnhide" class="art--article__hide">hide</p>
                    </div>
                </article>
            </div>
        </section>
        <section class="sec sec--contact">
            <div class="inner">         
                <h3 class="sec--contact__title">Contact us</h3>
                <form id="contact" action="post.php" class="sec--contact__form" method="post" ajax="true">
                    <input type="text" name="name" placeholder="name">
                    <input type="email" name="email" placeholder="e-mail">
                    <input type="tel" name="phone" placeholder="phone">
                    <textarea name="text" placeholder="your message"></textarea>
                    <button id="send" class="btn btn--send">send message</button>
                </form> 
	            <div> 
	          		<?php
		                if(isset($_SESSION['error'])) 
		                {
		                    echo $_SESSION['error'];
		                }
		                unset($_SESSION['error']);
		                if(isset($_SESSION['ok'])) 
		                {
		                    echo $_SESSION['ok'];
		                }
		                unset($_SESSION['ok']);
	            	?>         
        		</div>
            </div> 
        </section>

        <a class="btn btn--back" href="#header"><span>back to top</span></a>

        <footer class="sec sec--footer">
            <div class="inner">
                <div class="column-container">
                    <div class="sec--footer__column">
                        <ul class="list list--footer">
                            <li class="list--footer__item"><a href="#">home</a></li>
                            <li class="list--footer__item"><a href="#">about us</a></li>
                            <li class="list--footer__item"><a href="#">products</a></li>
                            <li class="list--footer__item"><a href="#">contact</a></li>
                        </ul>
                    </div>
                    <div class="sec--footer__column">
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-facebook"></i>
                    </div>
                    <div class="sec--footer__column">
                        <p class="sec--footer__caption">Copyright &copy; 2010 Sample &amp; Pack, Inc.</p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>