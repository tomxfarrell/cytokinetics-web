const navigation = (function () {
  function mainNav() {
    let menuItems = document.querySelectorAll("#menu-main .menu-item");
    
    menuItems.forEach(function(menuItem){
      /* open sub menu on hover of main menu item */
      menuItem.addEventListener("mouseover", function(){
        menuItem.classList.add("sub-menu-open");
      });
      /* close sub menu when hover off */
      menuItem.addEventListener("mouseout", function(){
        menuItem.classList.remove("sub-menu-open");
      });
    });
  }

  return {
    mainNav: mainNav,
  };
})();
navigation.mainNav(); 
