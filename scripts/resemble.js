//set temp values for table, rows and cols
const urlParams = new URLSearchParams(window.location.search);
const productName = urlParams.get('productName');
  var table = '';
  var rows = 5;
  var cols = 5;
// Task 1 Preload images as a loop
  for (var r = 1; r < rows; r++) {
    //tr for rows
    table += '<tr>';
    // td for columns
    for (var c = 1; c <= cols; c++) {
      table += '<td>' + '<img src=../../images/'+productName+'/'+productName+'_r'+r+'_c'+c +'.jpg>'+ '</td>';
    }
    table += '</tr>';
  }
  //finally write table for contructing a table
  //For Prac B Task 2, change using innerHTML after the nested loop above
   document.getElementById("ImageContent").innerHTML = '<table style="padding: 0px; margin:0px; border:none;">' + table + '</table>';
// Old line for prac A
// document.write('<table style="padding: 0px; margin:0px; border:none;">' + table + '</table>');
