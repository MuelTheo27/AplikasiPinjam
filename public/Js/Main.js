document.addEventListener("DOMContentLoaded", () => {
    const navLinks = document.querySelectorAll(".nav-link");
    const saved = localStorage.getItem("activeNav");

    navLinks.forEach((link) => {
        link.addEventListener("click", () => {
            navLinks.forEach((l) => l.classList.remove("active"));
            link.classList.add("active");
        });
    });

    const cards = document.querySelectorAll(".room-card");
    const tableRows = document.querySelectorAll(".table-row");
    const pagination = document.querySelector(".pagination");
    const rowsPerPage = 5;
    let currentPage = 1;

    if (cards.length > 0) {
        runPagination(cards, 4);
    } else if (tableRows.length > 0) {
        runPagination(tableRows, rowsPerPage);
    }

    function runPagination(items, perPage) {
        const totalItems = items.length;
        const totalPages = Math.ceil(totalItems / perPage);

        function showPage(page) {
            currentPage = page;
            const start = (page - 1) * perPage;
            const end = start + perPage;

            items.forEach((item, i) => {
                item.style.display = i >= start && i < end ? "" : "none";
            });

            updatePagination();
        }

        function updatePagination() {
            pagination.innerHTML = "";

            const prev = document.createElement("a");
            prev.href = "#";
            prev.innerHTML = "&laquo;";
            if (currentPage === 1) prev.classList.add("disabled");
            prev.addEventListener("click", (e) => {
                e.preventDefault();
                if (currentPage > 1) showPage(currentPage - 1);
            });
            pagination.appendChild(prev);

            for (let i = 1; i <= totalPages; i++) {
                const pageLink = document.createElement("a");
                pageLink.href = "#";
                pageLink.textContent = i;
                if (i === currentPage) pageLink.classList.add("active");
                pageLink.addEventListener("click", (e) => {
                    e.preventDefault();
                    showPage(i);
                });
                pagination.appendChild(pageLink);
            }

            const next = document.createElement("a");
            next.href = "#";
            next.innerHTML = "&raquo;";
            if (currentPage === totalPages) next.classList.add("disabled");
            next.addEventListener("click", (e) => {
                e.preventDefault();
                if (currentPage < totalPages) showPage(currentPage + 1);
            });
            pagination.appendChild(next);
        }

        showPage(1);
    }
});
