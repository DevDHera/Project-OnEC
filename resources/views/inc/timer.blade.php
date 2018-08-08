var seconds = 300;
function secondPassed() {
    var minutes = Math.round((seconds - 30)/60),
        remainingSeconds = seconds % 60;

    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds;
    }

    document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
    if (seconds == 0) {
        clearInterval(countdownTimer);
       //form1 is your form name
      document.form1.submit();
    } else {
        seconds--;
    }
}
var countdownTimer = setInterval('secondPassed()', 1000);