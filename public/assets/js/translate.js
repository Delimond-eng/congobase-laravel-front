document.getElementById("langSelect").addEventListener("change", function () {
    document.getElementById("languageForm").submit();
});

function translateContent() {
    var elementsToTranslate = document.querySelectorAll("#content *");
    var textsToTranslate = Array.from(elementsToTranslate)
        .map((el) => el.innerText)
        .join(" ");

    var formData = new FormData();
    formData.append("text", textsToTranslate);
    var csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

    fetch(setLanguageUrl, {
        method: "POST",
        body: formData,
        headers: {
            "X-CSRF-TOKEN": csrfToken,
        },
    })
        .then((response) => response.json())
        .then((data) => {
            var translatedTexts = data.translatedText.split(" ");
            elementsToTranslate.forEach((el, index) => {
                el.innerText = translatedTexts[index];
            });
        });
}

document.addEventListener("DOMContentLoaded", function () {
    //translateContent();
});
