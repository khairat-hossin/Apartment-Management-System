function loadItems(element, path, selectInputClass) {
  var selectedVal = $(element).val();

  // select all
  if (selectedVal == -1) {
    return;
  }

  $.ajax({
  type: 'GET',
  url: path + selectedVal,
  success: function (datas) {
    if (!datas || datas.length === 0) {
       return;
    }

    for (var  i = 0; i < datas.length; i++) {
      $(selectInputClass).append($('<option>', {
        value: datas[i].id,
        text: datas[i].name
    }));
    }
  },
  error: function (ex) {
  }
  });
}

//$("#birthDate").datepicker();
$('.datepicker').datepicker().on('changeDate', function (ev) {

        $(this).datepicker('hide');
});

// $(document).ready(function(){
//     var input = document.getElementById('name');
//     input.oninvalid = function(event) {
//     event.target.setCustomValidity('Username should only contain lowercase letters. e.g. john');
//   }
  
// });
