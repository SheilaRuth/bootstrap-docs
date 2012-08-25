<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bootstrap Docs - documentation hub for Twitter Bootstrap</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Documentation for Twitter Bootstrap">
  <meta name="author" content="Lee Machin">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css">

  <!-- IE shim, for support in older browsers -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->

      <link rel="shortcut icon" href="assets/ico/favicon.ico">
      <link rel="apple-touch-icon-precomposed" sizes="144x144" ref="assets/ico/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    </head>

    <body>
      <!-- I can't get no, der ner nerrr, naviGATION... -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <a class="brand" href="/">Bootstrap Docs</a>
          </div>
        </div>
      </div>

      <?php
        // iterate the docs folder, so we can just drop in new docs
        // and sort them from newest to oldest
        $docs = glob('docs/*', GLOB_ONLYDIR);
        arsort($docs);
      ?>

      <div class="container-fluid">
        <div class="hero-unit">
          <h1>look no further!</h1>
          <p class="lead">easy access to old <strong>Twitter
          Bootstrap</strong> documentation</p>
          <p><iframe src="http://ghbtns.com/github-btn.html?user=leemachin&repo=bootstrap-docs&type=watch&count=true&size=large"
  allowtransparency="true" frameborder="0" scrolling="0" width="170px" height="30px"></iframe></p>
        </div>

        <div class="row-fluid">
          <div class="span12">
            <table class="table table-striped table-bordered table-hover versions">
              <thead>
                <tr>
                  <th>Version</th>
                  <th>Linkage</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($docs as $v): ?>
                  <?php $v = str_replace('docs/', '', $v) ?>
                  <tr>
                    <td><?php echo $v ?></td>
                    <td class="table-actions">
                      <a class="btn btn-success"
                      href="https://github.com/twitter/bootstrap/zipball/v<?php echo $v ?>">download</a>
                      <a class="btn btn-inverse" href="docs/<?php echo $v ?>">docs</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <hr>
      <footer>
        <div class="container">
          <div class="row-fluid">
            <div class="span6">
              <h4>Twitter Bootstrap</h4>
              <p>Code licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>. Documentation licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
              <p>Designed and built with all the love in the world <a href="http://twitter.com/twitter" target="_blank">@twitter</a> by <a href="http://twitter.com/mdo" target="_blank">@mdo</a> and <a href="http://twitter.com/fat" target="_blank">@fat</a>.</p>
            </div>

            <div class="span6">
              <h4>Bootstrap Docs</h4>
              <p>Thrown together
              by <a href="http://twitter.com/mrleemachin">@mrleemachin</a>. With
              thanks to the Bootstrap guys for providing it in the
              first place, of course.</p>
            </div>
          </div>
        </div>
      </footer>

      <script src="assets/js/bootstrap.min.js"></script>
    </body>
    </html>
