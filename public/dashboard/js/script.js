$(document).ready(function() {
  $('.sideMenuToggler').on('click', function() {
    $('.navbar').toggleClass('active');
    $('.wrapper').toggleClass('active');
    $('.setting').toggleClass('active');
    $('.setingsContent').toggleClass('active');
  });

  $('.settingToggler').on('click', function() {
    $('.setting').toggleClass('activeLeft');
    $('.settingToggler').toggleClass('active');
    $('.setingsContent').toggleClass('active');
  });

  var adjustSidebar = function() {
    $('.sidebar').slimScroll({
      height: document.documentElement.clientHeight - $('.navbar').outerHeight()
    });
  };

  adjustSidebar();
  $(window).resize(function() {
    adjustSidebar();
  });
});
