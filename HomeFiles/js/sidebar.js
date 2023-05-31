var menuToggler = document.getElementById('menuToggler');
var menuTogglerLabel = document.getElementById('menuTogglerLabel');
var sidebar = document.getElementById('sidebar');
var menuItems = document.getElementsByClassName('menu__link');
var navbar = document.getElementById('uswgt');

menuToggler.addEventListener('change', function () {
  if (menuToggler.checked) {
    menuTogglerLabel.setAttribute('aria-pressed', 'true');
    sidebar.setAttribute('aria-hidden', 'false');
    navbar.classList.add("padding-left-0");
    lockScroll();
  } else {
    menuTogglerLabel.setAttribute('aria-pressed', 'false');
    sidebar.setAttribute('aria-hidden', 'true');
    navbar.classList.remove("padding-left-0");
    unlockScroll();
  }
  for (var menuItem of menuItems) {
    if (menuToggler.checked) {
      menuItem.setAttribute('tabindex', '0');
    } else {
      menuItem.setAttribute('tabindex', '-1');
    }
  }
});

function closemypanel(){
  $("#menuToggler").prop("checked",false);
  unlockScroll();
}

function lockScroll(){
  $html = $('html'); 
  $body = $('body'); 
  var initWidth = $body.outerWidth();
  var initHeight = $body.outerHeight();
  var scrollPosition = [
      self.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft,
      self.pageYOffset || document.documentElement.scrollTop  || document.body.scrollTop
  ];
  $html.data('scroll-position', scrollPosition);
  $html.data('previous-overflow', $html.css('overflow'));
  $html.css('overflow', 'hidden');
  window.scrollTo(scrollPosition[0], scrollPosition[1]);   
  var marginR = $body.outerWidth()-initWidth;
  var marginB = $body.outerHeight()-initHeight; 
  $body.css({'margin-right': marginR,'margin-bottom': marginB});
} 

function unlockScroll(){
  $html = $('html');
  $body = $('body');
  $html.css('overflow', $html.data('previous-overflow'));
  var scrollPosition = $html.data('scroll-position');
  window.scrollTo(scrollPosition[0], scrollPosition[1]);    

  $body.css({'margin-right': 0, 'margin-bottom': 0});
}