(function ($) {
  ("use strict");
  // 09. Sidebar Js
  // When clicked or focused, add the class
  $(".it-menu-bar").on("click focus", function () {
    $(".itoffcanvas").addClass("opened");
    $(".body-overlay").addClass("apply");
  });

  $(".close-btn").on("click", function () {
    $(".itoffcanvas").removeClass("opened");
    $(".body-overlay").removeClass("apply");
  });
  $(".body-overlay").on("click focus", function () {
    $(".itoffcanvas").removeClass("opened");
    $(".body-overlay").removeClass("apply");
  });

  if ($(".it-menu-content").length && $(".it-menu-mobile").length) {
    // Get the content of the desktop menu
    let navContent = document.querySelector(".it-menu-content").outerHTML;
    let mobileNavContainer = document.querySelector(".it-menu-mobile");

    // Append the content to the mobile container
    mobileNavContainer.innerHTML = navContent;

    // Get all menu items that have children
    let arrow = $(".it-menu-mobile .menu-item-has-children > a");

    arrow.each(function () {
      let self = $(this);
      let arrowBtn = document.createElement("BUTTON");
      arrowBtn.classList.add("dropdown-toggle-btn");
      arrowBtn.innerHTML =
        "<i class='dashicons dashicons-arrow-right-alt2'></i>";

      // Append the button directly to the menu item
      self.append(arrowBtn);

      // Add click event listener to the button
      $(arrowBtn).on("click, focus", function (e) {
        e.preventDefault();
        e.stopPropagation(); // Stop event bubbling

        let btn = $(this);
        let parentLi = btn.closest("li"); // Get the parent LI element

        // Toggle the current dropdown
        if (!btn.hasClass("dropdown-opened")) {
          // Close any other open dropdowns
          $(".it-menu-mobile .dropdown-toggle-btn").removeClass(
            "dropdown-opened"
          );
          $(".it-menu-mobile .menu-item-has-children").removeClass("expanded");
          $(".it-menu-mobile .sub-menu").slideUp();
        }

        // Toggle the clicked dropdown
        btn.toggleClass("dropdown-opened");
        parentLi.toggleClass("expanded");
        parentLi.children(".sub-menu").stop(true, true).slideToggle(); // Show/Hide sub-menu
      });
    });
  }
})(jQuery);
