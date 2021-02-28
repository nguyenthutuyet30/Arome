// export information user shopping



function continuePayment(data) {
    let fee = $('#fee').text();
    let isSlit = fee.replaceAll(" đ", "")
    let parts = isSlit.toString().split(",");
    let num =  parseInt(parts.join(''));
    let pro =  $("#province_select option:selected" ).text();
    let dis =  $("#district_select option:selected" ).text();
    let detail = $('#address-detail').val();
    let name = $('#name').val();
    $("#name-customer").html(name);
    $("#phone-customer").html($('#phone').val());
    $("#address-express").html(detail+ ", "+ dis + ", " + pro);
    $("#fee-express").html(num.toLocaleString('vn-VI') + " đ");
    $("#total-payment").html((num + data).toLocaleString('vn-VI') + " đ");
}
function comfirm() {
    let id_ship =   $('input[name=shipping_type]:checked').val();
    let id_payment =   $('input[name=payment_method]:checked').val();
    let fee = $('#fee').text();
    let isSlit = fee.replaceAll(" đ", "")
    let parts = isSlit.toString().split(",");
    let num =  parseInt(parts.join(''));
    let pro =  $("#province_select option:selected" ).text();
    let dis =  $("#district_select option:selected" ).text();
    let detail = $('#address-detail').val();
    let name = $('#name').val();
    let data = {
        'order': {
            'payment_method_id': parseInt(id_payment),
            'shipping_type_id': parseInt(id_ship),
            'shipping_price': num,
            'property': {
                'address': detail+ ", "+ dis + ", " + pro,
                'city': pro,
                
            }
        },
        'user': {
            'name': name,
            'phone': $('#phone').val()
        }
    }
    
    $.request('MakeOrder::onCreate', {
        'data': data,
        success: function (obRespone) {
            $.oc.flashMsg({ text: 'Cảm ơn bạn đã đặt hàng', class: "success" }),
            setTimeout(()=> {
                window.location.href = "/arome/all-product"
            },1000)
        },
    })
}
