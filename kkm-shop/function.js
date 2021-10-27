const links = document.querySelectorAll(".menu-list > li > a");
for (const link of links) {
  link.addEventListener(
  "click",
  e => {
    const curr = e.srcElement;
    [...links].forEach(link => {
      if (link !== curr) {
        link.classList.remove("is-active");
        link.parentNode.classList[
        curr.classList.contains("is-active") ? "remove" : "add"](
        "is-invisible");
      }
    });
    curr.parentNode.classList.remove("is-invisible");
    curr.parentNode.classList.toggle("is-active");
    curr.classList.toggle("is-active");
  },
  false);
 
}
