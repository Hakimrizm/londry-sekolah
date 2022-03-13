const keyword = document.getElementById("keyword");
const search = document.querySelector(".search");

keyword.addEventListener("keyup", function () {
  // Buat Object Ajax
  const xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      search.innerHTML = xhr.responseText;
    }
  };

  // Eksekusi Ajax
  xhr.open("GET", `../ajax/pelanggan.php?keyword=${keyword.value}`, true);
  xhr.send();
});
