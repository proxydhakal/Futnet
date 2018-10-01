$("#add").click(function(e){

    e.preventDefault();

    var form_action = $("#create-item").find("form").attr("action");

    var venue = $("#create-item").find("input[name='venue']").val();
     var date = $("#create-item").find("input[name='date']").val();
      var time = $("#create-item").find("input[name='time']").val();

    var location = $("#create-item").find("input[name='location']").val();



    $.ajax({

        dataType: 'json',

        type:'POST',

        url: addPost,

        data:{title:title, details:details}

    }).done(function(data){


        toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});

    });

});