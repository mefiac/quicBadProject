$(document).ready(function () {
    $('.dropdown').click(function (e) {
        $('.dropdown').removeClass('open');
        $(this).toggleClass('open');
        e.stopPropagation();
    });
    $(document).click(function () {
        $('.dropdown').removeClass('open');
    });
    $("._foto_block").click(function () {
        $(this).children(".img_file")[0].click();
    });


    function renderImage(file, x) {
        var reader = new FileReader();
        reader.onload = function (event) {
            the_url = event.target.result;
            $(x).prev('img').css('display', 'block');
            $(x).prev('img').attr('src', the_url);
        }
        reader.readAsDataURL(file);
    }

    $(".img_file").change(function () {
        $(this).parent('div.foto_block').removeClass('forempty');
        $(this).parent('div.foto_block').addClass('forfull');
        renderImage(this.files[0], this)
    });
});
function inputValid(textbox) {
    
    if (textbox.value == '') {
        textbox.setCustomValidity('Լրացրեք դաշտը');
    } else if(textbox.validity.typeMismatch){
        textbox.setCustomValidity('please enter a valid email address');
    }
    else {
        textbox.setCustomValidity('');
    }
    return true;
}

function selectValid(textbox) {
    
    if (textbox.value == '') {
        textbox.setCustomValidity('Ընտրեք որևիցե մեկը ցուցակից');
    }else if(textbox.validity.typeMismatch){
        textbox.setCustomValidity('please enter a valid email address');
    }
    else {
        textbox.setCustomValidity('');
    }
    return true;
}

function inputValidParam(textbox,text) {
    
    if (textbox.value == '') {
        textbox.setCustomValidity(""+text+"");
    } else if(textbox.validity.typeMismatch){
        textbox.setCustomValidity('please enter a valid email address');
    }
    else {
        textbox.setCustomValidity('');
    }
    return true;
}