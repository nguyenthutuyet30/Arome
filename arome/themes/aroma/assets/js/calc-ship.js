import translationsJSON from './provinceDistrict.js';
//minh
$(document).ready(function(){
    $(translationsJSON).each(function(){
      $("#province_select").append($('<option>', {
          value: this.code,
          text: this.name,
      }));
    })
    $('#province_select').change(function(){
     let code = $(this).find(':selected').val();
     if(!(code == 404)) {
      let result = translationsJSON.filter(item => item.code == code);
      $("#district_select").children().remove()
      $(result[0].districts).each(function(){
          $("#district_select").append($('<option>', {
              value: this.code,
              text: this.name,
          }));
      })
      tinhship();
     }
     else {
      $("#district_select").children().remove()
     }
    })
    $('#district_select').change(function(){
      tinhship();
    })
    $('#continue-payment').click(function() {
       let implet = $('#continue-payment');
       if($('#name').val() == '') {
            implet.removeAttr("data-target");
            $('#error-name').html('Vui lòng nhập họ tên')
       }
       else if($('#phone').val() == '') {
            implet.removeAttr("data-target");
            $('#error-phone').html('Vui lòng nhập số điện thoại')
       }
       else if( $("#district_select option:selected" ).text() == '') {
            implet.removeAttr("data-target");
            $('#error-province').html('Vui lòng chọn tỉnh/thành phố')
        }
       else if($('#address-detail').val() == '') {
            implet.removeAttr("data-target");
            $('#error-detail').html('Vui lòng nhập địa chỉ chi tiết')
       }
       else {
            implet.attr("data-target", "#popupcheckout");
            clearError();
       }
    })
    $('#name').change(function() {
        clearError();
    });
    $('#phone').change(function() {
        clearError();
    });
    $('#province_select').change(function() {
        clearError();
    });
    $('#address-detail').change(function() {
        clearError();
    });
})
  function clearError() {
    $('#error-name').html("");
    $('#error-phone').html("");
    $('#error-province').html("");
    $('#error-detail').html("");
  }

  function tinhship() {
      let pro =  $( "#province_select option:selected" ).text();
      let dis =  $( "#district_select option:selected" ).text();
      let tamtinh = $('#tamtinh').text();
      let isSlit = tamtinh.replaceAll(" đ", "")
      let parts = isSlit.toString().split(",");
      let num =  parseInt(parts.join(''));
      $.request('MakeOrder::onFe', {
        'data': {
          'calcShip': {
            'province': pro,
            'district': dis,
            'pick_province': 'Hồ chí minh',
            'pick_district': 'Quận 7',
            'weight': 200,
            'deliver_option': 'none'
          }
        },
        success: function (obRespone) {
            const succes = JSON.parse(obRespone);
            $('#fee').html((succes.fee.fee).toLocaleString('vn-VI') + " đ")
            $('#total').html((num + succes.fee.fee).toLocaleString('vn-VI') + " đ");
        }
      })
  }
