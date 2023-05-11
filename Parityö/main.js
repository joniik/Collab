function validateForm() {
	var q1_answer = document.forms["quizForm"]["q1_answer"].value;
	var q2_answer = document.forms["quizForm"]["q2_answer"].value;
	var q3_answer = document.forms["quizForm"]["q3_answer"].value;
	var q4_answer = document.forms["quizForm"]["q3_answer"].value;
	
	if (q1_answer == "" || q2_answer == "" || q3_answer == "" || q4_answer == "") {
	  alert("Please answer all the questions.");
	  return false;
	}
	
	return true;
  }
  