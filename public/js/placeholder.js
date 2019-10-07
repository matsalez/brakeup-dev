function ModifyPlaceHolder ()
{
let input = document.getElementById("input-sm");
input.placeholder = "";
};

document.getElementById("input-sm").addEventListener("click", ModifyPlaceHolder)
