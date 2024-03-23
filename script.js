document.addEventListener('DOMContentLoaded', function () {


    var section_nombre = document.getElementById('nombres');
    var section_conjugaison = document.getElementById('conjugaison');
    var section_pronoms = document.getElementById('pronoms');
    var section_motsExpressions = document.getElementById('mots-expressions');


    document.getElementById('bouton-nombres').addEventListener("click", function () {

        section_nombre.style.display = "block";
        section_conjugaison.style.display = "none";
        section_pronoms.style.display = "none";
        section_motsExpressions.style.display = "none";
    });

    document.getElementById('bouton-pronoms').addEventListener("click", function () {

        section_nombre.style.display = "none";
        section_conjugaison.style.display = "none";
        section_pronoms.style.display = "block";
        section_motsExpressions.style.display = "none";
    });

    document.getElementById('bouton-conjugaison').addEventListener("click", function () {

        section_nombre.style.display = "none";
        section_conjugaison.style.display = "block";
        section_pronoms.style.display = "none";
        section_motsExpressions.style.display = "none";
    });

    document.getElementById('bouton-mots-esxpressions').addEventListener("click", function () {

        section_nombre.style.display = "none";
        section_conjugaison.style.display = "none";
        section_pronoms.style.display = "none";
        section_motsExpressions.style.display = "block";
    });

})