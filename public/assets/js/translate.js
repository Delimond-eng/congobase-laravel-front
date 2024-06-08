document.addEventListener("DOMContentLoaded", function(e) {
    document
        .getElementById("langSelect")
        .addEventListener("change", function() {
            var localeUrl = this.value;
            var locale = localeUrl.match(/\/([a-z]{2})($|\/)/)[1];
            var csrfToken = document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content");
            fetch("/set-locale", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": csrfToken,
                    },
                    body: JSON.stringify({ locale: locale }),
                })
                .then((response) => response.text())
                .then((text) => {
                    const data = JSON.parse(text);
                    if (data.status === "success") {
                        window.location.href = localeUrl;
                    }
                })
                .catch((error) => console.error("Error:", error));
        });
});
