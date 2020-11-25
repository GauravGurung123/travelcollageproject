//[custom Javascript]

//Project:	NeoX Admin - Responsive Admin Template
//Primary use:	NeoX Admin - Responsive Admin Template

//should be included in all pages. It controls some layout



// Fullscreen
$(function () {
	'use strict'
		
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
		
	// Composite line charts, the second using values supplied via javascript
    		
		$("#linechart").sparkline([1,4,3,7,6,4,8,9,6,8,12], {
			type: 'line',
			width: '100',
			height: '38',
			lineColor: '#145388',
			fillColor: 'rgba(255, 255, 255, 0)',
			lineWidth: 2,
			minSpotColor: '#0fc491',
			maxSpotColor: '#0fc491',
		});
		
		$("#barchart").sparkline([1,4,3,7,6,4,8,9,6,8,12], {
			type: 'bar',
			height: '38',
			barWidth: 6,
			barSpacing: 4,
			barColor: '#145388',
		});
		$("#discretechart").sparkline([1,4,3,7,6,4,8,9,6,8,12], {
			type: 'discrete',
			width: '50',
			height: '38',
			lineColor: '#145388',
		});
		
		$("#linearea").sparkline([1,3,5,4,6,8,7,9,7,8,10,16,14,10], {
			type: 'line',
			width: '100%',
			height: '80',
			lineColor: '#145388',
			fillColor: '#145388',
			lineWidth: 2,
		});
		
		$("#baralc").sparkline([2,4,3,7,6,4,8,9,6,8,12,6,7,9,4,8,5,7,9,13,10,9,9,8], {
			type: 'bar',
			height: '80',
			barWidth: 6,
			barSpacing: 4,
			barColor: '#145388',
		});
		
		$("#lineIncrease").sparkline([1,8,6,5,6,8,7,9,7,8,10,16,14,10], {
			type: 'line',
			width: '100%',
			height: '140',
			lineWidth: 2,
			lineColor: '#ffffff',
			fillColor: "rgba(255, 255, 255, 0)",
			spotColor: '#ffffff',
			minSpotColor: '#ffffff',
			maxSpotColor: '#ffffff',
			spotRadius: 3,
		});
		
		$("#lineToday").sparkline([1,4,3,7,6,4,8,9,6,8,12], {
			type: 'line',
			width: '100%',
			height: '70',
			lineColor: '#ffffff',
			fillColor: 'rgba(255, 255, 255, 0)',
			lineWidth: 2,
			spotRadius: 3,
		});
		
		$("#baranl").sparkline([1,4,3,7,6,4,8,9,6,8,12,6,7,9,4,8,5,7,9,13,10,9,9,8], {
			type: 'bar',
			height: '70',
			barColor: '#dc3545',
			barWidth: 7,
    		barSpacing: 5,
		});
		
		$("#lineTo").sparkline([1,4,3,7,6,4,8,9,6,8,12], {
			type: 'line',
			width: '100%',
			height: '70',
			lineColor: '#ffffff',
			fillColor: 'rgba(255, 255, 255, 0)',
			lineWidth: 3,
			spotColor: '#ffffff',
			highlightSpotColor: '#ffffff',
			highlightLineColor: '#ffffff',
			spotRadius: 3,
		});
		
		// donut chart
		$('.donut').peity('donut');
		
		// bar chart
		$(".bar").peity("bar");	
}); // End of use strict
		
// easypie chart
	$(function() {
		'use strict'
		$('.easypie').easyPieChart({
			easing: 'easeOutBounce',
			onStep: function(from, to, percent) {
				$(this.el).find('.percent').text(Math.round(percent));
			}
		});
		var chart = window.chart = $('.easypie').data('easyPieChart');
		$('.js_update').on('click', function() {
			chart.update(Math.random()*200-100);
		});
	});// End of use strict