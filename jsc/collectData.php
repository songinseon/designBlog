<?php

$maxArticleId = getMaxArticleId();

$_allArticles = [];
$_tags = [];

for ( $i = $maxArticleId; $i > 0; $i-- ) {
  $varName = 'article' . $i;

  if ( isset($$varName) ) {
    $_allArticles[${$varName}['id']] = &$$varName;

    foreach ( $_allArticles[${$varName}['id']]['tags'] as $tag ) {
      $_tags[] = $tag;
    }
  }
}

$_tags = array_unique($_tags);
sort($_tags);

$_allArticlesByTag = [];

foreach ( $_tags as $tag ) {
  $_allArticlesByTag[$tag] = [];

  foreach ( $_allArticles as $article ) {
    if ( in_array($tag, $article['tags']) ) {
      $_allArticlesByTag[$tag][$article['id']] = $article;
    }
  }
}