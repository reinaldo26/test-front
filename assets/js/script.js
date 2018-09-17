var job = 1;
var edu = 1;
var progress = 0;

$(function(){
    $('#pro').html(progress);

    $('.btn-intro').on('click', function(){
        $('.modal').show('slow');
        $('.text-intro').show();
        $('.data-expe').hide();
        $('.data-edu').hide();
        $('.modal-title').html('Introduce Yourself');
        $('.modal-body p').html('Add a small introduction about yourself,<br> outlining career to date, and the career<br> path that you would like to take.<br><br> Showcase your strengh and values, along<br> with your personality.');
    });

    $('.btn-expe').on('click', function(){
        $('.modal').show('slow');
        $('.text-intro').hide();
        $('.data-edu').hide();
        $('.data-expe').show();
        $('.modal-title').html('Add Your Experience');
        $('.modal-body p').html('');
    });

    $('.btn-edu').on('click', function(){
        $('.modal').show('slow');
        $('.modal').attr('data-type', 'edu');
        $('.data-edu').show();
        $('.text-intro').hide();
        $('.data-expe').hide();
        $('.modal-title').html('Add Your Educational Background');
        $('.modal-body p').html('');
    });

    //progress bar
    $('.save-form').on('click', function(){
        var intro =  $('.text-intro').find('textarea').val();

        var company_name = $('.data-expe-form').find('input[name="company_name[]"]').val();
        var job_title = $('.data-expe-form').find('input[name="job_title[]"]').val();
        var salary = $('.data-edu-form').find('input[name="salary[]"]').val();

        var institution_name = $('.data-edu-form').find('input[name="institution_name[]"]').val();
        var course = $('.data-edu-form').find('input[name="course[]"]').val();
        var course_status = $('.data-edu-form').find('input[name="course_status[]"]').val();

        //increase bar
        if(institution_name != '' && course != '' && course_status != '' && progress <= 75){
            progress += 25;
        } else if(company_name != '' && job_title != '' && salary != '' && progress <= 75){
            progress += 25;
        } else if(intro != '' && progress <= 50){
            progress += 50;
        } 
        
        $('.width-bar').css('width', progress+'%');
        $('#pro').html(progress);
        $('.modal').hide();
    });

    $('.add-job').on('click', function(e){
        e.preventDefault();
        var form = $(this).closest('.data-expe').find('.data-expe-form').html();

        if(job < 5){
            $('.additional-expe-form').append('<div><button onclick="remove(this)">x</button>'+form+'</div>');
            job++;
        }
    });

    $('.add-edu').on('click', function(e){
        e.preventDefault();
        var form = $(this).closest('.data-edu').find('.data-edu-form').html();
        if(job < 5){
            $('.additional-edu-form').append('<div><button onclick="remove(this)">x</button>'+form+'</div>');
            edu++;
        }
    });

    $('.btn-close').on('click', function(){
        $('.modal').hide();
    });

    $('.close').on('click', function(){
        $('.modal').hide();
    });

    $('.div-info').on('click', function(){
        $('.user-info').toggle();
    });

    $('.icon-mobile').on('click', function(){
        $('.nav-mobile').slideToggle();
    });
});

function remove(obj) {
    var child = obj.parentElement; 
    child.parentNode.removeChild(child);
    job--; edu--;
}