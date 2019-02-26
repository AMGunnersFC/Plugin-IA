call function submitForm()

function tableVisual() {
  document.mealForm.TableNo.visibility = "hidden";
var UserDate = y.innerHTML;
if (y.innerHTML === "2019-03-01"||y.innerHTML === "2019-03-02"||
    y.innerHTML === "2019-03-08"||y.innerHTML === "2019-03-09"||
    y.innerHTML === "2019-03-015"||y.innerHTML === "2019-03-016"||
      y.innerHTML === "2019-03-22"||y.innerHTML === "2019-03-23"||
        y.innerHTML === "2019-03-29"||y.innerHTML === "2019-03-30"||){
  document.mealForm.TableNo.visibility = "visible";
}
}
