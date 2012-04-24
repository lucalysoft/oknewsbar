jQuery(function($) {
	var url = "http://pipes.yahoo.com/pipes/pipe.run?_id=ENd84ISt3BGo_yx7JZhxuA&_render=json";

		$.getJSON(url, function(data) {
			$.each(data.items, function(i, item) {
				$("<p>").text(item.title).appendTo("#news");
				if (i == 5) return false;
			});

		});
});
