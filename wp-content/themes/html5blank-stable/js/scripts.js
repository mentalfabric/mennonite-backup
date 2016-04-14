(function ($, root, undefined) {

	$(function () {

		//Function List

		//Rate Part One
		function ratePartOne(quote) {

			if ($("#ninja_forms_field_310").val() === "Tenant") {
				return quote.rateOne = "RNTN";

			} else if ($("#ninja_forms_field_309").val() === "Homeowners" && $("#ninja_forms_field_310").val() === "Owner") {
				return quote.rateOne = "HOME";

			} else if ($("#ninja_forms_field_309").val() === "Dwelling Fire" && $("#ninja_forms_field_310").val() === "Owner") {
				return quote.rateOne = "SECN";

			}
		}
		//If Oregon
		function ifOregon(quote) {
			if ($("#ninja_forms_field_312").val() >= 97000 && $("#ninja_forms_field_312").val() <= 97999) {
				return quote.oregon = "Oregon";

			} else {
				return quote.oregon = "NonOregon";

			}
		}

		//Find Year Difference
		function yearDifference(quote) {
			var yearBuilt = $("#ninja_forms_field_315").val();
			return quote.yearDiff = curYear - yearBuilt;

		}

		//Rate Part Two
		function ratePartTwo(quote) {
			if (quote.oregon === "Oregon" && quote.yearDiff <= 20) {
				return quote.rateTwo = "A1";

			} else if (quote.yearDiff <= 20) {
				return quote.rateTwo = "A2";

			} else if (quote.yearDiff <= 39) {
				return quote.rateTwo = "A3";

			} else if (quote.yearDiff <= 49) {
				return quote.rateTwo = "B1";

			} else if (quote.yearDiff <= 59) {
				return quote.rateTwo = "B2";

			} else if (quote.yearDiff <= 69) {
				return quote.rateTwo = "C1";

			} else {
				return quote.rateTwo = "C2";
			}
		}

		//Find Rate Percent
		function ratePercent(quote) {
			if (quote.rateOne && quote.rateTwo) {

				if (quote.rateOne === "HOME") {
					switch(quote.rateTwo) {
						case "A1":
							return quote.rate = 0.18;
						case "A2":
							return quote.rate = 0.1878;
						case "A3":
							return quote.rate = 0.1963;
						case "B1":
							return quote.rate = 0.2258;
						case "B2":
							return quote.rate = 0.2484;
						case "C1":
							return quote.rate = 0.275;
						case "C2":
							return quote.rate = 0.3024;
					}
				} else if (quote.rateOne === "RNTN") {
					switch(quote.rateTwo) {
						case "A1":
							return quote.rate = 0.2116;
						case "A2":
							return quote.rate = 0.2166;
						case "A3":
							return quote.rate = 0.2217;
						case "B1":
							return quote.rate = 0.2698;
						case "B2":
							return quote.rate = 0.2834;
						case "C1":
							return quote.rate = 0.3296;
						case "C2":
							return quote.rate = 0.3542;
					}
				} else if (quote.rateOne === "SECN") {
					switch(quote.rateTwo) {
						case "A1":
							return quote.rate = 0.156;
						case "A2":
							return quote.rate = 0.1628;
						case "A3":
							return quote.rate = 0.1702;
						case "B1":
							return quote.rate = 0.2175;
						case "B2":
							return quote.rate = 0.2392;
						case "C1":
							return quote.rate = 0.2647;
						case "C2":
							return quote.rate = 0.2912;
					}
				}
			}
		}

		//Get Gross Property Premium
		function grossPropertyPremium(quote) {
			if (quote.rate) {
				var dwellVal = $("#ninja_forms_field_316").val();
				dwellVal = Number(dwellVal.replace(/[^0-9\.]+/g,""));
				return quote.grossPropPre = dwellVal*quote.rate/100;
			}
		}

		//Deductible Discount
		function dedDiscount(quote) {
			if (quote.grossPropPre) {
				if ($("#ninja_forms_field_317").val() === "$500") {
					return quote.dedDisc = quote.grossPropPre - (quote.grossPropPre * 0.125);
				} else if ($("#ninja_forms_field_317").val() === "$1000") {
					return quote.dedDisc = quote.grossPropPre - (quote.grossPropPre * 0.28);
				} else if ($("#ninja_forms_field_317").val() === "$2500") {
					return quote.dedDisc = quote.grossPropPre - (quote.grossPropPre * 0.35);
				}
			}
		}

		//New Home Discount
		function newHomeDiscount(quote) {
			if (quote.dedDisc) {
				if (quote.yearDiff < 5) {
					return quote.newHomeDisc = quote.dedDisc - (quote.grossPropPre * 0.075);
				} else if (quote.yearDiff < 10) {
					return quote.newHomeDisc = quote.dedDisc - (quote.grossPropPre * 0.05);
				} else {
					return quote.newHomeDisc = quote.dedDisc
				}
			}
		}

		//PC Surcharge
		function pcSurcharge(quote) {
			if (quote.newHomeDisc) {
				if ($("#ninja_forms_field_318").val() === "Yes") {
					return quote.pcSurch = quote.newHomeDisc;
				} else {
					return quote.pcSurch = quote.newHomeDisc + (quote.grossPropPre * 0.35);
				}
			}
		}

		//Exp Coverage
		function expCoverage(quote) {
			if(quote.pcSurch) {
				return quote.expCov = quote.pcSurch + 10;
			}
		}

		//Prop and Lia
		function propLiability(quote) {
			if(quote.expCov) {
				if ($("#ninja_forms_field_312").val() >= 90000 && $("#ninja_forms_field_312").val() <= 96999) {
					return quote.propLia = quote.expCov + 118;
				} else if ($("#ninja_forms_field_312").val() >= 97000 && $("#ninja_forms_field_312").val() <= 97999) {
					return quote.propLia = quote.expCov + 86;
				} else {
					return quote.propLia = quote.expCov + 96;
				}
			}
		}

		// Actual Work
		if(document.getElementById("ninja_forms_form_10")) {
			var date = new Date();
			var curYear = date.getFullYear();

			var quote = {
				rateOne: "",
				rateTwo: "",
				rate: "",
				oregon: "",
				yearDiff: "",
				grossPropPre: "",
				dedDisc: "",
				newHomeDisc: "",
				pcSurch: "",
				expCov: "",
				propLia: ""
			};

			$("#ninja_forms_field_309").change(function () {
				ratePartOne(quote);

				ratePercent(quote);
				grossPropertyPremium(quote);
				dedDiscount(quote);
				newHomeDiscount(quote);
				console.log(quote);
			});

			$("#ninja_forms_field_310").change(function () {
				ratePartOne(quote);

				ratePercent(quote);
				grossPropertyPremium(quote);
				dedDiscount(quote);
				newHomeDiscount(quote);
				console.log(quote);
			});

			$("#ninja_forms_field_312").change(function () {
				ifOregon(quote);

				ratePartTwo(quote);
				ratePercent(quote);
				grossPropertyPremium(quote);
				dedDiscount(quote);
				newHomeDiscount(quote);
				console.log(quote);
			});

			$("#ninja_forms_field_315").change(function () {
				yearDifference(quote);

				ratePartTwo(quote);
				ratePercent(quote);
				grossPropertyPremium(quote);
				dedDiscount(quote);
				newHomeDiscount(quote);
				console.log(quote);
			});

			$("#ninja_forms_field_316").change(function () {
				grossPropertyPremium(quote);

				dedDiscount(quote);
				newHomeDiscount(quote);
				console.log(quote);
			});

			$("#ninja_forms_field_317").change(function () {
				dedDiscount(quote);

				newHomeDiscount(quote);
				console.log(quote);
			});

			$("#ninja_forms_field_318").change(function () {
				pcSurcharge(quote);

				expCoverage(quote);
				propLiability(quote);
				console.log(quote);
			});


		}


	});

})(jQuery, this);
