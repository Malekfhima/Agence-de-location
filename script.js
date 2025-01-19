function verif_vide() {
    var mat=document.getElementById("mat").value;
    var cc=document.getElementById("cc").value;
    var nc=document.getElementById("nc").value;
    var dur=document.getElementById("dur").value;
    var c_ch=document.getElementById("cch").value;
    if (!verifMat(mat)){
        alert("verifer la matricule");
        return false;
    }else if (!verifNumC(cc)){
        alert("verifer le contact client(e)");
        return false;
    }else if (!verifDur(dur)){
        alert("verifer la duree prevue");
        return false;
    }else if (!verifNumC(c_ch)){
        alert("verifer le contact chauffeur");
        return false;
    }
    return true;

}
function verifMat(ch) {
    let pt = ch.indexOf("T");
    let ns = ch.slice(0, pt);
    let p = ch.slice(pt, pt + 3);
    let nv = ch.slice(pt + 3);
    if (p.toUpperCase() === "TUN" && parseInt(nv) >= 1 && parseInt(nv) < 10000 && parseInt(ns) >= 1 && parseInt(ns) < 249) {
        return true;
    } else {
        return false;
    }
}
function verifNumC(ch) {
    let op = parseInt(ch.slice(0, 2));
    if (ch.length === 8 && ((op >= 20 && op < 30) || (op >= 50 && op < 60) || (op >= 90 && op < 100))) {
        return true;
    } else {
        return false;
    }
}
function verifDur(ch) {
    return /^\d+$/.test(ch);
}
