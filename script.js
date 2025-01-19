function verif_vide() {
    var mat = document.getElementById('mat').value;
    var cc = document.getElementById('cc').value;
    var nc = document.getElementById('nc').value;
    var dur = document.getElementById('dur').value;
    var cch = document.getElementById('cch').value;
    if (mat == "") {
        alert("Veuillez saisir le matricule");
        return false;
    }
    if (contact === "") {
        alert("Veuillez saisir le contact client");
        return false;
    }
    if (nom === "") {
        alert("Veuillez saisir le nom du client");
        return false;
    }
    if (duree === "" || isNaN(duree) || duree <= 0) {
        alert("Veuillez saisir une durée valide");
        return false;
    }
    if (contact_ch === "") {
        alert("Veuillez saisir le contact chauffeur");
        return false;
    }
    return true;
}