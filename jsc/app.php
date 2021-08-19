<?php
function getArticleTagsHtml($id) {
    $article = &getArticleById($id);

    $html = "";

    foreach ( $article['tags'] as $tag ) {
        $link = getArticleListByTagLink($tag);
        $html .= " <a class=\"tag-link\" href=\"{$link}\">#" . $tag . "</a>";
    }

    return $html;
}

function getArticleLink($id) {
    return "article_detail.ssg.php?id={$id}&ext=html";
}

function getArticleListByTagLink($tag) {
    return "article_list_by_tag.ssg.php?tag={$tag}&ext=html";
}

function getFilesByEndsWith($endsWith) {

    $fileNames = [];

    $it = new RecursiveDirectoryIterator(".");

    foreach(new RecursiveIteratorIterator($it) as $file) {
        if ( endsWith($file->getFilename(), $endsWith) ) {
            $fileNames[] = $file->getFilename();
        }
    }

    return $fileNames;
}

function getFiles() {

    $fileNames = [];

    $it = new RecursiveDirectoryIterator(".");

    foreach(new RecursiveIteratorIterator($it) as $file) {
        if ( $file->isDir() ) {
            continue;
        }

        if ( strpos($file->getRealPath(), '\.git') !== false ) {
            continue;
        }

        if ( strpos($file->getRealPath(), '\docs') !== false ) {
            continue;
        }

        $fileNames[] = $file->getRealPath();
    }

    return $fileNames;
}

function getMaxArticleId() {
    static $maxId;

    if ( $maxId !== null ) {
        return $maxId;
    }

    $keys = array_keys($GLOBALS);

    $maxId = 0;

    foreach ( $keys as $key ) {
        if ( startsWith($key, "article") ) {
            $no = intval(str_replace("article", "", $key));

            if ( $no > $maxId ) {
                $maxId = $no;
            }
        }
    }

    return $maxId;
}

function &getArticles() {
    global $_allArticles;

    return $_allArticles;
}

function &getForPrintTagInfo($tag) {
    global $siteTitle;
    global $siteThumbUrl;
    global $tagInfos;

    $tagInfo = [];

    if ( isset($tagInfos[$tag]) ) {
        $tagInfo = $tagInfos[$tag];
    }

    if ( !isset($tagInfo['pageThumbUrl']) ) {
        $tagInfo['pageThumbUrl'] = $siteThumbUrl;
    }

    if ( !isset($tagInfo['pageTitle']) ) {
        $tagInfo['pageTitle'] = "{$tag} 관련 글 리스트";
    }

    if ( !isset($tagInfo['pageDescription']) ) {
        $tagInfo['pageDescription'] = "{$tag} 관련 글 리스트입니다.";
    }

    if ( !isset($tagInfo['pageKeywordsStr']) ) {
        $tagInfo['pageKeywordsStr'] = "{$tag}";
    }

    return $tagInfo;
}

function &getForPrintArticleById($id) {
    global $siteTitle;
    global $siteThumbUrl;

    $article = &getArticleById($id);
    $tagInfo = &getForPrintTagInfo($article['tags'][0]);

    if ( !isset($article['pageTitle']) ) {
        $article['pageTitle'] = $article['title'];   
    }
    
    if ( !isset($article['pageThumbUrl']) ) {
        $article['pageThumbUrl'] = $tagInfo['pageThumbUrl'];
    }

    if ( !isset($article['pageDescription']) ) {
        $article['pageDescription'] = getSummaryFromMarkdown($article['body']);
    }

    if ( !isset($article['pageKeywordsStr']) ) {
        $article['pageKeywordsStr'] = implode(', ', $article['tags']);
    }

    return $article;
}

function getSummaryFromMarkdown($markdownSource) {
    $summary = str_replace("#### ", " ", $markdownSource);
    $summary = str_replace("### ", " ", $summary);
    $summary = str_replace("## ", " ", $summary);
    $summary = str_replace("# ", " ", $summary);
    $summary = preg_replace('/<[^<]+?>/', ' ', $summary);
    $summary = str_replace("\n", " ", $summary);
    $summary = preg_replace('!\s+!', ' ', $summary);

    return trim($summary);
}

function &getArticleById($id) {
    $articles = &getArticles();

    return $articles[$id];
}

function &getArticlesByTag($tag) {
    global $_allArticlesByTag;

    if ( isset($_allArticlesByTag[$tag]) == false ) {
        $arr = [];
        return $arr;
    }

    return $_allArticlesByTag[$tag];
}

function &getTags() {
    global $_tags;

    return $_tags;
}