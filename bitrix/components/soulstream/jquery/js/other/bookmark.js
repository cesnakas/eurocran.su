/* This script and many more are available free online at
The JavaScript Source :: http://javascript.internet.com
Created by: Philip Myers :: http://virtualipod.tripod.com/bookmark.html */

function bookmark(url,title){
  if ((navigator.appName == "Microsoft Internet Explorer") && (parseInt(navigator.appVersion) >= 4)) {
  window.external.AddFavorite(url,title);
  } else if (navigator.appName == "Netscape") {
    window.sidebar.addPanel(title,url,"");
  } else {
    alert("Press CTRL-D (Netscape) or CTRL-T (Opera) to bookmark");
  }
}

//<!-- Paste this code into the HEAD section of your HTML document. You may need to change the path of the file.  -->
//<script type="text/javascript" src="bookMark.js"></script>
//<!-- Paste this code into the BODY section of your HTML document  -->
//<form action="#">
//<input type="button" value="Bookmark us!" onclick="bookmark('http://javascript.internet.com/','JavaScript Source')">
//</form>
//<p><div align="center">
//<font face="arial, helvetica" size"-2">Free JavaScripts provided<br>
//by <a href="http://javascriptsource.com">The JavaScript Source</a></font>
//</div><p>