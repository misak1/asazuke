<?php
namespace Mshiba\Px2lib\Asazuke;

class AsazukeConf extends AsazukeConfGeneral
{
    // 実行環境設定
    // public static $startPath = '/ja/diary/';
    public static $startPath = '/';
    
    // 環境設定
    public static $url = 'http://sample.jp';
    
    // 認証
    public static $authUser = '';

    public static $authPass = '';
    
    // プロジェクト名 = ディレクトリ名
    public static $projectName = 'sample.jp';
    
    // UserAgent
    public static $userAgent = 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)(CustomUserAgent 1.0)';
    // public static $userAgent = 'Mozilla/5.0 (iPhone; CPU iPhone OS 8_0_2 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) Version/8.0 Mobile/12A405 Safari/600.1.4(CustomUserAgent 1.0)';
    // public static $userAgent = 'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A403 Safari/8536.25 (CustomUserAgent 1.0)';
    // public static $userAgent = 'Mozilla/5.0 (Windows NT 6.3; WOW64; Trident/7.0; Touch; rv:11.0) like Gecko (CustomUserAgent 1.0)';
    

    public static $csv_cols = [
        // '列名' => 'CSSセレクタ',{}内に記述すると、固定値を設定できます。
        '* path' => '', // Pickles2側で使用
        '* content' => '', // Pickles2側で使用
        '* id' => '', // Pickles2側で使用
        '* title' => 'title',
        // '* title_breadcrumb' => 'header .breadcrumb ul li:last-child span',
        '* title_breadcrumb' => '[class*="breadcrumbs"] li:last-child span',
        '* title_h1' => 'h1',
        '* title_label' => '', // Pickles2側で使用
        '* title_full' => '', // Pickles2側で使用
        '* logical_path' => 'header .breadcrumb ul li a',
        // '* logical_path' => '[class*="breadcrumbs"]',
        '* list_flg' => '{1}', // Pickles2側で使用 (固定値:1)
        '* layout' => '', // Pickles2側で使用
        '* orderby' => '', // Pickles2側で使用
        '* keywords' => 'meta[name="keywords"]',
        '* description' => 'meta[name="description"]',
        '* category_top_flg' => '', // Pickles2側で使用
        '* **delete_flg' => '', // Pickles2側で使用
        // ↓↓↓optional
        '* og:title' => 'meta[property="og:title"]',
        '* og:description' => 'meta[property="og:description"]',
        '* og:image' => 'meta[property="og:image"]',
        '* og:type' => 'meta[property="og:type"]',
        '* og:site_name' => 'meta[property="og:site_name"]',
        '* og:url' => 'meta[property="og:url"]',
        '* og:locale' => 'meta[property="og:locale"]',
        '* fb:app_id' => 'meta[property="fb:app_id"]',
        '* apple-touch-icon' => 'link[rel="apple-touch-icon-precomposed"]',
        '* copyright' => 'meta[name="copyright"]',
        '* viewport' => 'meta[name="viewport"]',
        
        // '* sitecatalyst1' => 'script[src*="footer"]',
        // '* sitecatalyst2' => 'script',
        
        '* sitecatalyst' => '.siteCatalyst',
        
        '* favicon' => 'link[rel="icon"]'
    ];
    
    // WEBスクレイピングの設定
    public static $export_html = [
        [
            'name' => 'outerHTMLのテスト',
            'selector' => 'body',
            'scope' => 'outerHTML'
        ]
        // ,
        // [
        // 'name' => 'innerHTMLのテスト',
        // 'selector' => '.contents',
        // 'scope' => 'innerHTML'
        // ]
    ]
    ;

    /**
     * 読み込みサイトマップ
     */
    public static function getCsv()
    {
        return __DIR__ . self::$dataDir . self::$projectName . '/filelist.csv';
    }

    /**
     * Lint結果
     */
    public static function getDat()
    {
        return __DIR__ . self::$dataDir . self::$projectName . '/lintResult/#{ID}.dat';
    }

    /**
     * HTML単純ダウンロード
     */
    public static function getHtml()
    {
        return __DIR__ . self::$dataDir . self::$projectName . '/htmlCache/#{ID}.html';
    }

    /**
     * http解決
     *
     * @return string
     */
    public static function getCss()
    {
        return __DIR__ . self::$dataDir . self::$projectName . '/cssWorks/#{ID}.html';
    }

    /**
     * scraping html解決
     *
     * @return string
     */
    public static function getScrapingHtml()
    {
        return __DIR__ . self::$dataDir . self::$projectName . '/scraping/#{ID}.html';
    }

    /**
     * ログファイル
     *
     * @return string
     */
    public static function getLogPath()
    {
        return __DIR__ . self::$dataDir . self::$projectName . '/asazuke.log';
    }

    /**
     * SQLite3 DBファイル
     */
    public static function getDbFile()
    {
        return __DIR__ . self::$dataDir . self::$projectName . '/asazuke.sqlite';
    }

    /**
     * パーツ出力先
     *
     * @return string
     */
    public static function getExpHtdocs()
    {
        // ディレクトリを指定、*最後にスラッシュを入れない
        return __DIR__ . self::$dataDir . self::$projectName . '/SampleSite';
    }

    /**
     * パーツ出力先
     *
     * @return string
     */
    public static function getScripstDir()
    {
        // ディレクトリを指定、*最後にスラッシュを入れない
        return __DIR__ . self::$dataDir . self::$projectName . '/scripts';
    }
}
