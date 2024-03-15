function handleCalculate() {
    var chour1 = document.getElementById('creditHour1').value;
    var chour2 = document.getElementById('creditHour2').value;
    var chour3 = document.getElementById('creditHour3').value;
    var chour4 = document.getElementById('creditHour4').value;

    var totalCreditHour = parseInt(chour1) + parseInt(chour2) + parseInt(chour3) + parseInt(chour4);

    var g1 = document.getElementById('grade1').value;
    var g2 = document.getElementById('grade2').value;
    var g3 = document.getElementById('grade3').value;
    var g4 = document.getElementById('grade4').value;

    var totalGPA = parseFloat(g1)+parseFloat(g2)+parseFloat(g3)+parseFloat(g4);

    var gpaRes = parseFloat(g1)*parseFloat(chour1)+parseFloat(g2)*parseFloat(chour2)+parseFloat(g3)*parseFloat(chour3)+parseFloat(g4)*parseFloat(chour4);
    var gpa = (gpaRes/totalCreditHour).toFixed(2)

    document.getElementById('totalCreditHours').value = totalCreditHour;
    document.getElementById('GPA').value = gpa;
    
    event.preventDefault();
}
