function profile(){
    var x = document.getElementById("disprofile");
    var y = document.getElementById("allinvisible");
    if (x.style.display === "none") {
       y.style.display = "none";
       x.style.display = "block";
   } else {
       x.style.display = "none";
       y.style.display = "block";
   }
  
    }