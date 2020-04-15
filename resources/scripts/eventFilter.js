function EventFilter() {
  const category = document.querySelector("#cat");

  if (category) {
    category.addEventListener("change", () => {
      const option = category.options[category.selectedIndex];
      const categoryId = option.value;

      console.log(categoryId);

      var newurl =
        window.location.protocol +
        "//" +
        window.location.host +
        window.location.pathname +
        `?category=${categoryId}`;

      window.location.replace(newurl);

      // if (history.pushState) {
      //   var newurl =
      //     window.location.protocol +
      //     "//" +
      //     window.location.host +
      //     window.location.pathname +
      //     `?category=${categoryId}`;

      //   window.history.pushState({ path: newurl }, "", newurl);

      //   location.replace(newurl);
      // }
    });
  }
}
export default EventFilter;
