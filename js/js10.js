function total(e) {
    const priceE = e.dataset.priceelement;
    const total  = byid(priceE).innerHTML * e.value;
    byid('total').innerHTML = total;
}