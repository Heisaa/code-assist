// Show html
function revealElementHTML(el) {
    let html = el.innerHTML;
    let htmlCode = document.getElementById("html-code");
    
    //htmlCode.innerHTML = el.outerHTML.substring(0, 2);
    
    //htmlCode.appendChild(html);
    let htmlLength = html.length;
    let i = 0;
    let newEl;
    let createNewElement = true;

    function typeWriter() {
        if (i < htmlLength) {
            
            if (createNewElement) {
                newEl = document.createElement("pre");
                newEl.classList.add("prettyprint");
                newEl.classList.add("lang-html");
                htmlCode.appendChild(newEl);
                
            }

            if (html.substring(i, i + 1) == "\n") {
                createNewElement = true;
                PR.prettyPrint();
            } else {
                createNewElement = false;
            }
            //htmlCode.classList.remove("prettyprinted");
            subString = document.createTextNode(html.substring(i, i + 1));
            newEl.appendChild(subString)
            
            
            i++;
            setTimeout(typeWriter, 0.1);
        }
    }

    typeWriter();
}

onload = function () {
    revealElementHTML(document.documentElement);
};

