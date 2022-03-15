var acc = document.getElementsByClassName("accordion");
for (let i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        for (let j = 0; j < acc.length; j++) {
            acc[j].classList.remove("active");
            var panelCoahuila = document.getElementById("panelCoahuila")
            var panelDurango = document.getElementById("panelDurango")
            var pCoahuila = panelCoahuila.getElementsByTagName("p");
            var pDurango = panelDurango.getElementsByTagName("p");
            for (let x = 0; x < pCoahuila.length; x++) {
                pCoahuila[x].addEventListener("click", function() {
                    acc[j].nextElementSibling.style.maxHeight = null;
                })
            }
            for (let x = 0; x < pDurango.length; x++) {
                pDurango[x].addEventListener("click", function() {
                    acc[j].nextElementSibling.style.maxHeight = null;
                })
            }
            if (j != i) {
                acc[j].nextElementSibling.style.maxHeight = null;
            }
        }
        this.classList.add("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
            $(this).removeClass("active")
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}