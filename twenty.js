//Declare our Variables
  var select = document.getElementById('selectOption');
  var collapse = document.getElementById('questions-opt');


collapse.className = "inactive";

//If Select Field is Yes - Show if No - Hide 
select.onchange = function(){
  
  select.value == 'yes' ? collapse.className = "active" : collapse.className = "inactive";
  
}
console.log(select.value);