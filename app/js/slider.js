var sliderRange = (function () {

  // Инициализация проекта
  var init = function(){
    _setUpListners();
    _slider_range();
  };
  // Переменные для диапозона цены
  var minValue = 0,
      maxValue = 50000;

  var _setUpListners = function (){ 
    $("#minCost").on('change', _min_valueRange); // проверка минимального ввода
    $("#maxCost").on('change', _max_valueRange); // проверка максимального ввода
    $(".price-range__input").on('keypress', _filterRange); // фильтрация ввода в поля
  };

  var _min_valueRange = function (){
        
      var value1 = $("#minCost").val(),
          value2 = $("#maxCost").val();    

      if(parseInt(value1) > parseInt(value2)){
        value1 = value2;
        $("#minCost").val(value2);
      }
      $("#slider-range").slider("values",0,value1);
  };

  var _max_valueRange = function (){
        
      var value1 = $("#minCost").val(),
          value2 = $("#maxCost").val();
      
      if (value2 > maxValue) { value2 = maxValue;  $("#maxCost").val(maxValue)}

      if(parseInt(value1) > parseInt(value2)){
        value2 = value1;
        $("#maxCost").val(value2);
      }
      $("#slider-range").slider("values",1,value2);
  };

  var _filterRange = function (){
      var key, keyChar;
      if(!event) var event = window.event;
      
      if (event.keyCode) key = event.keyCode;
      else if(event.which) key = event.which;
    
      if(key==null || key==0 || key==8 || key==13 || key==9 || key==46 || key==37 || key==39 ) return true;
      keyChar=String.fromCharCode(key);
      
      if(!/\d/.test(keyChar)) return false;
  };

  var _slider_range = function () {
      $( "#slider-range" ).slider({
        range: true,
        min: minValue,
        max: maxValue,
        step: 500,
        values: [ 2000, 13000 ],
        stop: function(event, ui) {
          $( "#minCost" ).val( $( "#slider-range" ).slider( "values", 0 ));
          $( "#maxCost" ).val( $( "#slider-range" ).slider( "values", 1 ));
        },
        slide: function( event, ui ) {
          $( "#minCost" ).val( ui.values[ 0 ]);
          $( "#maxCost" ).val( ui.values[ 1 ]);
        }
      });

       $( "#minCost" ).val( $( "#slider-range" ).slider( "values", 0 ));
       $( "#maxCost" ).val( $( "#slider-range" ).slider( "values", 1 ));         
      
  };
    

  return {
    init: init
  };

})();

sliderRange.init();