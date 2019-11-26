 
$( document ).ready(function() {
    getPageData();

    function getPageData() {
        $.ajax({
            dataType: 'json',
            url: 'api/getData.php',
        }).done(function(data){
             window.chart_data = data.data;
             console.log(window.chart_data);
            manageRow(data.data);           
        });
    }
    function manageRow(data) {

        var	rows = '';
            $.each( data, function( key, value ) {

              rows = rows + '<tr>';   
            
              rows = rows + '<td>'+value.school+'</td>';
              rows = rows + '<td>'+value.department+'</td>';
              rows = rows + '<td>'+value.year+'</td>';
              rows = rows + '<td>'+value.semester+'</td>';
              rows = rows + '<td>'+value.major+'</td>';
              rows = rows + '<td>'+value.student+'</td>';
             
    
              rows = rows + '<td data-id="'+value.id+'">';
    
            rows = rows + '<button data-toggle="modal" data-target="#edit-item" class="btn btn-warning btn-circle"><i class="glyphicon glyphicon-pencil"></i></button> ';
    
            rows = rows + '<button class="btn btn-danger btn-circle remove-item"><i class="glyphicon glyphicon-remove"></i></button>';
    
            rows = rows + '</td>';
    
              rows = rows + '</tr>';
    
        });
        $("tbody").html(rows);
    
    }
    
    //Chart

    

    //University Data Create

    $(".crud-submit").click(function(e) {
    
        e.preventDefault();

        var values = $('#wtf').serialize();
    
        $.ajax({
                type:'POST',
                url:  'api/create.php',
                data:values
    
            }).done(function(data){
    
                $("input[type=number]").val('');
                $("input[type=text]").val('');
                getPageData();
                $(".modal").modal('hide');

                toastr.success(data, 'Success Alert', {timeOut: 5000});
                toastr.success('Item Created Successfully.', 'Success Alert', {timeOut: 5000});
            });
         });

    
    
    /* Remove Item */
    
    $("body").on("click",".remove-item",function(){
    
        var id = $(this).parent("td").data('id');
       
        var c_obj = $(this).parents("tr");
    
    
        $.ajax({
    
            type:'POST',
    
            url: 'api/delete.php',
    
            data:{uni_id:id}
    
        }).done(function(data){
    
            c_obj.remove();
    
            toastr.success('Item Deleted Successfully.', 'Success Alert', {timeOut: 5000});
    
            getPageData();
    
        }); 
    
    
    });

});

 