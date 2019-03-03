function submitForm(){

	var TelNo1 = document.mealForm.TelNo.value;
	if (document.mealForm.TelNo.value === null||document.mealForm.TelNo.value === ""){
		TelNo1 = "did not fill in";
	}
	var HomeAdd1 = document.mealForm.HomeAdd.value;
	if (document.mealForm.HomeAdd.value === null||document.mealForm.HomeAdd.value === ""){
		HomeAdd1 = "did not fill in";
	}
	var TableNo1 = document.mealForm.TableNo.value;
	if (document.mealForm.TableNo.value === null||document.mealForm.TableNo.value === ""){
		TableNo1 = "0";
	}

	var data = JSON.stringify({
		FirstName: document.mealForm.FirstName.value,
		LastName: document.mealForm.LastName.value,
		TelNo: TelNo1,
		EmailAdd: document.mealForm.EmailAdd.value,
		HomeAdd: HomeAdd1,
	//	UserDate: document.getElementById('selected').innerHTML,
		UserDate: document.mealForm.UserDate.value,
		MealChoice: document.mealForm.MealChoice.value,
		NoSeats: document.mealForm.NoSeats.value,
		TableNo: TableNo1,
		StaffCode: document.mealForm.StaffCode.value
	});
	//document.getElementById('test').innerHTML=FirstName;
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function(){
		if(xhr.status === 200 && xhr.readyState === 4){
		//	window.alert(xhr.responseText);
			document.getElementById("message").innerHTML=xhr.responseText;
		}
	};
	xhr.open("POST","mail.php");
	xhr.setRequestHeader("Content-type","application/json");
	xhr.send(data);
	console.log('sending...')
	return false;
}
//select highSeason from shabbat where date = document.mealForm.UserDate.value
