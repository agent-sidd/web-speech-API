<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Text to speech</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="conatiner  form">
    <h1>Web Speech API </h1>
<form autocomplete="off" class="frm" action="index.php">
   <input type="text"id="inp" name="msg"><br>
  <input id="sub" type="button" onclick="myFunction()" value="Submit">
</form>
</div>
<script>
function myFunction() {
  var y = document.getElementById("inp").value;
  var msg = new SpeechSynthesisUtterance(y);
  window.speechSynthesis.speak(msg);
}
</script>
    </script>
</body>
</html>