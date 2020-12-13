
        function copyToClipboard(text) {
          var input = document.body.appendChild(document.createElement("input"));
              input.value = text;
              input.focus();
              input.select();
              document.execCommand('copy');
              input.parentNode.removeChild(input);
              $("#userStatus").text("Đã sao chép đường liên kết của cuộc họp");
      document.getElementById("userStatusContainer").style.visibility = "visible";
      setTimeout(function(){
          document.getElementById("userStatusContainer").style.visibility = "hidden";
       },3000);
}
    function dropUp() {
      document.getElementById("myDropup").classList.toggle("show");
    }

    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
