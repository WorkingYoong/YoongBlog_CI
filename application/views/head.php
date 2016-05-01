<!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8"/>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <!-- Bootstrap -->
                <link href="/YoongBlog_CI/static/lib/\bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">

                <link href="/YoongBlog_CI/static/lib/\bootstrap-3.3.6-dist/css/bootstrap-responsive.css" rel="stylesheet">
            </head>
            <body>
              <?php
                if ($this->session->flashdata('message'))
                {
               ?>
               <script>
                 alert('<?=$this->session->flashdata('message')?>');
               </script>
               <?php
                }
                ?>
              <div class="container">
                <div class="row-fluid">
                  <nav class="navbar navbar-default">
                    <div class="container">
                      <!-- Brand and toggle get grouped for better mobile display -->
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">JavaScript</a>
                      </div>

                      <!-- Collect the nav links, forms, and other content for toggling -->


                    </div><!-- /.container-fluid -->
                  </nav>
              <header class="jumbotron text-center">
                <h1><a href="http://localhost/YoongBlog_CI/index.php/topic">YoongBlog</a></h1>
              </header>
