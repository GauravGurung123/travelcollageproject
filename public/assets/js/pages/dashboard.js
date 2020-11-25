//[Dashboard Javascript]

//Project:	NeoX Admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';

  window.Apex = {
  dataLabels: {
    enabled: false
  }
};

var spark1 = {
  chart: {
    id: 'sparkline1',
    type: 'line',
    height: 140,
    sparkline: {
      enabled: true
    },
    group: 'sparklines'
  },
  series: [{
    name: 'purple',
    data: [25, 66, 41, 59, 25, 44, 12, 36, 9, 21]
  }],
  stroke: {
    curve: 'smooth'
  },
  markers: {
    size: 0
  },
  tooltip: {
	theme: 'dark',
    fixed: {
      enabled: true,
      position: 'right',
	  color: '#000000'
    },
    x: {
      show: false
    }
  },
  colors: ['#ffffff']
};

var spark2 = {
  chart: {
    id: 'sparkline2',
    type: 'line',
    height: 140,
    sparkline: {
      enabled: true
    },
    group: 'sparklines'
  },
  series: [{
    name: 'Invoices',
    data: [12, 14, 2, 47, 32, 44, 14, 55, 41, 69]
  }],
  stroke: {
    curve: 'smooth'
  },
  markers: {
    size: 0
  },
  tooltip: {
	theme: 'dark',
    fixed: {
      enabled: true,
      position: 'right'
    },
    x: {
      show: false
    }
  },
  colors: ['#ffffff']
}

var spark3 = {
  chart: {
    id: 'sparkline3',
    type: 'line',
    height: 140,
    sparkline: {
      enabled: true
    },
    group: 'sparklines'
  },
  series: [{
    name: 'Article',
    data: [47, 45, 74, 32, 56, 31, 44, 33, 45, 19]
  }],
  stroke: {
    curve: 'smooth'
  },
  markers: {
    size: 0
  },
  tooltip: {
	theme: 'dark',
    fixed: {
      enabled: true,
      position: 'right'
    },
    x: {
      show: false
    }
  },
  colors: ['#ffffff'],
  xaxis: {
    crosshairs: {
      width: 1
    },
  }
}

var spark4 = {
  chart: {
    id: 'sparkline4',
    type: 'line',
    height: 140,
    sparkline: {
      enabled: true
    },
    group: 'sparklines'
  },
  series: [{
    name: 'Income',
    data: [15, 75, 47, 65, 14, 32, 19, 54, 44, 61]
  }],
  stroke: {
    curve: 'smooth'
  },
  markers: {
    size: 0
  },
  tooltip: {
	theme: 'dark',
    fixed: {
      enabled: true,
      position: 'right'
    },
    x: {
      show: false
    }
  },
  colors: ['#ffffff'],
  xaxis: {
    crosshairs: {
      width: 1
    },
  }
}
	
	
new ApexCharts(document.querySelector("#spark1"), spark1).render();
new ApexCharts(document.querySelector("#spark2"), spark2).render();
new ApexCharts(document.querySelector("#spark3"), spark3).render();
new ApexCharts(document.querySelector("#spark4"), spark4).render();

	
var optionsBar = {
  chart: {
    type: 'bar',
    height: 350,
    width: '100%',
    stacked: true,
    foreColor: '#999'
  },
  plotOptions: {
    bar: {
      dataLabels: {
        enabled: false
      },
      columnWidth: '75%',
      endingShape: 'rounded'
    }
  },
  colors: ["#2a93d5", '#F3F2FC'],
  series: [{
    name: "Sessions",
    data: [20, 16, 24, 28, 26, 22, 15, 5, 14, 16, 22, 29, 24, 19, 15, 10, 11, 15, 19, 23],
  }, {
    name: "Views",
    data: [20, 16, 24, 28, 26, 22, 15, 5, 14, 16, 22, 29, 24, 19, 15, 10, 11, 15, 19, 23],
  }],
  labels: [15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 1, 2, 3, 4],
  xaxis: {
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false
    },
    crosshairs: {
      show: false
    },
    labels: {
      show: false,
      style: {
        fontSize: '14px'
      }
    },
  },
  grid: {
    xaxis: {
      lines: {
        show: false
      },
    },
    yaxis: {
      lines: {
        show: false
      },
    }
  },
  yaxis: {
    axisBorder: {
      show: false
    },
    labels: {
      show: false
    },
  },
  legend: {
    show: false
  },
  tooltip: {
    shared: true
  }

}

var chartBar = new ApexCharts(document.querySelector('#bar'), optionsBar);
chartBar.render();



var optionsArea = {
  chart: {
    height: 349,
    type: 'area',
    background: '#fff',
    stacked: true,
    offsetY: 39,
    zoom: {
      enabled: false
    }
  },
  plotOptions: {
    line: {
      dataLabels: {
        enabled: false
      }
    }
  },
  stroke: {
    curve: 'straight'
  },
  colors: ["#2a93d5", '#fcc525'],
  series: [{
      name: "Views",
      data: [15, 26, 20, 33, 27, 43, 17, 26, 19]
    },
    {
      name: "Clicks",
      data: [33, 21, 42, 19, 32, 25, 36, 29, 49]
    }
  ],
  fill: {
    gradient: {
      enabled: true,
      inverseColors: false,
      shade: 'light',
      type: "vertical",
      opacityFrom: 0.9,
      opacityTo: 0.6,
      stops: [0, 100, 100, 100]
    }
  },
  markers: {
    size: 0,
    style: 'hollow',
    strokeWidth: 8,
    strokeColor: "#fff",
    strokeOpacity: 0.25,
  },
  grid: {
    show: false,
    padding: {
      left: 0,
      right: 0
    }
  },
  labels: ['01/15/2002', '01/16/2002', '01/17/2002', '01/18/2002', '01/19/2002', '01/20/2002', '01/21/2002', '01/22/2002', '01/23/2002'],
  xaxis: {
    type: 'datetime',
    tooltip: {
      enabled: false
    }
  },
  legend: {
    show: false
  }
}

var chartArea = new ApexCharts(document.querySelector('#area-adwords'), optionsArea);
chartArea.render();

	
	
	// visitor - traffic resources
        var updatingChart1 = $("span.visitor1").peity("line", {
            fill: "rgba(70, 128, 254,0.2)",
            stroke: "rgb(70, 128, 254)"
        });
        var updatingChart2 = $("span.visitor2").peity("line", {
            fill: "rgba(252, 97, 128,0.2)",
            stroke: "rgb(252, 97, 128)"
        });
        var updatingChart3 = $("span.visitor3").peity("line", {
            fill: "rgba(147, 190, 82,0.2)",
            stroke: "rgb(147, 190, 82)"
        });
        var updatingChart4 = $("span.visitor4").peity("line", {
            fill: "rgba(255, 182, 77,0.2)",
            stroke: "rgb(255, 182, 77)"
        });
        var updatingChart5 = $("span.visitor5").peity("line", {
            fill: "rgba(254, 138, 125,0.2)",
            stroke: "rgb(254, 138, 125)"
        });
	

}); // End of use strict

