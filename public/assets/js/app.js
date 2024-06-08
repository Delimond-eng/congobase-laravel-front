document.addEventListener("DOMContentLoaded", function(event) {
    cameraManager();
});

function cameraManager() {
    const videoPreview = document.getElementById("video-preview");
    const photoPreview = document.getElementById("photo-preview");
    const captureBtn = document.getElementById("btn-capture");
    const photoInput = document.getElementById("photo-input");
    let videoStream = null;
    let isCameraActive = false;
    const video = document.createElement("video");

    // Charger le son à jouer
    const captureSound = new Audio("assets/audios/capture-effect-2.mp3");

    captureBtn.addEventListener("click", function() {
        if (!isCameraActive) {
            videoPreview.classList.remove("d-none");
            photoPreview.classList.add("d-none");
            captureBtn.innerHTML = '<i class="ti-control-record"></i>';
            captureBtn.classList.remove("btn-dark");
            captureBtn.classList.add("btn-info");
            navigator.mediaDevices
                .getUserMedia({ video: true })
                .then(function(stream) {
                    videoStream = stream;
                    video.srcObject = stream;
                    video.play();
                    videoPreview.srcObject = stream;
                    isCameraActive = true;
                })
                .catch(function(error) {
                    console.error("Error accessing camera: ", error);
                });
        } else {
            captureBtn.innerHTML = '<i class="ti-camera"></i>';
            captureBtn.classList.remove("btn-info");
            captureBtn.classList.add("btn-dark");
            // Code pour capturer une image et l'affecter à photoInput
            let canvas = document.createElement("canvas");
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            canvas.getContext("2d").drawImage(video, 0, 0);
            const imageDataURL = canvas.toDataURL("image/png");
            photoPreview.src = imageDataURL;
            const photoFile = dataURLtoBlob(imageDataURL); // Convertir l'URL de données en Blob

            // Créer un objet File à partir du Blob
            const fileOptions = { type: "image/png" };
            const photoBlob = new File([photoFile], "photo.png", fileOptions);

            // Créer un FileList contenant le File
            const fileList = new DataTransfer();
            fileList.items.add(photoBlob);

            // Affecter le FileList à l'input photo
            photoInput.files = fileList.files;

            console.log(photoInput.files);

            // Jouer le son de capture
            captureSound.play();

            // Arrêter la diffusion vidéo
            videoStream.getTracks().forEach((track) => track.stop());

            // Afficher l'image capturée
            photoPreview.classList.remove("d-none");
            videoPreview.classList.add("d-none");
            isCameraActive = false;
        }
    });
    // Fonction utilitaire pour convertir une URL de données en Blob
    function dataURLtoBlob(dataURL) {
        const arr = dataURL.split(",");
        const mime = arr[0].match(/:(.*?);/)[1];
        const bstr = atob(arr[1]);
        let n = bstr.length;
        const u8arr = new Uint8Array(n);
        while (n--) {
            u8arr[n] = bstr.charCodeAt(n);
        }
        return new Blob([u8arr], { type: mime });
    }
}
