const inputs = document.querySelectorAll(".halfKanan input");
const spans = document.querySelectorAll(".password-strength span");

function updateSpansColor() {
    inputs.forEach((input, index) => {
        if (input.value.trim() !== "") {
            spans[index].style.backgroundColor = "#ffd600"; // warna aktif (oranye)
        } else {
            spans[index].style.backgroundColor = "white"; // warna default (putih)
        }
    });
}

// Pasang event listener input pada setiap input
inputs.forEach((input) => {
    input.addEventListener("input", updateSpansColor);
});

form.addEventListener("submit", function (event) {
    event.preventDefault();
    // kode validasi manual atau proses lain
});
  
// Inisialisasi warna saat halaman dimuat
updateSpansColor();
