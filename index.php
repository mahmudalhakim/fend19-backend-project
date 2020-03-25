<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Dashboard</title>
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Custom CSS -->    
    <link href="css/customStyle.css" rel="stylesheet">
  </head>
  <body>

    <header id="header" class="public-header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1></span> FEND19 - Backend - CMS <small>by Dmitrij Velström & Shan Mi</small></h1>
          </div>
        </div>
      </div>
    </header>

    <section id="main">
      <div class="container">
          <div class="row">

        <section class="post-list">

          </section>
          <?php
            require('php/DBHandler.php');
            $db = new DBHandler();
            $db->connect();
            $posts = $db->getBlogPosts();
            $db->closeConnection();
          ?>

          <?php foreach($posts as $post) : ?>
            
                    <!-- generated post  -->
                    <div class="panel panel-default blogpost">
                      <div class="panel-heading">
                        <h2 class="panel-title"><?php echo $post['title']; ?></h2>
                      </div>
                      <div class="panel-body">
                        <small class="date-posted-box" >Posted <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
                        </br>
                        <?php echo $post['body']; ?>
                      </div>
                    </div>

          <?php endforeach; ?>

        </div>
      </div>
    </section>

    <footer id="footer">
      <p>FEND19 - Backend Project</p>
      <p>Dmitrij Velström, Shan Mi</p>
      <p>Nackademin</p>
      <p>2020-03-25</p>
    </footer>

    <!-- Modals -->

    <!-- Add Page -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Page</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Page Title</label>
          <input type="text" class="form-control" placeholder="Page Title">
        </div>
        <div class="form-group">
          <label>Page Body</label>
          <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Published
          </label>
        </div>
        <div class="form-group">
          <label>Meta Tags</label>
          <input type="text" class="form-control" placeholder="Add Some Tags...">
        </div>
        <div class="form-group">
          <label>Meta Description</label>
          <input type="text" class="form-control" placeholder="Add Meta Description...">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>