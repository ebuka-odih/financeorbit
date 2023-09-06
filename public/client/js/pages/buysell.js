//[Dashboard Javascript]

//Project:	Master Admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
	window.Apex = {
      stroke: {
        width: 3
      },
      markers: {
        size: 0
      },
      tooltip: {
        fixed: {
          enabled: true,
        }
      }
    };
    
    var randomizeArray = function (arg) {
      var array = arg.slice();
      var currentIndex = array.length,
        temporaryValue, randomIndex;

      while (0 !== currentIndex) {

        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;

        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
      }

      return array;
    }

    // data for the sparklines that appear below header area
    var sparklineData = [47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46];

    var spark1 = {
      chart: {
        type: 'area',
        height: 120,
		foreColor: '#8a99b5',
        sparkline: {
          enabled: true
        },
      },
      stroke: {
        curve: 'smooth'
      },
      fill: {
        opacity: 0,
        type: 'solid',
		gradient: {
		  gradientToColors: ['#689f38']
		},
      },
      series: [{
        data: randomizeArray(sparklineData)
      }],
		labels: [...Array(24).keys()].map(n => `2018-09-0${n+1}`),
      yaxis: {
        min: 0
      },
	  xaxis: {
		type: 'datetime',
	  },
      colors: ['#e2bb33'],
		tooltip: {
			theme: 'dark'
  		},
    }
	
	var spark2 = {
      chart: {
        type: 'area',
        height: 120,
        sparkline: {
          enabled: true
        },
      },
      stroke: {
        curve: 'smooth'
      },
      fill: {
        opacity: 0,
        type: 'solid',
		gradient: {
		  gradientToColors: ['#ff8f00', '#ff8f00']
		},
      },
      series: [{
        data: randomizeArray(sparklineData)
      }],
	  labels: [...Array(24).keys()].map(n => `2018-09-0${n+1}`),
      yaxis: {
        min: 0
      },
	  xaxis: {
		type: 'datetime',
	  },
      colors: ['#ff8f00'],
		tooltip: {
			theme: 'dark'
  		},
    };
	
	 var spark3 = {
      chart: {
        type: 'area',
        height: 120,
        sparkline: {
          enabled: true
        },
      },
      stroke: {
        curve: 'smooth'
      },
      fill: {
        opacity: 0,
        type: 'solid',
		gradient: {
		  gradientToColors: ['#ee1044', '#ee1044']
		},
      },
      series: [{
        data: randomizeArray(sparklineData)
      }],
	  labels: [...Array(24).keys()].map(n => `2018-09-0${n+1}`),
	  xaxis: {
		type: 'datetime',
	  },
      yaxis: {
        min: 0
      },
      colors: ['#ee1044'],
		tooltip: {
			theme: 'dark'
  		},
    };
	
	
	
	var spark1 = new ApexCharts(document.querySelector("#spark1"), spark1);
    spark1.render();
	var spark2 = new ApexCharts(document.querySelector("#spark2"), spark2);
    spark2.render();
    var spark3 = new ApexCharts(document.querySelector("#spark3"), spark3);
    spark3.render();
	
}); // End of use strict
