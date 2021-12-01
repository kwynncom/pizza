function total() {
    const qtye = byid('pepqty');
    const total  = byid(qtye.dataset.priceelement).innerHTML * qtye.value;
    if (!Number.isNaN(total)) byid('total').innerHTML = total;
    if (total > 0.009) { byid('coPar').style.visibility = 'visible'; activatePPBtn(); }
    else                 byid('coPar').style.visibility = 'hidden' ;

}

function payment_complete(dets) {
    byid('coPar').style.visibility = 'hidden' ;  
    byid('orderOK').style.visibility = 'visible';
    byid('ppxid').innerHTML = dets.id;
    // dets.payer.name.given_name   - another option
}