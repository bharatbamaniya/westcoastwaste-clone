var locations = [
	{
		Suburb: "Barragup",
		Postcode: 6210,
		Depo: "Pinjara",
		Distance: 12.2,
	},
	{
		Suburb: "Barragup",
		Postcode: 6210,
		Depo: "Pinjara",
		Distance: 52.2,
	},
	{
		Suburb: "Birchmont",
		Postcode: 6214,
		Depo: "Pinjara",
		Distance: 20.6,
	},
	{
		Suburb: "Blythewood",
		Postcode: 6208,
		Depo: "Pinjara",
		Distance: 8.2,
	},
	{
		Suburb: "Codanup",
		Postcode: 6210,
		Depo: "Pinjara",
		Distance: 17.1,
	},
	{
		Suburb: "Coolup",
		Postcode: 6214,
		Depo: "Pinjara",
		Distance: 16.3,
	},
	{
		Suburb: "Duldey Park",
		Postcode: 6209,
		Depo: "Pinjara",
		Distance: 18.2,
	},
	{
		Suburb: "Barragup",
		Postcode: 6210,
		Depo: "Australind",
		Distance: 12.2,
	},
	{
		Suburb: "Birchmont",
		Postcode: 6214,
		Depo: "Australind",
		Distance: 20.6,
	},
	{
		Suburb: "Blythewood",
		Postcode: 6208,
		Depo: "Australind",
		Distance: 8.2,
	},
	{
		Suburb: "Codanup",
		Postcode: 6210,
		Depo: "Australind",
		Distance: 17.1,
	},
	{
		Suburb: "Coolup",
		Postcode: 6214,
		Depo: "Australind",
		Distance: 16.3,
	},
	{
		Suburb: "Duldey Park",
		Postcode: 6209,
		Depo: "Australind",
		Distance: 18.2,
	},
	{
		Suburb: "Barragup",
		Postcode: 6210,
		Depo: "Vesse",
		Distance: 12.2,
	},
	{
		Suburb: "Birchmont",
		Postcode: 6214,
		Depo: "Vesse",
		Distance: 20.6,
	},
	{
		Suburb: "Blythewood",
		Postcode: 6208,
		Depo: "Vesse",
		Distance: 8.2,
	},
	{
		Suburb: "Codanup",
		Postcode: 6210,
		Depo: "Vesse",
		Distance: 17.1,
	},
	{
		Suburb: "Coolup",
		Postcode: 6214,
		Depo: "Vesse",
		Distance: 16.3,
	},
	{
		Suburb: "Duldey Park",
		Postcode: 6209,
		Depo: "Vesse",
		Distance: 18.2,
	},
];

jQuery(document).ready(function ($) {
	$(".variations_form").on("woocommerce_variation_select_change", function () {
		$("#single-product-placeholder").show(0);
	});

	$(".single_variation_wrap").on("show_variation", function (event, variation) {
		$("#single-product-placeholder").hide(0);
	});

	// example_singleproductkeyup();
});

function example_singleproductkeyup() {
	var singleproductautocompletelist = "";
	locations.forEach(function (location) {
		singleproductautocompletelist += "<li>";
		singleproductautocompletelist +=
			location["Suburb"] + " - " + location["Postcode"];
		singleproductautocompletelist += "</li>";
	});
	jQuery("#header-product-autocomplete-list").html(
		singleproductautocompletelist
	);
}

