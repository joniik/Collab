function validateForm(formName) {
    var form = document.forms[formName];
    var q1_answer = form["a1"].value;
    var q2_answer = form["b1"].value;
    var q3_answer = form["c1"].value;
    var q4_answer = form["q1"].value;

    if (q1_answer === "" || q2_answer === "" || q3_answer === "" || q4_answer === "") {
        alert("Please input all the questions.");
        return false;
    }

    return true;
}

