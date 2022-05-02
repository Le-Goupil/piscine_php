window.addEventListener("DOMContentLoaded", function () {

    let hzone = document.getElementById("drop_zone");
            
    // GLISSER-DEPOSER PRIS EN CHARGE
    if (window.File && window.FileReader && window.FileList && window.Blob) {
                
        // METTRE EN SURBRILLANCE LA ZONE DE DEPOT AU SURVOL DU FICHIER
        hzone.addEventListener("dragenter", function (e) {
        e.preventDefault();
        e.stopPropagation();
        hzone.classList.add('highlight');
        });

        hzone.addEventListener("dragleave", function (e) {
        e.preventDefault();
        e.stopPropagation();
        hzone.classList.remove('highlight');
        });
                
        // DEPOSER POUR TELECHARGER LE FICHIER
        hzone.addEventListener("dragover", function (e) {
        e.preventDefault();
        e.stopPropagation();
        });

        hzone.addEventListener("drop", function (e) {
        e.preventDefault();
        e.stopPropagation();
        hzone.classList.remove('highlight');
        sendData(e.dataTransfer.files);
        });

    }
    
    // SI LE FICHIER EXISTE PAS
    else {
        hzone.style.display = "none";
    }
});

function sendData(thisfile){

    let request = new XMLHttpRequest();
    let data = new FormData();
    data.append('drop_zone', thisfile)

    request.addEventListener('load', function(event){
        alert('Données envoyées et réponse chargée.');
    });
    request.addEventListener('error', function(event){
        alert('Error');
    });
    request.open('POST', 'file:///index.php');
    request.setRequestHeader('Content-Type', 'multipart/form-data');
    request.send(data);
    
}