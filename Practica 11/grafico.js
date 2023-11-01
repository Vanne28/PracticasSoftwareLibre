$(document).ready(function () {
    // $("#btngraficar").click(function (event) {
    //     evevnt.preventDefault(); 

    
    $("#totales").keyup(function () {
        // Recuperar el valor del campo de entrada
    
        var total = $("#totales").val();
           
        $.ajax({
            type: "POST", 
            url: "grafica.php", 
            data: { totales: total
             }, 
            success: function (response) {
             var res=JSON.parse(response)
            var aniosArray=[];
            var ventesitaArray=[];
             for (let i = 0; i < res.length; i++) {
                 var anios = res[i][0];
                 var ventesit=res[i][1];
                 aniosArray.push(anios);
                ventesitaArray.push(ventesit);
                
             }
             console.log(aniosArray)
             console.log(ventesitaArray)

             Highcharts.chart('container', {

                title: {
                    text: 'Empresa XYZ',
                    align: 'center'
                },
                
                subtitle: {
                    text: 'Total de ventas anuales de los ultimos 10 años',
                    align: 'center'
                },
                
                yAxis: {
                    title: {
                        text: 'Ventas en $'
                    }
                },
                
                xAxis: {
                    categories: aniosArray,
                    accessibility: {
                        rangeDescription: 'Desde 2013 al 2022'
                    }
                },
                
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle'
                },
                
                plotOptions: {
                    series: {
                        label: {
                            connectorAllowed: false
                        },
                        pointStart: 2013
                    }
                }, 
                
                series: [{
                    name: 'Ventas anuales',
                    data: ventesitaArray
                }],
                
                responsive: {
                    rules: [{
                        condition: {
                            maxWidth: 500
                        },
                        chartOptions: {
                            legend: {
                                layout: 'horizontal',
                                align: 'center',
                                verticalAlign: 'bottom'
                            }
                        }
                    }]
                }
                
                });
                
            }
        });
    });

  
    
  
        
        


});

