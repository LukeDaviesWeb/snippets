prettyPrint();
//Global variables
var items = document.querySelectorAll('.sub-menu-item');
var menuWithChildren = document.querySelector('.has-children');
var submenuSwitch = document.querySelector('.fa-chevron-down');
var submenu = document.querySelector('.sub-menu');
var isMoved = false;


//click menu item with sub menu
menuWithChildren.onclick = function() {
  //toggle flag
  isMoved = !isMoved;

  for ( var i=0; i < items.length; i++ ) {
    //active sub menu
    submenu.classList.toggle('active');
    menuWithChildren.classList.toggle('active');
    submenuSwitch.classList.toggle('active');


    var toggleItemMove = getToggleItemMove( i );
    // stagger transition with setTimeout
    setTimeout( toggleItemMove, i * 50 );
  }
};


function getToggleItemMove( i ) {
  var item = items[i];

  return function() {
    item.classList.toggle('active');
  }
}

//stop propogation of sub items on click
$(items).click(function(e) {
e.stopPropagation();
});



//jQuery
$(document).ready(function(){

  $('.snippetSelector').click(function(){
    let type = $(this).attr('snippet');
    $('.homepage').css('display','none');

    showSnippetPage(type);
  })

  $('.home-link').click(function(){
    $('.content').css('display','none');
    $('.homepage').css('display','block');
  })

  $('.submitbtn').click(function(e){
    e.preventDefault();
    SubmitForm();
  })
})

function showSnippetPage(type){
  $('.content').each(function(){
    if($(this).attr('snippet') === type){
      $(this).css('display', 'block');
    }else{
      $(this).css('display','none');
    }
  })
}

$('.show-code').click(function(){
  $('.show-code').css('color','#444');
  let type = $(this).attr('data');
  $('.code').each(function(){
    if($(this).attr('data') === type){
      $(this).find('.prettyprint').css('display','block');

    }else{
      $(this).find('.prettyprint').css('display','none');
    }
  })

  $('.show-code').each(function(){
    if($(this).attr('data') === type){
      $(this).css('color','#fff');
    }
  })
});


//Form submission
function SubmitForm(){

  let url = '../php/formSubmission.php';
  let form = $('.demo-form');
  let yourData = $(form).serialize();

  $.ajax({
    url: url,
    type: 'POST',
    data: yourData,
    datatype: 'json'
  })
  .done(function (data) { 
    let parsed_data = JSON.parse(data);
    $('.success-msg').append('<p>'+parsed_data.msg+'</p>');
  })
  .fail(function (jqXHR, textStatus, errorThrown) { 
    $('.error-msg').append('<p>'+parsed_data.msg+'</p>');
  });
}

