<?php
/**
 * constants - various constants for the site framework
**/

//framework general constants
define("FRAME_EXTENSION", ".php");
define("CONTROLLER_CLASS_NAME", "Controller");
define("VIEWER_CLASS_NAME", "Viewer");

//default design and layout constants
define("HTML_HEAD", "head");
define("HTML_TITLE", "title");
define("HTML_META", "meta");
define("HTML_BODY", "body");
define("HTML_CONTAINER", "container");
define("HTML_CONTAINER_CLASS", "container_12");
define("HTML_HEADER", "header");
define("HTML_HEADER_CLASS", "header");
define("HTML_CENTRE", "centre");
define("HTML_CENTRE_CLASS", "grid_12 centre");
define("HTML_CONTENT", "content");
define("HTML_CONTENT_CLASS", "grid_10 node_content");
define("HTML_SIDEBAR", "sidebar_left");
define("HTML_SIDEBAR_CLASS", "grid_2 sidebar_left");
define("HTML_FOOTER", "footer");
define("HTML_FOOTER_CLASS", "footer");

//default viewer constants
define("GALLERY_IMG", "gallery_img");
define("GALLERY_LINK", "gallery_link");
define("BOOK_LINK", "book_link");
define("TAXA_LINK", "taxa_link");
define("SEARCH_LINK", "search_link");
define("MAP_LINK", "map_link");

//default design css and js constants
define("FRAME_CSS", "frame.css");
define("GRID_CSS", "grid.css");
define("JQUERY_UI_CSS", "jquery-ui.css");
define("FRAME_JS", "frame.js");
define("JQUERY_JS", "jquery.js");
define("JQUERY_UI_JS", "jquery-ui.js");

//template css and js files per user theme
define("THEME_CSS", "theme.css");
define("THEME_JS", "theme.js");

//DB content constants
define("DB_CONTENT", "content");
define("DB_CONTENT_LOOKUP", "content_lookup");
define("DB_CONTENT_TYPE", "content_type");
define("DB_CONTENT_GROUP", "content_group");
define("DB_CONTENT_IMAGE", "contentimage");
define("DB_CONTENT_TEXT", "contenttext");
define("DB_CONTENT_MAP", "contentmap");
define("DB_CONTENT_IMAGEMAP", "imagemaptext");
define("DB_CONTENT_TRANSCRIPT", "transcript");
define("DB_CONTENT_PDF", "contentpdf");
define("DB_CONTENT_VIDEO", "contentvideo");

//DB plugin constants
define("DB_PLUGINS", "plugins");
define("DB_PLUGINS_LOOKUP", "plugins_lookup");

//DB taxonomy constants
define("DB_TAXONOMY", "taxonomy");
define("DB_TAXONOMY_LOOKUP", "taxonomy_lookup");

//DB menu constants
define("DB_MENU", "menu");
define("DB_MENU_LOOKUP", "menu_lookup");
define("DB_NODE", "node");
define("DB_MAIN_MENU", "1");
define("DB_CONTENT_MENU", "2");

//DB content type id constants - based on URI format
define("DB_CONTENT_TYPE_TEXT", "1");
define("DB_CONTENT_TYPE_IMAGE", "2");
define("DB_CONTENT_TYPE_AUDIO", "3");
define("DB_CONTENT_TYPE_VIDEO", "4");
define("DB_CONTENT_TYPE_BIBLIOGRAPHY", "5");
define("DB_CONTENT_TYPE_TEI", "6");
define("DB_CONTENT_TYPE_MAP", "7");
define("DB_CONTENT_TYPE_PDF", "9");

?>