//var hide_empty_list=true; //uncomment this line to hide empty selection lists
var disable_empty_list=true; //uncomment this line to disable empty selection lists

var onclickaction="alert" //set to "alert" or "goto". Former is for debugging purposes, to tell you the value of the final selected list that will be used as the destination URL. Set to "goto" when below configuration is all set up as desired. 

var newwindow=0 //Open links in new window or not? 1=yes, 0=no.

/////DEFINE YOUR MENU LISTS and ITEMS below/////////////////

addListGroup("chainedmenu", "First-Select");

addOption("First-Select", "Select an province", "", 1); //HEADER OPTION
addList("First-Select", "DKI Jakarta", "", "Jakarta");
addList("First-Select", "Jawa Barat", "", "Jawa Barat");
addList("First-Select", "Jawa Tengah", "", "Jawa Tengah");

addOption("Jakarta", "Select an City", "", 1); //HEADER OPTION
addList("Jakarta", "Jakarta Barat", "", "Webmaster-JavaScript");
addList("Jakarta", "Jakarta Selatan", "", "Webmaster-PHP");
addList("Jakarta", "Jakarta Timur", "", "Webmaster-PHP");
addOption("Jakarta", "Jakarta Utara", "http://www.codingforums.com"); //END OF THIS NODE

addOption("Webmaster-JavaScript", "Select an item", "", 1); //HEADER OPTION
addOption("Webmaster-JavaScript", "JavaScript Kit", "http://www.javascriptkit.com");
addOption("Webmaster-JavaScript", "Dynamic Drive", "http://www.dynamicdrive.com");
addOption("Webmaster-JavaScript", "JavaScript Reference", "http://www.javascriptkit.com/jsref/");

addOption("Webmaster-PHP", "Select an item", "", 1); //HEADER OPTION
addOption("Webmaster-PHP", "PHP.net", "http://www.php.net");
addOption("Webmaster-PHP", "mySQL", "http://www.mysql.com");

addOption("Jawa Barat", "Select an City", "", 1); //HEADER OPTION
addList("Jawa Barat", "General News", "", "News-General");
addList("Jawa Barat", "Tech News", "", "News-Tech");

addOption("News-General", "Select an item", "", 1); //HEADER OPTION
addOption("News-General", "CNN", "http://www.cnn.com");
addOption("News-General", "MSNBC", "http://www.msnbc.com");
addOption("News-General", "BBC News", "http://news.bbc.co.uk");
addOption("News-General", "Fox News", "http://www.foxnews.com");

addOption("News-Tech", "Select an item", "", 1); //HEADER OPTION
addOption("News-Tech", "News.com", "http://www.news.com");
addOption("News-Tech", "Wired News", "http://www.wired.com");
addOption("News-Tech", "TheRegister", "http://www.theregister.com");

addOption("Jawa Tengah", "Select an City", "", 1); //HEADER OPTION
addList("Jawa Tengah", "Semarang", "", "Cars-Regular");
addList("Jawa Tengah", "Magelang", "", "Cars-Sports");

addOption("Cars-Regular", "Select an item", "", 1); //HEADER OPTION
addOption("Cars-Regular", "Toyota", "http://www.toyota.com");
addOption("Cars-Regular", "Ford", "http://www.ford.com");
addOption("Cars-Regular", "Nissan", "http://www.nissanusa.com");
addOption("Cars-Regular", "BMW", "http://www.bmw.com");

addOption("Cars-Sports", "Select an item", "", 1); //HEADER OPTION
addOption("Cars-Sports", "Porsche", "http://www.www.porsche.com");
addOption("Cars-Sports", "Aston Martin", "http://www.astonmartin.com");
