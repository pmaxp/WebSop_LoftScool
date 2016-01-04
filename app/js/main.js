var myModule = (function () {

  // Инициализация проекта
  var init = function(){
    _setUpListners();
    _accordionInit();
    _columnize();
    _styleSelect2();
    _priseFilter();    
  };

  var _accordionInit = function (){ 
    $( ".accordion" ).accordion({
      collapsible: true,
      heightStyle: "content"
   });
  };

  var _columnize = function (){ 
    $('.info-block__content').columnize({
      columns: 2
    });
  };

  var _setUpListners = function (){ 
     $(".colors-block").on('click', _changeColorClass); // добавляем класс актив к Color
     $(".line-phone-list").on('click', _changePhoneClass); // добавляем класс актив к Phone
     $(".card_product__image-small").on('click', _changeImageBig); // меняем картинку по клику на миниатюру
     $(".view__block").on('click', _changeVeiwCard); // меняем стиль карты продукта
  };

  var _priseFilter = function (){
        
      var prise = $(".card_product__price");

      $.each(prise, function(i, val) { 
        var priseIn = $(val).text();
        priseCorr = priseIn.replace(/(\d{1,3}(?=(\d{3})+(?:\.\d|\b)))/g,"\$1 ");        
        $(val).text(priseCorr);
     });

  };

  var _changeVeiwCard = function (e){

    var viewClass = $(e.target),
        cardsClass = $('.catalog-view');

          cardsClass.removeClass('catalog-view-list catalog-view-tabl catalog-view-icons');
          cardsClass.addClass(viewClass.attr('view-atribut'));

  };

  var _changeImageBig = function (){

    var smallImage = $(this).children('.product__image-item'),
        bigImage = $(this).closest('.card_product__image-block').find('.product__image');
        // console.log(target.attr('src'));
        bigImage.attr('src', smallImage.attr('src'));
        bigImage.attr('alt', smallImage.attr('alt'));
        bigImage.attr('title', smallImage.attr('title'));
        
  };

  var _changePhoneClass = function (e){

    var target = $(e.target),
        phoneClass = $(this);

    phoneClass.find('.line-phone__item-active').removeClass('line-phone__item-active');
    target.addClass('line-phone__item-active');

  };

  var _changeColorClass = function (e){

    var target = $(e.target);

    if (target.hasClass('color-block-active') || target.hasClass('colors-block')) // проверяем есть ли класс актив или это ul
      {
      target.removeClass('color-block-active');
      }
    else{
      target.addClass('color-block-active');  // добавляем класс актив
    }

  };
  var _styleSelect2 = function (){
     // $('select').chosen({disable_search_threshold: 10});
     $('select').select2();
  };

  return {
    init: init
  };

})();

myModule.init();