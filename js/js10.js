function total() {
    const qtye = byid('pepqty');
    const total  = byid(qtye.dataset.priceelement).innerHTML * qtye.value;
    if (!Number.isNaN(total)) byid('total').innerHTML = total;
    if (total > 0.009) { byid('coPar').style.visibility = 'visible'; activatePPBtn(); }
    else                 byid('coPar').style.visibility = 'hidden' ;

}

function payment_complete(details) {
    byid('coPar').style.visibility = 'hidden' ;  
    byid('orderOK').style.visibility = 'visible';
}