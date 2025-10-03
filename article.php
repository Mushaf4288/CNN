<?php
$id = $_GET['id'] ?? 0;
$title = "Sample Article #$id";
$content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend, nulla ut porta eleifend, elit sapien laoreet nunc, nec ultrices velit libero at leo.";
$related = [
  ["title" => "Related News 1", "link" => "article.php?id=5"],
  ["title" => "Related News 2", "link" => "article.php?id=6"]
];
?>
<!DOCTYPE html>
<html>
<head>
  <title><?= $title ?></title>
  <style>
    body { font-family:sans-serif; background:#fff; margin:0; }
    header { background:#cc0000; color:#fff; padding:15px; text-align:center; }
    article { padding:20px; max-width:800px; margin:auto; line-height:1.6; }
    h1 { color:#cc0000; }
    .related { margin-top:40px; padding:10px; background:#f9f9f9; }
    .related a { display:block; color:#0077cc; text-decoration:none; margin-bottom:5px; }
  </style>
</head>
<body>

<header>News Article</header>

<article>
  <h1><?= $title ?></h1>
  <p><?= $content ?></p>

  <div class="related">
    <h3>Related News</h3>
    <?php foreach ($related as $rel): ?>
      <a href="<?= $rel['link'] ?>"><?= $rel['title'] ?></a>
    <?php endforeach; ?>
  </div>
</article>

</body>
</html>
