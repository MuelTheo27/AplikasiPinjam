const navLinks = document.querySelectorAll('.nav-link');

const saved = localStorage.getItem('activeNav')

navLinks.forEach(link => {
    link.addEventListener('click',()=> {
        navLinks.forEach(l => {
            l.classList.remove('active');
        });
        link.classList.add('active')
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll(".room-card");
    const pagination = document.querySelector(".pagination");

    const cardsPerPage = 4;
    const totalCards = cards.length;
    const totalPages = Math.ceil(totalCards / cardsPerPage);
    let currentPage = 1;

    function showPage(page) {
        if (page < 1) page = 1;
        if (page > totalPages) page = totalPages;
        currentPage = page;

        cards.forEach((card) => (card.style.display = "none"));

        const start = (page - 1) * cardsPerPage;
        const end = start + cardsPerPage;
        for (let i = start; i < end && i < totalCards; i++) {
            cards[i].style.removeProperty("display"); // Biar ikut flex/grid
        }

        updatePagination();
    }

    function updatePagination() {
        pagination.innerHTML = "";

        // Tombol Previous
        const prev = document.createElement("a");
        prev.href = "#";
        prev.innerHTML = "&laquo;";
        prev.classList.toggle("disabled", currentPage === 1);
        prev.addEventListener("click", (e) => {
            e.preventDefault();
            if (currentPage > 1) showPage(currentPage - 1);
        });
        pagination.appendChild(prev);

        // Tombol halaman
        for (let i = 1; i <= totalPages; i++) {
            const pageLink = document.createElement("a");
            pageLink.href = "#";
            pageLink.textContent = i;
            if (i === currentPage) {
                pageLink.classList.add("active");
            }
            pageLink.addEventListener("click", (e) => {
                e.preventDefault();
                showPage(i);
            });
            pagination.appendChild(pageLink);
        }

        // Tombol Next
        const next = document.createElement("a");
        next.href = "#";
        next.innerHTML = "&raquo;";
        next.classList.toggle("disabled", currentPage === totalPages);
        next.addEventListener("click", (e) => {
            e.preventDefault();
            if (currentPage < totalPages) showPage(currentPage + 1);
        });
        pagination.appendChild(next);
    }

    showPage(1);
});
