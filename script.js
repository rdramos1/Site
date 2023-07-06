document.addEventListener('DOMContentLoaded', function() {
    var categoryLinks = document.querySelectorAll('.hr');
    var buyButtons = document.querySelectorAll('.buy-button');
  
    for (var i = 0; i < categoryLinks.length; i++) {
      categoryLinks[i].addEventListener('click', smoothScroll);
    }

    for (var i = 0; i < buyButtons.length; i++) {
        buyButtons[i].addEventListener('click', redirectToURL);
    }
  
    function smoothScroll(event) {
      event.preventDefault();
  
      var targetId = this.getAttribute('href').substring(1);
      var targetElement = document.getElementById(targetId);
  
      targetElement.scrollIntoView({
        behavior: 'smooth'
      });
    }

    function redirectToURL(event) {
        event.preventDefault();
    
        var url = this.getAttribute('data-url');
        window.location.href = url;
      }
  });

  


  