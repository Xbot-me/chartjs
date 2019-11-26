$( document ).ready(function() {
   
   

    $('#print').click(() => {

     PrintImage();  
    function PrintImage() {
        var canvas = document.getElementById("myChart");
        var win = window.open();
        win.document.write("<br><img src='" + canvas.toDataURL() + "'/>");
        win.print();
        win.location.reload();
    
    }

    });


   
    $('#chart_change').click(() => {

        var school = $('#school').val(); //school
        var dept = $('#data').val();  //d epartment
        var year = $('#year').val();
        var semester = $('#semester').val();
        var major = $('#major').val();
        var topL = $('#data option:selected').text();
    console.log(school);
    console.log(year);

        $.ajax({
            dataType: 'json',
            url: 'api/getData.php?school='+school+'&dept='+dept+'&year='+year+'&semester='+semester+'&major='+major,
        }).done(function(data){
    
        if( school == 'all'){
            console.log('asd');
        }else{
            if(school == 'SoB'){
                $('#text-head').html('SoB');
            }else if(school == 'SLASS'){
                $('#text-head').html('SLASS');
            }
             
        
        var ctx = $("#myChart");
        let chart_data = data.data;
        
        let  topL = school+' vs Students';
        let student=[];
        let lebel=[];
        lebel = [school,school,school,school];

        for(let i = 0;i< chart_data.length;i++){
            student[i] = chart_data[i].student;  
        }
        console.log(student);
        chart(ctx,student,lebel,topL);

      
        }



            chart_ff();

     function chart_ff() {
                

                var ctx = $("#myChart");
                var chart_data = data.data;
              console.log(chart_data);
              //  var t = JSON.parse(chart_data);
               // console.log(chart_data[0][label]);
              // console.log(label);
                 var lebel=[], data2=[] , semester=[],major=[],student=[];
    
                for(let i = 0;i< chart_data.length;i++){
                    
                   lebel[i] = chart_data[i].school;
                    data2[i] = chart_data[i].dept; 
                   semester[i] = chart_data[i].semester;
                   major[i] = chart_data[i].major;  
                   student[i] = chart_data[i].student;  
                           
                }
                  //  if(lebel == 'SoB'){}
              //    console.log(lebel);
               // chart(ctx,student,lebel,topL);
            }

            
             });

        }); 
        function chart(ctx,data,lebel,topL){

            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: lebel,
                    datasets: [{
                        label: topL,
                        data: data,
                         backgroundColor: [
                              "#f38b4a",
                              "#56d798",
                              "#ff8397",
                              "#6970d5",
                              "#f38b4a",
                              "#56d798",
                              "#ff8397",
                              "#6970d5",
                              "#f38b4a",
                              "#56d798",
                              "#ff8397",
                              "#6970d5",
                              "#f38b4a",
                              "#56d798",
                              "#ff8397",
                              "#6970d5",
                              "#f38b4a",
                              "#56d798",
                              "#ff8397",
                              "#6970d5",
                              "#f38b4a",
                              "#56d798",
                              "#ff8397",
                              "#6970d5"
                            ],


                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        }
      

    }); 