    <!-- Begin Footer-->
    <footer>
        <p><small>&copy;2020-<?=date('Y')?> by <a href="contact.php" target="_blank">Jeremy Ward</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
  function updatemenu() {
    if (document.getElementById('responsive-menu').checked == true) {
      document.getElementById('menu').style.borderBottomRightRadius = '0';
      document.getElementById('menu').style.borderBottomLeftRadius = '0';
    }
    else {
      document.getElementById('menu').style.borderRadius = '10px';
    }
}
  function autorun() {
  }
  if (document.addEventListener) document.addEventListener("DOMContentLoaded", autorun, false);
  else if (document.attachEvent) document.attachEvent("onreadystatechange", autorun);
  else window.onload = autorun;
  </script>
</body>
</html>