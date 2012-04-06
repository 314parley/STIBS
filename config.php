<? 
//Essentials - You NEED to change these, or at least make sure they're good
define(SQLLOG, 'CHANGEME');							//Table (NOT DATABASE) used by image board
define(SQLHOST, 'CHANGEME');							//MySQL server address, usually localhost
define(SQLUSER, 'CHANGEME');							//MySQL user (must be changed)
define(SQLPASS, 'CHANGEME');							//MySQL user's password (must be changed)
define(SQLDB, 'CHANGEME');								//Database used by image board

//Basic settings
define(PANEL_PASS, 'CHANGEME');							//Janitor password  (CHANGE THIS YO)
define(TITLE, 'Super Tiny Imageboard Software Powered Imageboard');				//Name of this image board
define(S_HEADSUB, '<center><font size=1>cool!</font><center>');  			//subtitle underneath title
define(SHOWTITLETXT, '1');								//Show TITLE at top (1: yes  0: no) [you shouldn't disable this btw]
define(SHOWTITLEIMG, '0');								//Show image at top (0: no, 1: single, 2: rotating)
define(TITLEIMG, '');									//Title image (point to php file if rotating)

//From here down all these settings are optional.

//Extra settings - No need to change these for a basic installation, but you may want these options
define(MAX_KB, '2048');									//Maximum upload size in KB
define(MAX_W,  '250');									//Images exceeding this width will be thumbnailed
define(MAX_H,  '250');									//Images exceeding this height will be thumbnailed
define(MIN_W, '30');									//minimum image dimensions - width
define(MIN_H, '30');									//minimum image dimensions - height
define(PAGE_DEF, '10');									//Images per page
define(RENZOKU, '10');									//Seconds between posts (floodcheck)
define(RENZOKU2, '13');									//Seconds between image posts (floodcheck)
define(MAX_RES, '500');									//Maximum topic bumps
define(USE_THUMB, 1);									//Use thumbnails (1: yes  0: no)
define(PROXY_CHECK, 0);									//Enable proxy check (1: yes  0: no)
define(DISP_ID, 1);										//Display user IDs (1: yes  0: no)
define(BR_CHECK, 0);									//Max lines per post (0 = no limit)
define(TRIPKEY, '!');									//this character is displayed before tripcodes
define(MANTHUMBS, '1');									//Display thumbnails in manager panel
define(BOTCHECK, '0');									//Use CAPTCHAs
define(USE_BBCODE, '1');								//Use BBcode
define(FORCED_ANON, '');									//Maximum upload size in KB
define(GLOBAL_MSG, '<center><font color=red>hello, and welcome to STIBS</font></center>');									//4ch like global message..

//CSS stuff.
//These are required, but you can change them.
define(CSSFILE, 'yotsuba.css');							//location of the css file, also the default
//Not needed yet.
/*define(STYLESHEET_1, 'Futaba');							//Name of the first stylesheet.
define(CSSFILE2, '../css/burichan.css');						//location of the second stylesheet.
define(STYLESHEET_2, 'Burichan');						//Name of the second stylesheet.
define(CSSFILE3, '../css/kusaba.css');						//location of the second stylesheet.
define(STYLESHEET_3, 'Kusaba');						//Name of the second stylesheet.
define(CSSFILE4, '../css/monotone.css');						//location of the second stylesheet.
define(STYLESHEET_4, 'Monotone');						//Name of the second stylesheet.
*/

//Capcodes - show 'em who's boss (put it as your trip. IE: "name#CHANGEME" would result as "name## Admin ##!09EKYZv3TU")
define("ADMIN_PASS", 'faggot');     	   						//admin pass
define("ACAPCODE", ' <font color="FF101A"> ## Admin ## </font>'); //admin capcode
define("MOD_PASS", 'CHANGEMEPLZ');     	   						//Mod pass
define("MCAPCODE", ' <font color="770099"> ## Mod ## </font>'); 	//mod capcode



//Advanced Settings
define(IMG_DIR, 'src/');								//Image directory (needs to be 777)
define(THUMB_DIR,'thumb/');								//Thumbnail directory (needs to be 777)
define(HOME,  '/');										//Site home directory (up one level by default
define(LOG_MAX,  '1500');								//Maxium number of entries
define(PHP_SELF, 'imgboard.php');						//Name of main script file
define(PHP_SELF2, 'index.html');						//Name of main htm file
define(PHP_EXT, '.html');								//Extension used for board pages after first

//Even more settings - there can never be enough
define(S_OMITT_NUM, '5');								//number of posts to display in each thread on the index
define(NOPICBOX, '0');									//whether or not to have the [No Picture] checkbox (1: yes  0: no)
define(DUPE_CHECK, '1');								//whether or not to check for duplicate images
define(S_BOARDLIST, '[a / b / c] [d / e / f] [g / h / i] [j / k / l]');    //meta description for this board (LOOK AT THE README)
define(S_DESCR, 'An imageboard powered by STIBS');    //meta description for this board
define(EXTRA_SHIT, '');         //Any extra javascripts you want to include inside the <head>

//Advertisements
define(USE_ADS1, 0);		//Use advertisements (top) (1: yes  0: no)
define(ADS1, '<center>ads ads ads1</center>');		//advertisement code (top)

define(USE_ADS2, 0);		//Use advertisements (below post form) (1: yes  0: no)
define(ADS2, '<center>ads ads ads2</center>');		//advertisement code (below post form)

define(USE_ADS3, 0);		//Use advertisements (bottom) (1: yes  0: no)
define(ADS3, '<center>ads ads ads3</center>');		//advertisement code (bottom)			
?>