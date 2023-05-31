<div class="cookie wow fadeInUp" data-wow-delay="3s">
<center>
<p class="cookie-content">
Sitemizde bulunan çerezler
<strong> Digigarson.com.tr</strong> web sitesini ve hizmetlerimizi daha etkin bir şekilde sunmamızı sağlamaktadır. 
Detaylı bilgi için Gizlilik ve Kişisel Verilerin Korunması Politikası ile Çerez Politikasını inceleyebilirsiniz. 
&nbsp;&nbsp;&nbsp;&nbsp;<a class="cookie_a" href="http://digigarson.com.tr/privacy-policy.php">Detaylı Bilgi</a>
&nbsp;&nbsp;&nbsp;<button class="cookie-btn" id="cookie_save_btn" onClick="addCookie();">Kabul Ediyorum</button>
</p>
</center>
</div>

<script>
var $cookie = document.querySelector('.cookie');

function ControlCookie(){
var Cookie_get = getCookie('cookie_policy')
if(Cookie_get == "accept"){

 $cookie.classList.remove('Cookie_message');

}else{

 $cookie.classList.add('Cookie_message');

}
}ControlCookie();

function addCookie(){

setCookie('cookie_policy', 'accept', 365);
$cookie.classList.remove('Cookie_message');

}

function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
</script>