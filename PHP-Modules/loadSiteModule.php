<?php
class Site {
    private string $site;
    private string $HTMLPath;
    private string $CSSPath;
    private string $cssFile;
    function __construct(string $site, string $css = "",  bool $access = false, string $HTMLPath = "HTML-Files/", string $CSSPath = "CSS-Files/")
    {// If css file is not defined make it the given name of html file
        if($css == "") {
            $css = $site;
        }
        $this->site = $site;
        $this->access = $access;
        $this->HTMLPath = $HTMLPath;
        $this->CSSPath = $CSSPath;
        $this->cssFile = $css;
        $basedir = explode("/", str_replace("\\", "", dirname($_SERVER["PHP_SELF"])));
        $basedir = join("/", array_slice($basedir, 0, count($basedir)-2));
            print_r('
             <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">     
            ');
            // Selects all Javascript-Scripts that contains index in its name.
            foreach (glob($_SERVER["DOCUMENT_ROOT"]."/Javascript-Scripts/Script-" . $this->site . ".js") as $file) {
                $file = "/Javascript-Scripts/".basename($file);
                if($file == '.' || $file == '..') continue;
                $string = '<script src="' . $basedir . $file .  '">' . "</script>";
                // Adds the selected Javascript file
                print_r($string);
                echo "\n";
            }
            print_r("<link rel='stylesheet' href='" . $basedir . "/" . $this->CSSPath . "Style-" . $this->cssFile . ".css'" . ">");
            echo "\n\n";
            require $_SERVER["DOCUMENT_ROOT"] . "/" . $this->HTMLPath . $this->site . ".html";
    }
}