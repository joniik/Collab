function validateForm() {
	var q1_answer = document.forms["quizForm"]["a1"].value;
	var q2_answer = document.forms["quizForm"]["b1"].value;
	var q3_answer = document.forms["quizForm"]["c1"].value;
	
	if (q1_answer === "" || q2_answer === "" || q3_answer === "") {
	  alert("Please answer all the questions.");
	  return false;
	}
	
	return true;
}

  