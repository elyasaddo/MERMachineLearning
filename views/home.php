<!-- <img src="" alt="Large waveform image" width="960" height="480"/> -->
<h1 class="center">
  Music Emotion Recognition
</h1>
<h2 class="center">
  Machine Learning
</h2>
<?php

  spl_autoload_register(function($class){
    require preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
  });

  use \Markdown\MarkdownExtra;
  # Read file and pass content through the Markdown parser
  if (file_exists("views/articles/introduction.md")){
    $text = file_get_contents("views/articles/introduction.md");
    $html = MarkdownExtra::defaultTransform($text);
    echo "<div id=\"demo\" class=\"post-html\">".$html."</div>";
  } else {
    Flight::notFound();
  }
?>
