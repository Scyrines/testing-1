function calculate() {
    document.getElementById("result").value = "";

    var m1 = Number(document.getElementById("mark1").value);
    var m2 = Number(document.getElementById("mark2").value);
    var m3 = Number(document.getElementById("mark3").value);
    var m4 = Number(document.getElementById("mark4").value);


    if (document.getElementById("findTotal").checked == true) { 
        document.getElementById("result").value = m1 + m2 + m3 + m4;
    } 
    if (document.getElementById("findAverage").checked == true) {
        document.getElementById("result").value = (m1 + m2 + m3 + m4) / 4;
    }
}

function clearForm() {
    document.getElementById("mark1").value = "";
    document.getElementById("mark2").value = "";
    document.getElementById("mark3").value = "";
    document.getElementById("mark4").value = "";
    document.getElementById("result").value = "";
    document.getElementById("findTotal").checked = false;
    document.getElementById("findAverage").checked = false;
}
