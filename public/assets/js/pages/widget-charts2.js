//[widget charts Javascript]

//Project:	Unique Admin - Responsive Admin Template
//Primary use:   Used only for the  widget charts



$( document ).ready(function() {
    "use strict";
	
	var ctx = document.getElementById('chartBar1').getContext('2d');
	new Chart(ctx, {
	  type: 'bar',
	  data: {
		labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
		datasets: [{
		  label: '# of Votes',
		  data: [12, 39, 20, 10, 25, 18],
		  backgroundColor: '#27AAC8'
		}]
	  },
	  options: {
		legend: {
		  display: false,
			labels: {
			  display: false
			}
		},
		scales: {
		  yAxes: [{
			ticks: {
			  beginAtZero:true,
			  fontSize: 10,
			  max: 80
			}
		  }],
		  xAxes: [{
			ticks: {
			  beginAtZero:true,
			  fontSize: 11
			}
		  }]
		}
	  }
	});
	
	var ctx = document.getElementById('chartBar2').getContext('2d');
	new Chart(ctx, {
	  type: 'bar',
	  data: {
		labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
		datasets: [{
		  label: '# of Votes',
		  data: [12, 39, 20, 10, 25, 18],
		  backgroundColor: [
							  '#145388',
							  '#28a745',
							  '#2a93d5',
							  '#b69329',
							  '#dc3545'
							]
		}]
	  },
	  options: {
		legend: {
		  display: false,
			labels: {
			  display: false
			}
		},
		scales: {
		  yAxes: [{
			ticks: {
			  beginAtZero:true,
			  fontSize: 10,
			  max: 80
			}
		  }],
		  xAxes: [{
			ticks: {
			  beginAtZero:true,
			  fontSize: 11
			}
		  }]
		}
	  }
	});
	
	var ctx = document.getElementById('chartBar3').getContext('2d');
	new Chart(ctx, {
	  type: 'horizontalBar',
	  data: {
		labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
		datasets: [{
		  label: '# of Votes',
		  data: [12, 39, 20, 10, 25, 18],
		  backgroundColor: '#27AAC8'
		}]
	  },
	  options: {
		legend: {
		  display: false,
			labels: {
			  display: false
			}
		},
		scales: {
		  yAxes: [{
			ticks: {
			  beginAtZero:true,
			  fontSize: 10,
			  max: 80
			}
		  }],
		  xAxes: [{
			ticks: {
			  beginAtZero:true,
			  fontSize: 11
			}
		  }]
		}
	  }
	});
	
	var ctx = document.getElementById('chartBar4').getContext('2d');
	new Chart(ctx, {
	  type: 'horizontalBar',
	  data: {
		labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
		datasets: [{
		  label: '# of Votes',
		  data: [12, 39, 20, 10, 25, 18],
		  backgroundColor: [
							  '#145388',
							  '#28a745',
							  '#2a93d5',
							  '#b69329',
							  '#dc3545'
							]
		}]
	  },
	  options: {
		legend: {
		  display: false,
			labels: {
			  display: false
			}
		},
		scales: {
		  yAxes: [{
			ticks: {
			  beginAtZero:true,
			  fontSize: 10,
			  max: 80
			}
		  }],
		  xAxes: [{
			ticks: {
			  beginAtZero:true,
			  fontSize: 11
			}
		  }]
		}
	  }
	});
	
	
	/** STACKED BAR CHART **/
  var ctx7 = document.getElementById('chartStacked1');
  new Chart(ctx7, {
    type: 'bar',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        data: [10, 24, 20, 25, 35, 50],
        backgroundColor: '#145388',
        borderWidth: 1,
        fill: true
      },{
        data: [10, 24, 20, 25, 35, 50],
        backgroundColor: '#28a745',
        borderWidth: 1,
        fill: true
      },{
        data: [20, 30, 28, 33, 45, 65],
        backgroundColor: '#dc3545',
        borderWidth: 1,
        fill: true
      }]
    },
    options: {
      legend: {
        display: false,
          labels: {
            display: false
          }
      },
      scales: {
        yAxes: [{
          stacked: true
        }],
        xAxes: [{
          stacked: true
        }]
      }
    }
  });

  var ctx8 = document.getElementById('chartStacked2');
  new Chart(ctx8, {
    type: 'horizontalBar',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        data: [10, 24, 20, 25, 35, 50],
        backgroundColor: '#145388',
        borderWidth: 1,
        fill: true
      },{
        data: [10, 24, 20, 25, 35, 50],
        backgroundColor: '#28a745',
        borderWidth: 1,
        fill: true
      },{
        data: [20, 30, 28, 33, 45, 65],
        backgroundColor: '#dc3545',
        borderWidth: 1,
        fill: true
      }]
    },
    options: {
      legend: {
        display: false,
          labels: {
            display: false
          }
      },
      scales: {
        yAxes: [{
          stacked: true
        }],
        xAxes: [{
          stacked: true
        }]
      }
    }
  });
	
