<div class="wraper">
<h1>IP Monitor</h1>
<p><em>Monitor IP addresses that attempt admin logins</em></p>
<hr>
<div class="ipmon-sidebar" style="width:130px">
  <button id="defaultLog" class="ipmon-bar-item tablink" onclick="openLink(event, 'IP-log')">IP activity log</button>
  <button class="ipmon-bar-item tablink" onclick="openLink(event, 'Logins')">Logins</button>
  <button class="ipmon-bar-item tablink" onclick="openLink(event, 'Failed-logins')">Failed logins</button>
  <button class="ipmon-bar-item tablink" onclick="openLink(event, 'Banned-IPs')">Banned IPs</button>
  <button class="ipmon-bar-item tablink" onclick="openLink(event, 'Login-settings')">Login settings</button>
  <button class="ipmon-bar-item tablink" onclick="openLink(event, 'Alerts')">Alerts</button>
</div>

<div class="ipmon-content" style="margin-left:130px">
  <div id="IP-log" class="w3-container city ipmon-animate-opacity" style="display:none">

    <table id="example" class="display" style="width:100%">
    <?php
      include IP_MON_DIR.'/assets/js/json/ip-act-log.js';
    ?>
    </table>


  </div>



  <div id="Logins" class="w3-container city ipmon-animate-opacity" style="display:none">
    <h2>Successful logins</h2>
    <?php 
    include 'ip_tables_template.php';
     ?>
  </div>

  <div id="Failed-logins" class="w3-container city ipmon-animate-opacity" style="display:none">
    <h2>Failed logins</h2>
    <?php 
    include 'ip_tables_template.php';
     ?>
  </div>

  <div id="Banned-IPs" class="w3-container city ipmon-animate-opacity" style="display:none">
    <h2>Banned IP addresses</h2>
    <?php 
    include 'ip_tables_template.php';
     ?>
  </div>

  <div id="Login-settings" class="w3-container city ipmon-animate-opacity" style="display:none">
    <h2>Login security settings</h2>
    <p>London is the capital city of England.</p>
    <p>It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
  </div>

  <div id="Alerts" class="w3-container city ipmon-animate-opacity" style="display:none">
    <h2>Alerts and notifications setiings</h2>
    <p>Paris is the capital of France.</p> 
    <p>The Paris area is one of the largest population centers in Europe, with more than 12 million inhabitants.</p>
  </div>

</div>
</div><!-- end .wraper-->

<script>
function openLink(evt, animName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" ipmon-bar-item-dark", "");
  }
  document.getElementById(animName).style.display = "block";
  evt.currentTarget.className += " ipmon-bar-item-dark";
}

document.getElementById("defaultLog").click();
</script>