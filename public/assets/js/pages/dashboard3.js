//[Dashboard Javascript]

//Project:	NeoX Admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
	
	
var optionsArea = {
  chart: {
    height: 415,
    type: 'area',
    zoom: {
      enabled: false
    },
  },
  stroke: {
    curve: 'smooth'
  },
  colors: ['#2a93d5','#dc3545','#b69329'],
  series: [
    {
      name: "Blog",
      data: [{
        x: 0, 
        y: 0
      }, {
        x: 4,
        y: 5
      }, {
        x: 5,
        y: 3
      }, {
        x: 9,
        y: 8
      }, {
        x: 14,
        y: 4
      }, {
        x: 18,
        y: 5
      }, {
        x: 25,
        y: 0
      }]
    },
    {
      name: "Social Media",
      data: [{
        x: 0, 
        y: 0
      }, {
        x: 4,
        y: 6
      }, {
        x: 5,
        y: 4
      }, {
        x: 14,
        y: 8
      }, {
        x: 18,
        y: 5.5
      }, {
        x: 21,
        y: 6
      }, {
        x: 25,
        y: 0
      }]
    },
    {
      name: "External",
      data: [{
        x: 0, 
        y: 0
      }, {
        x: 2,
        y: 5
      }, {
        x: 5,
        y: 4
      }, {
        x: 10,
        y: 11
      }, {
        x: 14,
        y: 4
      }, {
        x: 18,
        y: 8
      }, {
        x: 25,
        y: 0
      }]
    }
  ],
  fill: {
    opacity: 0.5,
    gradient: {
      enabled: true,
    }
  },
  markers: {
    size: 0,
    style: 'hollow',
    hover: {
      opacity: 0,
    }
  },
  tooltip: {
    intersect: false,
    shared: false,
  },
  xaxis: {
    tooltip: {
      enabled: false
    },
    labels: {
      show: false
    },
    axisTicks: {
      show: false
    }
  },
  yaxis: {
    tickAmount: 4,
    max: 12,
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false
    },
    labels: {
      style: {
        color: '#78909c'
      }
    }
  },
  legend: {
    show: false
  }
};

var chartArea = new ApexCharts(document.querySelector('#area'), optionsArea);
chartArea.render();	
	
	
	var colorPalette = ['#2a93d5','#dc3545']
	var optionsBar = {
  chart: {
    type: 'bar',
    height: 410,
    width: '100%',
    stacked: true,
  },
  plotOptions: {
    bar: {
      columnWidth: '45%',
    }
  },
  colors: colorPalette,
  series: [{
    name: "Clothing",
    data: [42, 52, 16, 55, 59, 51, 45, 32, 26, 33, 44, 51, 42, 56],
  }, {
    name: "Food Products",
    data: [6, 12, 4, 7, 5, 3, 6, 4, 3, 3, 5, 6, 7, 4],
  }],
  labels: [10,11,12,13,14,15,16,17,18,19,20,21,22,23],
  xaxis: {
    labels: {
      show: false
    },
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false
    },
  },
  yaxis: {
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false
    },
    labels: {
      style: {
        color: '#78909c'
      }
    }
  },

}

var chartBar = new ApexCharts(document.querySelector('#bar'), optionsBar);
chartBar.render();


	

}); // End of use strict