/* LINE CHART */
  var ctx3 = document.getElementById('chartLine1');
  var myChart3 = new Chart(ctx3, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        label: '# of Votes',
        data: [12, 39, 20, 10, 25, 18],
        borderColor: '#dc3545',
        borderWidth: 1,
        fill: false
      }]
    },
    options: {
      legend: {
        display: false,
          labels: {
            display: false
          }
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true,
            fontSize: 10,
            max: 80
          }
        }],
        xAxes: [{
          ticks: {
            beginAtZero:true,
            fontSize: 11
          }
        }]
      }
    }
  });

  var ctx4 = document.getElementById('chartLine2');
  var myChart4 = new Chart(ctx4, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        data: [12, 39, 20, 10, 20, 18],
        borderColor: '#dc3545',
        borderWidth: 1,
        fill: false
      },{
        data: [30, 50, 28, 23, 25, 28],
        borderColor: '#145388',
        borderWidth: 1,
        fill: false
      }]
    },
    options: {
      legend: {
        display: false,
          labels: {
            display: false
          }
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true,
            fontSize: 10,
            max: 80
          }
        }],
        xAxes: [{
          ticks: {
            beginAtZero:true,
            fontSize: 11
          }
        }]
      }
    }
  });
	
 /** AREA CHART **/
  var ctx5 = document.getElementById('chartArea1');
  var myChart5 = new Chart(ctx5, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        data: [12, 39, 20, 10, 25, 18],
        backgroundColor: '#dc3545', //rgba(240, 113, 36, 0.4)
        fill: true,
        borderWidth: 0,
        borderColor: '#fff'
      }]
    },
    options: {
      legend: {
        display: false,
          labels: {
            display: false
          }
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true,
            fontSize: 10,
            max: 80
          }
        }],
        xAxes: [{
          ticks: {
            beginAtZero:true,
            fontSize: 11
          }
        }]
      }
    }
  });

  var ctx6 = document.getElementById('chartArea2');
  new Chart(ctx6, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        data: [10, 24, 20, 25, 35, 50],
        backgroundColor: '#dc3545',
        borderWidth: 1,
        fill: true
      },{
        data: [20, 30, 28, 33, 45, 65],
        backgroundColor: '#145388',
        borderWidth: 1,
        fill: true
      }]
    },
    options: {
      legend: {
        display: false,
          labels: {
            display: false
          }
      },
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true,
            fontSize: 10,
            max: 80
          }
        }],
        xAxes: [{
          ticks: {
            beginAtZero:true,
            fontSize: 11
          }
        }]
      }
    }
  });
	
/** SPECIFIC GRID LINE COLOR **/
  var ctx9 = document.getElementById('chartArea3');
  new Chart(ctx9, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        data: [10, 24, 20, 25, 35, 50],
        backgroundColor: 'rgba(46,87,115,.4)',
        borderWidth: 1,
        fill: true
      },{
        data: [20, 30, 28, 33, 45, 65],
        backgroundColor: 'rgba(41,176,208,.4)',
        borderWidth: 1,
        fill: true
      }]
    },
    options: {
      legend: {
        display: false,
          labels: {
            display: false
          }
      },
      scales: {
        yAxes: [{
          gridLines: {
            drawBorder: false,
            color: ['', '', '#cc0000']
          },
          ticks: {
            beginAtZero:true,
            fontSize: 10,
            max: 80
          }
        }],
        xAxes: [{
          ticks: {
            beginAtZero:true,
            fontSize: 11
          }
        }]
      }
    }
  });

  var ctx10 = document.getElementById('chartArea4');
  new Chart(ctx10, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [{
        data: [10, 24, 20, 25, 35, 50],
        backgroundColor: 'rgba(46,87,115,.4)',
        borderWidth: 1,
        fill: true
      },{
        data: [20, 30, 28, 33, 45, 65],
        backgroundColor: 'rgba(41,176,208,.4)',
        borderWidth: 1,
        fill: true
      }]
    },
    options: {
      legend: {
        display: false,
          labels: {
            display: false
          }
      },
      scales: {
        yAxes: [{
          gridLines: {
            drawBorder: false,
            color: ['', '#cc0000', '#0ad013']
          },
          ticks: {
            beginAtZero:true,
            fontSize: 10,
            max: 80
          }
        }],
        xAxes: [{
          ticks: {
            beginAtZero:true,
            fontSize: 11
          }
        }]
      }
    }
  });
	
	/** PIE CHART **/
  var randomScalingFactor = function() {
    return Math.round(Math.random() * 100);
  };

  var datapie = {
    datasets: [{
      data: [
        randomScalingFactor(),
        randomScalingFactor(),
        randomScalingFactor(),
        randomScalingFactor(),
        randomScalingFactor(),
      ],
      backgroundColor: [
        '#145388',
        '#28a745',
        '#2a93d5',
        '#b69329',
        '#dc3545'
      ]
    }]
  };

  var optionpie = {
    responsive: true,
    legend: {
      display: false,
    },
    animation: {
      animateScale: true,
      animateRotate: true
    }
  };

  // For a doughnut chart
  var ctx6 = document.getElementById('chartPie');
  var myPieChart6 = new Chart(ctx6, {
    type: 'doughnut',
    data: datapie,
    options: optionpie
  });

  // For a pie chart
  var ctx7 = document.getElementById('chartDonut');
  var myPieChart7 = new Chart(ctx7, {
    type: 'pie',
    data: datapie,
    options: optionpie
  });
	
	
}); // End of use strict
