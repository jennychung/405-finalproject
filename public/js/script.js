function timeBased() {
  var time = new Date().getHours();
  var greeting = "";
  if (time < 20) {
    greeting = "Today –  a.m";
  } else {
    greeting = "Tonight –  p.m";
  }
  document.getElementById("timeBased").innerHTML = greeting;
}

function navigation() {
  var x = document.getElementById("animateNav");
  if (x.className === "nav") {
    x.className += " responsive";
  } else {
    x.className = "nav";
  }
}
