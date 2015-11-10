(function(w, d, $, ko) {
	"use strict";

	var x = w.RMS.XHR,
		_base = w.RMS.baseUrl,
		statisticsVM = {
			genderPopPerCollege: ko.observable(),
		};

	function PerCollege(data) {
		var _labels = [],
			_datas = [],
			_datasets = [];

		ko.utils.arrayMap(data, function(d) {
			_labels.push(d.name);
			_datas.push(d.pop);
		});
		var obj = {
			labels: _labels,
			datasets: [{
				label: "Female",
				fillColor: "#333",
				strokeColor: "#000",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data: _datas
			}]
		}


		return obj;
	}

	function __barChart(_data) {
		var data = _data;
		var _labels = [],
			_datas = {
				male_pop: [],
				female_pop: [],
				gay_pop: [],
				lesbian_pop: [],
				bisexual_pop: [],
				transgender_pop: [],

			},
			_datasets = [];
		// ko.utils.arrayForEach( _data, function(a,b) {
		// 	console.log(a,b);	
		// });

		var male_pop = ko.utils.arrayMap(_data, function(d) {
			_labels.push(d.name);
			_datas.male_pop.push(d.male_pop);
			_datas.female_pop.push(d.female_pop);
			_datas.gay_pop.push(d.gay_pop);
			_datas.lesbian_pop.push(d.lesbian_pop);
			_datas.bisexual_pop.push(d.bisexual_pop);
			_datas.transgender_pop.push(d.transgender_pop);
		});
		var obj = {
			labels: _labels,
			datasets: [{
				label: "Female",
				fillColor: "#E91E63",
				strokeColor: "#333",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data: _datas.female_pop
			}, {
				label: "Male",
				fillColor: "#2196F3",
				strokeColor: "#333",
				highlightFill: "rgba(151,187,205,0.75)",
				highlightStroke: "rgba(151,187,205,1)",
				data: _datas.male_pop
			}, {
				label: "Gay",
				fillColor: "#D8FF00",
				strokeColor: "#333",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data: _datas.gay_pop
			}, {
				label: "Lesbian",
				fillColor: "#DDD",
				strokeColor: "#333",
				highlightFill: "rgba(151,187,205,0.75)",
				highlightStroke: "rgba(151,187,205,1)",
				data: _datas.lesbian_pop
			}, {
				label: "Bisexual",
				fillColor: "#9100FF",
				strokeColor: "#333",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data: _datas.bisexual_pop
			}, {
				label: "Transgender",
				fillColor: "#FFEB00",
				strokeColor: "#333",
				highlightFill: "rgba(151,187,205,0.75)",
				highlightStroke: "rgba(151,187,205,1)",
				data: _datas.transgender_pop
			}]
		};
		return obj;

	}

	function bar(label, d) {
		var obj = {
			labels: label,
			datasets: [{
				label: "Female",
				fillColor: "#E91E63",
				strokeColor: "#333",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data: d.female_pop
			}, {
				label: "Male",
				fillColor: "#2196F3",
				strokeColor: "#333",
				highlightFill: "rgba(151,187,205,0.75)",
				highlightStroke: "rgba(151,187,205,1)",
				data: d.male_pop
			}, {
				label: "Gay",
				fillColor: "#D8FF00",
				strokeColor: "#333",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data: d.gay_pop
			}, {
				label: "Lesbian",
				fillColor: "#DDD",
				strokeColor: "#333",
				highlightFill: "rgba(151,187,205,0.75)",
				highlightStroke: "rgba(151,187,205,1)",
				data: d.lesbian_pop
			}, {
				label: "Bisexual",
				fillColor: "#9100FF",
				strokeColor: "#333",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data: d.bisexual_pop
			}, {
				label: "Transgender",
				fillColor: "#FFEB00",
				strokeColor: "#333",
				highlightFill: "rgba(151,187,205,0.75)",
				highlightStroke: "rgba(151,187,205,1)",
				data: d.transgender_pop
			}]
		};
		return obj;
	}

	function pie(label, d) {
		var obj = [{
			value: parseInt(d[0]),
			color: "#2196F3",
			highlight: "#5AD3D1",
			label: label[0]
		}, {
			value: parseInt(d[1]),
			color: "#E91E63",
			highlight: "#FF5A5E",
			label: label[1]
		}, {
			value: parseInt(d[2]),
			color: "#D8FF00",
			highlight: "#5AD3D1",
			label: label[2]
		}, {
			value: parseInt(d[3]),
			color: "#DDD",
			highlight: "#FF5A5E",
			label: label[3]
		}, {
			value: parseInt(d[4]),
			color: "#9100FF",
			highlight: "#5AD3D1",
			label: label[4]
		}, {
			value: parseInt(d[5]),
			color: "#FFEB00",
			highlight: "#FF5A5E",
			label: label[5]
		}, ];

		return obj;
	}

	function pie2(label, d) {
		var obj = [{
			value: parseInt(d[0]),
			color: "#2196F3",
			highlight: "#5AD3D1",
			label: label[0]
		}, {
			value: parseInt(d[1]),
			color: "#E91E63",
			highlight: "#FF5A5E",
			label: label[1]
		}, {
			value: parseInt(d[2]),
			color: "#000",
			highlight: "#DDD",
			label: label[2]
		}, ];

		return obj;
	}


	x.get(_base + "ajax-source/statistics").done(function(response) {
		var genderPerCollegesData = response.genderPerColleges,
			genderWholeData = response.genderWhole[0],
			byStatus = response.byStatus[0],
			perCollegeData = response.perCollege,
			perScholarshipData = response.perScholarship;
		// PerCollege(perCollege);
		// __barChart(genderPerCollegesData);
		var collegeName = ko.utils.arrayMap(genderPerCollegesData, function(g) {
			return g.name;
		});
		var male = ko.utils.arrayMap(genderPerCollegesData, function(g) {
			return g.male_pop;
		});

		var female = ko.utils.arrayMap(genderPerCollegesData, function(g) {
			return g.female_pop;
		});
		var genderPerCollegeCTX = d.getElementById("genderPerCollege").getContext("2d"),
			genderWholeCTX = d.getElementById("genderWhole").getContext("2d"),
			byStatusCTX = d.getElementById("byStatus").getContext("2d"),
			perCollegeCTX = d.getElementById("popPerCollege").getContext("2d"),
			perScholarshipCTX = d.getElementById("popPerScholarship").getContext("2d");



		var genderPerCollegeChart = new Chart(genderPerCollegeCTX).Bar(new __barChart(genderPerCollegesData)),
			perCollegeChart = new Chart(perCollegeCTX).Bar(new PerCollege(perCollegeData)),
			perScholarshipChart = new Chart(perScholarshipCTX).Bar(new PerCollege(perScholarshipData)),
			genderWholeChart = new Chart(genderWholeCTX).Pie(new pie(['Male', 'Female', 'Gay', 'Lesbian', 'Bisexual', 'Transgender'], [genderWholeData.male_pop,
				genderWholeData.female_pop, genderWholeData.gay_pop, genderWholeData.lesbian_pop, genderWholeData.bisexual_pop, genderWholeData.transgender_pop
			])),

			byStatusChart = new Chart(byStatusCTX).Pie(new pie2(['Single', 'Married', 'Widow/Widower'], [byStatus.single, byStatus.married, byStatus.widow]));

		var l1 = genderPerCollegeChart.generateLegend(),
			l2 = genderWholeChart.generateLegend(),
			l3 = byStatusChart.generateLegend();

		$("#legend1").html(l1);
		$("#legend2").html(l2);
		$("#legend3").html(l3);

	});



	w.RMS.VM.statisticsVM = statisticsVM;
}(window, document, jQuery, ko));