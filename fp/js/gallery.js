function* createIterator(elements) {
    for (let i = 0; i < elements.length; i++) {
        let ele = elements[i];
        let prefix = ele.getAttribute("img-src-pre");
        let imgIndex = ele.getAttribute("img-index");

        let img = document.createElement("img");
        img.onload = function () {
            setTimeout(() => {
                let sp = ele.getElementsByTagName("span")[0];
                ele.removeChild(sp);
                ele.appendChild(img);
                window.giterator.next();
            }, 200);
        }
        img.onerror = function () {
            window.giterator.next();
        }
        img.src = `./images/${prefix}_${imgIndex}.jpg`;
        yield elements[i];
    }
}

var elements = document.getElementsByClassName("iterator");
window.giterator = createIterator(elements);
window.giterator.next();