$('#terms_conditions').change(function(){
    if(this.checked) {
        $('#finish').next().hide();
    } else {

        $('#finish').next().show();
    }
});

$(function(){

	$("#wizard").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 500,
        labels: {
            finish: "Submeter",
            next: "Próximo",
            previous: "Anterior"
        },
        onStepChanging: function (event, currentIndex, newIndex)
        {
            // Allways allow previous action even if the current form is not valid!
            if (currentIndex > newIndex)
            {
                return true;
            }
            // Forbid next action on "Warning" step if the user is to young
            if (newIndex === 3 && Number($("#nuit").val()) < 18)
            {
                return false;
            }
            // Needed in some cases if the user went back (clean up)
            if (currentIndex < newIndex)
            {
                // To remove error styles
                $("#wizard").find(".body:eq(" + newIndex + ") label.error").remove();
                $("#wizard").find(".body:eq(" + newIndex + ") .error").removeClass("error");
            }
            $("#wizard").validate().settings.ignore = ":disabled,:hidden";
            return $("#wizard").valid();
        },
        onStepChanged: function (event, currentIndex, priorIndex)
        {
            // Used to skip the "Warning" step if the user is old enough.
            // if (currentIndex === 2 && Number($("#age-2").val()) >= 18)
            // {
            //     $("#wizard").steps("next");
            // }
            // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
            if (currentIndex === 2 && priorIndex === 3)
            {
                $("#wizard").steps("previous");
            }
        },
        onFinished: function (event, currentIndex) {
            // alert("Alhamdulillah, Alkhery Member is already Registered.");
            $("#wizard").submit();
        }
    });
    $('.wizard > .steps li a').click(function(){
    	$(this).parent().addClass('checked');
		$(this).parent().prevAll().addClass('checked');
		$(this).parent().nextAll().removeClass('checked');
    });
    // Custome Jquery Step Button
    $('.forward').click(function(){
    	$("#wizard").steps('next');
    })
    $('.backward').click(function(){
        $("#wizard").steps('previous');
    })


    // Select Dropdown
    $('html').click(function() {
        $('.select .dropdown').hide();
    });
    $('.select').click(function(event){
        event.stopPropagation();
    });
    $('.select .select-control').click(function(){
        $(this).parent().next().toggle();
    })
    $('.select .dropdown li').click(function(){
        $(this).parent().toggle();
        var text = $(this).attr('rel');
        $(this).parent().prev().find('div').text(text);
    })

    //remove default #finish button
    $('#wizard').find('a[href="#finish"]').submit();
    //append a submit type button
    // $('#wizard .actions li:last-child').append('<button type="submit" id="submit" class="btn-large"><span class="fa fa-chevron-right"></span></button>');


})

$("#wizard").validate({
    rules: {
        nuit: {
            required:true,
            rangelenght: [4,20],
        },

    },
    messages:{
        nuit:{
            required:"To pole jest wymagane!"
        }
    }
})
function ValidatePetSelection()
{
    var checkboxes = document.getElementsByName("lot");
    var numberOfCheckedItems = 0;
    for(var i = 0; i < checkboxes.length; i++)
    {
        if(checkboxes[i].checked)
            numberOfCheckedItems++;
    }
    if(numberOfCheckedItems > 1)
    {
        alert("Você não pode selecionar mais de dois pacotes!\n");
        return false;
    }
}
