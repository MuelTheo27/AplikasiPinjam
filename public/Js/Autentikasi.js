const inputs = document.querySelectorAll(".halfKanan input");
const spans = document.querySelectorAll(".password-strength span");
const formed = document.getElementById('formAja');
const buttonSign = document.getElementById('singin');
function updateSpansColor() {
    inputs.forEach((input, index) => {
        if (input.value.trim() !== "") {
            spans[index].style.backgroundColor = "#ffd600"; // warna aktif (oranye)
            sessionStorage.setItem(`indexKe${index}`, "#ffd600");
        } else {
            spans[index].style.backgroundColor = "white"; // warna default (putih)
            sessionStorage.setItem(`indexKe${index}`, "white");
        }
    });
}

function sessionStorageSpans(){
    inputs.forEach((input,index) => {
        const spansHighlight = sessionStorage.getItem(`indexKe${index}`)

        if(spansHighlight !== null){
            spans[index].style.backgroundColor = spansHighlight;
        }
    });
}


function savedData(){
    inputs.forEach((input,index) => {
        sessionStorage.setItem(`inputValue${index}`,input.value)
    });
}


function loadsavedData(){
    inputs.forEach((input,index) => {
        const filled = sessionStorage.getItem(`inputValue${index}`);

        if(filled !== null){
            input.value = filled;
        }
    });
}

loadsavedData();
sessionStorageSpans();
updateSpansColor();

inputs.forEach((input) => {
    input.addEventListener("input", () => {
        updateSpansColor();
        savedData();
    });
});

formed.addEventListener("submit", function (event) {
    event.preventDefault();
    // kode validasi manual atau proses lain
});


buttonSign.addEventListener("click", () => {
    window.location.href = ruanganUrl;
});

