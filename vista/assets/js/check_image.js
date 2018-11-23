 function showContents() {
        element = document.getElementById("imagen");
        check = document.getElementById("checke");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }