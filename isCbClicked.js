function cbChange(check) {
    var checkbox1 = document.getElementById("checkbox1");
    var checkbox2 = document.getElementById("checkbox2");
    var checkbox3 = document.getElementById("checkbox3");

    if (check == 'checkbox1') {
        if (checkbox1.checked == false) {
            checkbox1.checked = false;
            checkbox2.checked = false;
            checkbox3.checked = false;
        }
        else {
            checkbox1.checked = true;
            checkbox2.checked = false;
            checkbox3.checked = false;
        }
    }
    else if (check == 'checkbox2') {
        if (checkbox2.checked == false) {
            checkbox1.checked = false;
            checkbox2.checked = false;
            checkbox3.checked = false;
        }
        else {
            checkbox1.checked = false;
            checkbox2.checked = true;
            checkbox3.checked = false;
        }
    }
    else {
        if (checkbox3.checked == false) {
            checkbox1.checked = false;
            checkbox2.checked = false;
            checkbox3.checked = false;
        }
        else {
            checkbox1.checked = false;
            checkbox2.checked = false;
            checkbox3.checked = true;
        }
    }
}