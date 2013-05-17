<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title><?php echo $title_page; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="author" href="https://plus.google.com/108260760453072469325/posts" />
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700italic,400italic,700' rel='stylesheet' type='text/css'>
        <?php
        echo $this->Html->meta('icon');
        echo $this->Html->css(array('bootstrap.min','style.site'));
        /* renderiza as metas e css*/
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->Html->script(array('https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'));
        echo $this->Html->script('bootstrap.min');
        echo $this->fetch('script');
        
        $atual = $this->request->controller.'/'.$this->request->action;
        ?>
    </head>
    <body>
        <div class="container">
            <header>
                <h1 class="logo"><?php echo $this->Html->link(
                                $this->Html->image('dsprog.jpg', array('alt' => 'Dsprog - Desenvolvedor Web Freelance','width'=>216, 'height'=>80)),
                           '/', array('title'=>'Dsprog - Desenvolvedor Web Freelance','escape' => false)); ?></h1>
                <nav id="menu">
                    <?php
                        $menu = array(
                             'options'=>array('class'=>'nav nav-pills'),
                             'items'=>array(
                                array('title'=>'Home', 'url'=> '/'),
                                array('title'=>'Curriculum', 'url'=> '/curriculum'),
                                array('title'=>'Portfolio', 'url'=> array('controller'=>'users', 'action'=>'index')),
                                array('title'=>'Serviços', 'url'=> array('controller'=>'users', 'action'=>'index')),
                                array('title'=>'Contato', 'url'=> '/contato')
                             ),
                          );
                        print $this->Menu->render($menu); 
                    ?>
                </nav>
            </header>
            <?php   echo $this->Session->flash(); 
                    echo $this->fetch('content'); ?>
        </div>
    </body>
</html>