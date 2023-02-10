let url = document.URL;
let num = url.search("Brainstorm");

if (num != -1) {
  window.onload = function () {
    document.getElementById("plugin-search-input").value = "";
    document.querySelector(".subtitle").innerHTML = "";
    let num_of_plugins = Array.from(
      document.querySelector(".displaying-num").innerHTML
    )[0];
    document.getElementById("num-of-plugins").innerHTML =
      "(" + num_of_plugins + ")";
  };
}
