

var options = {
  chart: {
    width: 300,
    type: 'pie',
	
	
   },
  legend: {
    position: 'left' ,
	offsetX:0,
      offsetY: 20,
	  fontSize: '18px',
     
	     
  },
  
  plotOptions: {
          pie: {
            dataLabels: {
              offset: -10
            }
          }
        },
  
  labels: ['<i class="fa fa-heart"></i> 310,125', ' <i class="fa fa-share"></i> 310,125', ' <i class="fas fa-sign-in-alt"></i> 310,125',  ],
  series: [34, 33, 33,],
  colors: ['#1F78B4','#546A76','#00BB5E'],
            
}

var chart = new ApexCharts(document.querySelector("#instagram"), options);

chart.render();

/*twitter chart*/


var options = {
  chart: {
    width: 300,
    type: 'pie',
	
	
   },
  legend: {
    position: 'left' ,
	offsetX:0,
      offsetY: 20,
	  fontSize: '18px',
     
	     
  },
  plotOptions: {
          pie: {
            dataLabels: {
              offset: -10
            }
          }
        },
		
  labels: ['<i class="fa fa-heart"></i> 310,125', ' <i class="fa fa-share"></i> 310,125', ' <i class="fas fa-sign-in-alt"></i> 310,125',  ],
  series: [34, 33, 33,],
 colors: ['#1F78B4','#546A76','#00BB5E'],
            
}

var chart = new ApexCharts(document.querySelector("#twitter"), options);

chart.render();


/*snapchat chart*/

var options = {
  chart: {
    width: 300,
    type: 'pie',
	
	
   },
  legend: {
    position: 'left' ,
	offsetX:0,
      offsetY: 20,
	  fontSize: '18px',
     
	     
  },
  plotOptions: {
          pie: {
            dataLabels: {
              offset: -10
            }
          }
        },
  
  labels: ['<i class="fa fa-heart"></i> 310,125', ' <i class="fa fa-share"></i> 310,125', ' <i class="fas fa-sign-in-alt"></i> 310,125',  ],
  series: [34, 33, 33,],
  colors: ['#1F78B4','#546A76','#00BB5E'],
            
}

var chart = new ApexCharts(document.querySelector("#snapchat"), options);

chart.render();


/*facebook chart*/

var options = {
  chart: {
    width: 300,
    type: 'pie',
	
	
   },
  legend: {
    position: 'left' ,
	offsetX:0,
      offsetY: 20,
	  fontSize: '18px',
     
	     
  },
  plotOptions: {
          pie: {
            dataLabels: {
              offset: -10
            }
          }
        },
  
  labels: ['<i class="fa fa-heart"></i> 310,125', ' <i class="fa fa-share"></i> 310,125', ' <i class="fas fa-sign-in-alt"></i> 310,125',  ],
  series: [34, 33, 33,],
  colors: ['#1F78B4','#00BB5E','#546A76'],
            
}

var chart = new ApexCharts(document.querySelector("#facebook"), options);

chart.render();

/*tweets chart*/

var options = {
  chart: {
    width: 280,
    type: 'pie',
	
	
   },
  legend: {
    position: 'left' ,
	offsetX:0,
      offsetY: 30,
	 
     
	     
  },
  plotOptions: {
          pie: {
            dataLabels: {
              offset: -25
            }
          }
        },
  
  labels: ['Male', ' Femail',  ],
  series: [60, 40],
  colors: ['#A6CEE3','#1F78B4'],
            
}

var chart = new ApexCharts(document.querySelector("#tweets"), options);

chart.render();

/* timelinechart start */

