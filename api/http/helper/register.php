<?php
namespace api\http\helper;
use api\crawler\BaseCrawler;
use api\crawler\cardCrawler;
use api\crawler\libraryCrawler\library_book;
use api\crawler\libraryCrawler\library_borrow;
use api\crawler\ycCrawler;
use api\crawler\zfCrawler;

//echo "register";
//$c=new cardCrawler;
//$l=new libraryCrawler;
//$y=new ycCrawler;
//$z=new zfCrawler;

$array=[
    "cardCrawler"=>new cardCrawler(),
    //"libraryCrawler"=>new libraryCrawler(),
    "library_book"=>new library_book(),
    "library_borrow"=>new library_borrow(),
    "ycCrawler"=>new ycCrawler(),
    "zfCrawler"=>new zfCrawler()
];
//基类
$base=new BaseCrawler;
//注入
$base->setDi($array);

?>
