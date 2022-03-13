const keyword = document.getElementById("keyword");
const search = document.querySelector(".search");

keyword.addEventListener("keyup", function () {
  // Panggil function ajax yang saya buat
  cari("GET", `../ajax/pelanggan.php?keyword=${keyword.value}`, search);
});

const cari = function (method, url, container) {
  // Buat Object Ajax
  const xhr = new XMLHttpRequest();

  // Cek jika sudah siap
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  };

  // Eksekusi Ajax
  xhr.open(method, url, true);
  xhr.send();
};
