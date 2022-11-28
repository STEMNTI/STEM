<?php



class Site {

    // declare variable types
    private string $site;
   
    private string $HTMLPath;
    private string $CSSPath;
    private string $cssFile;


    /**
     * @throws Exception
     */

    function __construct(string $site, string $css = "",  bool $access = false, string $HTMLPath = "HTML-Files/", string $CSSPath = "CSS-Files/")
    {



        // If css file is not defined make it the given name of html file
        if($css == "") {
            $css = $site;
        }

        // Loads variables into class
        $this->site = $site;
        $this->access = $access;
        $this->HTMLPath = $HTMLPath;
        $this->CSSPath = $CSSPath;
        $this->cssFile = $css;


        $basedir = explode("/", str_replace("\\", "", dirname($_SERVER["PHP_SELF"])));
        $basedir = join("/", array_slice($basedir, 0, count($basedir)-2));




            // TODO: ADD SUPPORT FOR UNNAMED TYPESCRIPT FILES. - DONE

            print_r('
             <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">     
            ');

            // Selects all Javascript-Scripts that contains index in its name.
            foreach (glob($_SERVER["DOCUMENT_ROOT"]."/Javascript-Scripts/" . $this->site . "-*.js") as $file) {
                $file = "/Javascript-Scripts/".basename($file);
                if($file == '.' || $file == '..') continue;
                $string = '<script src="' . $basedir . $file .  '">' . "</script>";
                // Adds the selected Javascript file
                print_r($string);
                echo "\n";

            }
            // Adds css File :: TODO: BEING ABLE TO USE MULTIPLE CSS FILES
            //print_r("<link rel='stylesheet' href=" . $basedir . "/" . $this->CSSPath . "Style-" . "navbar" . ".css" . ">");
            print_r("<link rel='stylesheet' href=" . $basedir . "/" . $this->CSSPath . "Style-" . $this->cssFile . ".css" . ">");
            echo "\n\n";

            // Gets html-file from defined path
            // Imports specific navbar
            /*
            if (isset($_SESSION["admin"]) && $_SESSION["admin"]) {
                require $_SERVER["DOCUMENT_ROOT"] . "/" . $this->HTMLPath . "NavbarCollection/top-Navbar-admin.html";
            } else if(!isset($_SESSION["valid"]) || !$_SESSION["valid"]) {
                require $_SERVER["DOCUMENT_ROOT"] . "/" . $this->HTMLPath . "NavbarCollection/top-Navbar-unsigned.html";
            } else {
                require $_SERVER["DOCUMENT_ROOT"] . "/" . $this->HTMLPath . "NavbarCollection/top-Navbar-signed.html";
            }
            */

            require $_SERVER["DOCUMENT_ROOT"] . "/" . $this->HTMLPath . $this->site . ".html";



        }







}