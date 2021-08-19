<?php
require_once "data.php";

shell_exec("chcp 65001");

$srcPath = dirname(__DIR__);
$srcPathWithDs = $srcPath . DIRECTORY_SEPARATOR;
$destPath = 'docs';
$compileNo = 0;

function compile($originFile) {
  $originFileName = basename($originFile);
  $originFileAndOpt = $originFile;
  
  if ( $originFileName == "article_detail.ssg.php" ) {
    $articles = &getArticles();

    foreach ( $articles as $article ) {
      $originFileAndOpt = $originFile . " " . $article['id'];

      $destFile = str_replace(".ssg.php", "_{$article['id']}.html", $originFile);
    
      compileItem($originFileAndOpt, $destFile);
    }
  }
  else if ( $originFileName == "article_list_by_tag.ssg.php" ) {
    $tags = &getTags();

    foreach ( $tags as $tag ) {
      $originFileAndOpt = $originFile . " " . $tag;

      $destFile = str_replace(".ssg.php", "_{$tag}.html", $originFile);

      compileItem($originFileAndOpt, $destFile);
    }
  }
  else if ( endsWith($originFileName, ".ssg.php") ) {
    $destFile = str_replace(".ssg.php", ".html", $originFile);
    compileItem($originFileAndOpt, $destFile);
  }
  else if ( endsWith($originFileName, ".php") ) {
    return;
  }
  else {
    $destFile = $originFile;
    compileItem($originFileAndOpt, $destFile);
  }
}

function compileItem($originFileAndOpt, $destFile) {
  global $compileNo;
  global $srcPathWithDs;
  global $destPath;

  $originFileAndOpt = str_replace($srcPathWithDs, "", $originFileAndOpt);
  $destFile = str_replace($srcPathWithDs, $destPath . '/', $destFile);

  $destDirPath = dirname($destFile);

  if ( is_dir($destDirPath) == false ) {
    mkdir($destDirPath, 0777, true);
  }

  if ( strpos($destFile, ".html") !== false ) {
    $command = "c:\\xampp\\php\\php.exe {$originFileAndOpt} > {$destFile}";
    echo "{$command}\n";
    shell_exec($command);
  }
  else {
    copy($originFileAndOpt, $destFile);
  }

  adaptForStatic($destFile);

  echo "{$compileNo} : {$destFile} 생성됨\n";
  $compileNo++;
}

function adaptForStatic($destFileName) {

  if ( strpos($destFileName, ".html") === false ) {
    return;
  }

  $newSource = file_get_contents($destFileName);
  $newSource = str_replace(["&ext=html", "article_detail.ssg.php?id=", "article_list_by_tag.ssg.php?tag=", ".ssg.php"], [".html", "article_detail_", "article_list_by_tag_", ".html"], $newSource);
  file_put_contents($destFileName, $newSource);
}

@mkdir("docs");

$originFiles = getFiles();

@rename("docs/CNAME", "CNAME");
deleteDirectory("docs");

foreach ( $originFiles as $index => $originFile ) {
  $fileName = basename($originFile);

  if ( $fileName == "CNAME" ) {
    continue;
  }

  compile($originFile);
}

@rename("CNAME", "docs/CNAME");