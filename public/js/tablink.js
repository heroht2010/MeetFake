
function openPage(pageName,elmnt) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
 if(pageName=="News"){
  document.getElementById("Home").style.display = "none";
 }
 if(pageName=="Home"){
  document.getElementById("News").style.display = "none";
 }
    var toggle = document.getElementById(pageName);
    
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].style.borderBottom = "";
      tablinks[i].style.color = "";
    }
    if(toggle.style.display == "none"){
      toggle.style.display = "block";
      elmnt.style.borderBottom = "5px solid #3C1A5B";
      elmnt.style.color = "#3C1A5B";
    }
    else{
      toggle.style.display = "none";
    }
  
  
}



