//JQUERY

$(document).ready(function(){

var belgium = [
  {display: "Antwerp", value: "Antwerp" }, 
  {display: "Bruges", value: "Bruges" }, 
  {display: "Charleroi", value: "Charleroi" },
  {display: "Ghent", value: "Ghent" }, 
  {display: "Leuven", value: "Leuven" }, 
  {display: "Liège", value: "Liège" },
  {display: "Namur", value: "Namur" }];

            
  
var germany = [
  {display: "Berlin", value: "Berlin" }, 
  {display: "Hamburg", value: "Hamburg" }, 
  {display: "Munich", value: "Munich" },
  {display: "Cologne", value: "Cologne" }, 
  {display: "Frankfurt am Main", value: "Frankfurt" }, 
  {display: "Stuttgart", value: "Stuttgart" },
  {display: "Düsseldorf", value: "Düsseldorf" },
  {display: "Dortmund", value: "Dortmund" }];

  
var france = [
  {display: "Paris", value: "Paris" }, 
  {display: "Marseille", value: "Marseille" }, 
  {display: "Lyon", value: "Lyon" },
  {display: "Toulouse", value: "Toulouse" }];


  $("#parent_selection").change(function() {
  var parent = $(this).val(); 
  switch(parent){ 
    case 'belgium':
       list(belgium);
      break;
    case 'germany':
       list(germany);
      break;        
    case 'france':
       list(france);
      break;  
    default: //default child option is blank
      $("#child_selection").html('');  
      break;
       }
});
//function to populate child select box
function list(array_list)
{
  $("#child_selection").html(""); //reset child options
  $(array_list).each(function (i) { //populate child options 
    $("#child_selection").append("<option value=\""+array_list[i].value+"\">"+array_list[i].display+"</option>");
  });
}
});