function singleProductKeyUp(obj) {
	var val = jQuery(obj).val();
	var searchResults = locations
		.filter(function (location) {
			if (location["Suburb"].toLowerCase().indexOf(val.toLowerCase()) !== -1) {
				return true;
			}
			if (location["Postcode"].toString().indexOf(val) !== -1) {
				return true;
			}
			return false;
		})
		.slice(0, 4);

	var singleproductautocompletelist = "";

	var currentUrl = window.location.pathname;

	if (val) {
		searchResults.forEach(function (location) {
			let distance = "";
			if (location["Distance"] > 0 && location["Distance"] < 25) {
				distance = "0-25km";
			}
			if (location["Distance"] >= 25 && location["Distance"] < 50) {
				distance = "25-50km";
			}
			if (location["Distance"] >= 50 && location["Distance"] < 75) {
				distance = "50-75km";
			}
			if (location["Distance"] >= 75 && location["Distance"] < 100) {
				distance = "75-100km";
			}
			if (location["Distance"] >= 100) {
				distance = "100km+";
			}

			singleproductautocompletelist += "<li>";
			singleproductautocompletelist +=
				"<a href='" +
				currentUrl +
				"?attribute_depo=" +
				location["Depo"] +
				"&attribute_distance=" +
				distance +
				"'>";
			singleproductautocompletelist +=
				location["Suburb"] + " - " + location["Postcode"];
			singleproductautocompletelist += "</a>";
			singleproductautocompletelist += "</li>";
		});
		jQuery("#single-product-autocomplete-list").html(
			singleproductautocompletelist
		);
		jQuery("#single-product-autocomplete-input").addClass("active");
	} else {
		jQuery("#single-product-autocomplete-list").html("");
		jQuery("#single-product-autocomplete-input").removeClass("active");
	}
}

function headerProductKeyUp(obj) {
	var val = jQuery(obj).val();
	var searchResults = locations
		.filter(function (location) {
			if (location["Suburb"].toLowerCase().indexOf(val.toLowerCase()) !== -1) {
				return true;
			}
			if (location["Postcode"].toString().indexOf(val) !== -1) {
				return true;
			}
			return false;
		})
		.slice(0, 4);

	var singleproductautocompletelist = "";

	var currentUrl = window.location.pathname;

	if (val) {
		searchResults.forEach(function (location) {
			let distance = "";
			if (location["Distance"] > 0 && location["Distance"] < 25) {
				distance = "0-25km";
			}
			if (location["Distance"] >= 25 && location["Distance"] < 50) {
				distance = "25-50km";
			}
			if (location["Distance"] >= 50 && location["Distance"] < 75) {
				distance = "50-75km";
			}
			if (location["Distance"] >= 75 && location["Distance"] < 100) {
				distance = "75-100km";
			}
			if (location["Distance"] >= 100) {
				distance = "100km+";
			}

			singleproductautocompletelist += "<li>";
			singleproductautocompletelist +=
				"<a href='#' onClick='javascript:headerShortcodeProducts(this);' data-distance=" +
				distance +
				" data-depo=" +
				location["Depo"] +
				" data-suburb=" +
				location["Suburb"] +
				">";
			singleproductautocompletelist +=
				location["Suburb"] + " - " + location["Postcode"];
			singleproductautocompletelist += "</a>";
			singleproductautocompletelist += "</li>";
		});
		jQuery("#header-product-autocomplete-list").html(
			singleproductautocompletelist
		);
		jQuery("#header-product-autocomplete-input").addClass("active");
	} else {
		jQuery("#header-product-autocomplete-list").html("");
		jQuery("#header-product-autocomplete-input").removeClass("active");
		jQuery("#quick-select-bins").removeClass("active");
	}
}
function headerShortcodeProducts(obj) {
	jQuery("#header-product-autocomplete-list").html("");
	jQuery("#header-product-autocomplete-input").removeClass("active");
	jQuery("#quick-select-bins").addClass("active");

	var depo = jQuery(obj).data("depo");
	var distance = jQuery(obj).data("distance");
	var suburb = jQuery(obj).data("suburb");
	jQuery("#header-product-autocomplete-list").val(suburb);

	jQuery(".depo-price").each(function () {
		if (
			jQuery(this).data("depo") === depo &&
			jQuery(this).data("distance") === distance
		) {
			jQuery(this).addClass("active");

			var productid = jQuery(this).data("productid");

			jQuery(this)
				.parent()
				.parent()
				.attr(
					"href",
					"/?add-to-cart=" +
						productid +
						"&attribute_depo=" +
						depo +
						"&attribute_distance=" +
						distance
				);
		} else {
			jQuery(this).removeClass("active");
		}
	});
}
