(function ($, root, undefined) {

	$(function () {

		// // Calculation Functions
		//
		// //find gross property premium
		// function grossProPre() {
		// 	var dwellVal = parseInt($("#ninja_forms_field_288").val(), 10);
		// 	var rate = $("#ninja_forms_field_286").val();
		// 	var gpp = (dwellVal*rate)/100;
		// 	$("#ninja_forms_field_292").val(gpp.toFixed(2));
		// 	console.log($("#ninja_forms_field_292").val());
		// };
		//
		// if(document.getElementById("ninja_forms_form_9_cont")) {
		// 	//capture current year
		// 	var date = new Date();
		// 	var curYear = date.getFullYear();
		// 	$("#ninja_forms_field_293").val(curYear);
		//
		// 	//hide calculation fields
		// 	// $("#ninja_forms_field_297").hide();
		// 	// $("#ninja_forms_field_301").hide();
		// 	// $("#ninja_forms_field_305").hide();
		//
		// 	$("#ninja_forms_field_286").change(function () {
		// 		grossProPre();
		// 	});
		//
		// 	$("#ninja_forms_field_288").change(function ( ) {
		// 		grossProPre();
		// 	});
		//
		// };

		//Second Attempt Pure JS

		//Function List

		//Rate Type One
		function ratePartOne() {

			if ($("#ninja_forms_field_310").val() === "Tenant") {
				rateOne = "RNTN";
				console.log(rateOne);
			} else if ($("#ninja_forms_field_309").val() === "Homeowners" && $("#ninja_forms_field_310").val() === "Owner") {
				rateOne = "HOME";
				console.log(rateOne);
			} else if ($("#ninja_forms_field_309").val() === "Dwelling Fire" && $("#ninja_forms_field_310").val() === "Owner") {
				rateOne = "SECN";
				console.log(rateOne);
			}
		}
		//If Oregon
		function ifOregon() {
			if ($("#ninja_forms_field_312").val() >= 97000 && $("#ninja_forms_field_312").val() <= 97999) {
				oregon = "Oregon";
				console.log(oregon);
			} else {
				oregon = "NonOregon";
				console.log(oregon);
			}
		}

		//Find Year Difference
		function yearDifference(yearDiff) {
			var yearBuilt = $("#ninja_forms_field_315").val();
			var yearDiff = curYear - yearBuilt;
			console.log(yearDiff);
			return yearDiff;
		}

		function ratePartTwo() {
			if (oregon === "Oregon" && yearDiff <= 20) {
				rateTwo = "A1";
				console.log(rateTwo);
			} else if (yearDiff <= 20) {
				rateTwo = "A2";
				console.log(rateTwo);
			} else if (yearDiff <= 39) {
				rateTwo = "A3";
				console.log(rateTwo);
			} else if (yearDiff <= 49) {
				rateTwo = "B1";
				console.log(rateTwo);
			} else if (yearDiff <= 59) {
				rateTwo = "B2";
				console.log(rateTwo);
			} else if (yearDiff <= 69) {
				rateTwo = "C1";
				console.log(rateTwo);
			} else {
				rateTwo = "C2";
				console.log(rateTwo);
			}
		}

		//Actual Work
		if(document.getElementById("ninja_forms_form_10_cont")) {
			var date = new Date();
			var curYear = date.getFullYear();

			var rateOne;
			var rateTwo;
			var oregon;
			var yearDiff;

			$("#ninja_forms_field_309").change(function () {
				ratePartOne();
			});

			$("#ninja_forms_field_310").change(function () {
				ratePartOne();
			});

			$("#ninja_forms_field_312").change(function () {
				ifOregon();
				ratePartTwo();
			});

			$("#ninja_forms_field_315").change(function () {
				yearDifference(yearDiff);
				console.log(yearDiff);
				ratePartTwo();
			});


		}


	});

})(jQuery, this);