var options = {
 
            chart: {
                height: 150, type: "bar", stacked: !0
            },
            plotOptions: {
                bar: {
                    horizontal: !1, columnWidth: "20%"
                }
            },
            dataLabels: {
                enabled: !1
            },
            stroke: {
                show: !0, width: 2, colors: ["transparent"]
            },
            series:[ {
                name: "Actual Time", data: [65, 80, 81, 56, 89]
            },{
                name: "Expected Time", data: [89, 80, 65, 59, 80]
            }], 
            legend: {
                show: 1
            },
            // colors:e,
			colors: ['#C0DBF4','#61A4E4'],
            xaxis: {
                categories:["1",
                "8 ",
                "15 ",
                "22 ",
                "29 "],
                axisBorder: {
                    show: !1
                }
            },
         
            fill: {
                opacity: 1
            },


           
    };

    var chart = new ApexCharts(document.querySelector("#timeline-chart"), options);

    chart.render();

  /* radar-chart */
  
  var options = {
          series: [{
          name: 'Series 1',
          data: [20, 30, 40, 80, 20, 80],
        }, {
          name: 'Series 2',
          data: [44, 76, 78, 13, 43, 10],
        }],
          chart: {
          height: 150,
          type: 'radar',
        
        },
       
        stroke: {
          width: 0
        },
        fill: {
          opacity: 0.1
        },
        markers: {
          size: 0
        },
        xaxis: {
          categories: ['2011', '2012', '2013', '2014', '2015', '2016']
        }
        };

        var chart = new ApexCharts(document.querySelector("#radar-chart"), options);
        chart.render();
  
  /* radar-chart end*/
 
  
var options = {
          series: [{
          name: 'Income',
          type: 'column',
          data: [1.4, 2, 2.5, 1.5, 2.5, 2.8, 3.8, 4.6]
        }, {
          name: 'Cashflow',
          type: 'column',
          data: [1.1, 3, 3.1, 4, 4.1, 4.9, 6.5, 8.5]
        }, {
          name: 'Revenue',
          type: 'line',
          data: [20, 29, 37, 36, 44, 45, 50, 58]
        }],
          chart: {
          height: 350,
          type: 'line',
          stacked: false
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          width: [1, 1, 4]
        },
     
        xaxis: {
          categories: [2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016],
        },
        yaxis: [
          {
            axisTicks: {
              show: true,
            },
            axisBorder: {
              show: true,
              color: '#F0F2F8'
            },
            labels: {
              style: {
                colors: '#F0F2F8',
              }
            },
            
            tooltip: {
              enabled: true
            }
          },
          {
            seriesName: 'Income',
            opposite: true,
            axisTicks: {
              show: true,
            },
            axisBorder: {
              show: true,
              color: '#F0F2F8'
            },
            labels: {
              style: {
                colors: '#F0F2F8',
              }
            },
           
          },
          
        ],
        tooltip: {
          fixed: {
            enabled: true,
            position: 'topLeft', // topRight, topLeft, bottomRight, bottomLeft
            offsetY: 30,
            offsetX: 60
          },
        },
        legend: {
          horizontalAlign: 'left',
          offsetX: 40
        }
        };

        var chart = new ApexCharts(document.querySelector("#linechat"), options);
        chart.render();
		
		
		
		 /* following chart */
  
		var options = {
          series: [{
          name: 'Net Profit',
          data: [44, 55, 57],
		  color: '#61A4E4'
        }, {
          name: 'Revenue',
          data: [76, 85, 101],
		  color: '#61A4E4',
		  
         
        }, 
		],
          chart: {
          type: 'bar',
          height: 150
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
          },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
        xaxis: {
          categories: ['', '', '', '', '', '', '', '', ''],
        },
      
        fill: {
          opacity: 1
        },
     
        };

        var chart = new ApexCharts(document.querySelector("#news"), options);
        chart.render();
    /* following chart end */
		
		
		
		/* Overall Score*/
		
		var options = {
          series: [70],
          chart: {
          height: 250,
          type: 'radialBar',
        },
        plotOptions: {
          radialBar: {
            hollow: {
              size: '70%',
            }
          },
        },
        labels: ['overall sentiment  '],
        };

        var chart = new ApexCharts(document.querySelector("#overallscore"), options);
        chart.render();
		
		
		
		
		
		/*Linechart*/
		
		var options = {
          series: [{
            name: "Desktops",
            data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
        }],
          chart: {
          height: 215,
          type: 'line',
          zoom: {
            enabled: false
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'straight'
        },
        /*title: {
          text: 'Product Trends by Month',
          align: 'left'
        },*/
        grid: {
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
          },
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
        }
        };

        var chart = new ApexCharts(document.querySelector("#Linechart"), options);
        chart.render();
		
		