//Declare our Variables
let select = document.getElementById('selectOption');
let collapse = document.getElementById('questions-opt');

//If Select Field is Yes - Show if No - Hide 
select.onchange = function(){
  
  if(select.value == 'yes'){
    collapse.className = "active";
  } else {
    collapse.className = "inactive";
  }
  console.log(select.value);
}

console.log(select.value);