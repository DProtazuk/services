$('#approval').click(function(){
	if ($(this).is(':checked')){
		$('#btnApproval').removeAttr('disabled');
	} else {
		$('#btnApproval').attr('disabled', 'disabled'); 
	}
});

$('#btnApproval').click(function(){
    var value = $('input[name="typeAnketa"]:checked').val();
    if(!value){
        $(".erorApproval").text("");
        $(".erorApproval").text("Выберите один из Вариантов!");
        return false;
    }
    else {
        if(value == "girl"){
            window.location.href = "/pages/advertiser/create-type/create-girl.php";
        }
        else if(value == "masseuse"){

        }
        else if(value == "transsexual"){

        }
        else if(value == "guy"){

        }
        else if(value == "salon"){

        }
        else if(value == "sauna"){

        }
    }
});

$("#phone").mask("+7 (999) 99-99-999");

$('#textareaGirl').on('keypress keyup keydown paste', function() {
	var count = $(this).val().length+1;

    if(count >= 200){
        $('.counterTextarea').removeClass('text-danger');
        $('.counterTextarea').addClass('text-success');
    }
    else if(count == 1){
        $('.counterTextarea').removeClass('text-success');
        $('.counterTextarea').addClass('text-danger');
        count = count-1;
    }
    else {
        $('.counterTextarea').removeClass('text-success');
        $('.counterTextarea').addClass('text-danger');
    }
    $("#numTextarea").text(count);
});


$('.checkboxServices').change(function() {
    if ($(this).is(':checked')){
        $("."+$(this).attr('id')).prop('disabled', false);

    } else {
        $("."+$(this).attr('id')).prop('disabled', true);
    }
});

$('.individual_services').on('keypress keyup keydown paste', function() {
    var count = $(this).val().length;
    if(count > 0){
        $("."+$(this).attr('id')).prop('disabled', false);
    }
    else {
        $("."+$(this).attr('id')).prop('disabled', true);

    }
});


$("body").delegate(".img_anketa_girl", "click", function(){
    $('#'+$(this).attr('data-input'))[0].click();
 });

$('#img_input1').change( function(event) {
    $("#"+$(this).attr('data-img')).fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));

    if(event.target.files[0]) {
        var check = parseFloat($(this).attr('data-check'))+1;
        $(".div_create_img_girl").append('<div class="col-3 mx-2 align-items-center"><img id="img_girl_'+check+'" data-input="img_input'+check+'" src="/src/+.png" class="col-12 cursor img_plus img_anketa_girl"><input data-check="'+check+'" data-img="img_girl_'+check+'" id="img_input'+check+'" type="file" class="d-none"></div>');
    }
});

$("body").delegate("#img_input2", "change", function(event){
    $("#"+$(this).attr('data-img')).fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));

    if(event.target.files[0]) {
        var check = parseFloat($(this).attr('data-check'))+1;
        $(".div_create_img_girl").append('<div class="col-3 mx-2 align-items-center"><img id="img_girl_'+check+'" data-input="img_input'+check+'" src="/src/+.png" class="col-12 cursor img_plus img_anketa_girl"><input data-check="'+check+'" data-img="img_girl_'+check+'" id="img_input'+check+'" type="file" class="d-none"></div>');
    }
});

$("body").delegate("#img_input3", "change", function(event){
    $("#"+$(this).attr('data-img')).fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));

    if(event.target.files[0]) {
        var check = parseFloat($(this).attr('data-check'))+1;
        $(".div_create_img_girl").append('<div class="col-3 mx-2 align-items-center"><img id="img_girl_'+check+'" data-input="img_input'+check+'" src="/src/+.png" class="col-12 cursor img_plus img_anketa_girl"><input data-check="'+check+'" data-img="img_girl_'+check+'" id="img_input'+check+'" type="file" class="d-none"></div>');
    }
});


$("body").delegate(".img_girl_verification", "click", function(){
    $('#img_girl_verification')[0].click();
 });

$('#img_girl_verification').change( function(event) {
    $("."+$(this).attr('id')).fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));
});