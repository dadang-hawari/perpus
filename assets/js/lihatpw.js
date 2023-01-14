  function lihatsandi() {
    var a = document.getElementById("sandi");
    if (a.type === "password") {
      a.type = "text";
    } else {
      a.type = "password";
    }
  }