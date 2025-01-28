function verif(){
    let mat=document.getElementById("mat").value;
    let nom=document.getElementById("nom").value;
    let prix=document.getElementById("prix").value;
    if(!verifMat(mat)){
        alert("matricule 8alta y bhiiiiim!!");
        return false;
    }else if(!(mat.lenghth==0)){
        alert("sem krhba 8alte");
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