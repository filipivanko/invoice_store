function printElem(divId) {
    var content = document.getElementById(divId).innerHTML;
    var mywindow = window.open('', 'Print', 'height=600,width=800');

    mywindow.document.write('<html><head><title>Print</title><link rel="stylesheet" href="css/customcss.css"><link rel="stylesheet" href="css/app.css">');
    mywindow.document.write('</head><body >');
    mywindow.document.write(content);
    mywindow.document.write('</body></html>');

    mywindow.document.close();
    mywindow.focus()
    mywindow.print();
   /* setTimeout(function() {
    mywindow.close();
     }, 300);*
    return true;*/
}

function printDiv(DivIdToPrint) {
    var divToPrint = document.getElementById(DivIdToPrint);
    var newWin = window.open('', 'Print-Window');
    newWin.document.open();
    newWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</body></html>');
    newWin.document.close();
   // setTimeout(function() {
   //   newWin.close();
   // }, 500);
  }