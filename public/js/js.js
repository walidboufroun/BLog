document.addEventListener("DOMContentLoaded", function () {
  // Get the current path
  const currentPath = window.location.pathname;

  // Get all the menu items
  const menuItems = document.querySelectorAll(".nav-item");

  // Remove the "active" class from all menu items
  menuItems.forEach((menuItem) => {
    menuItem.classList.remove("active");
  });

  // Loop through the menu items and check if the path matches the id attribute
  menuItems.forEach((menuItem) => {
    const menuItemId = menuItem.id;

    if (currentPath.includes(menuItemId)) {
      menuItem.classList.add("active");
    }
  });
});
