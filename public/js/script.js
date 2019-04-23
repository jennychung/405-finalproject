<script>

function timeBased() {
  var time = new Date().getHours();
  var greeting;
  if (time < 20) {
    greeting = "Good day";
  } else {
    greeting = "Good evening";
  }
  document.getElementById("timeBased").innerHTML = greeting;
}

</script>
