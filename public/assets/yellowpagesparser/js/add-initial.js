$(document).ready(function () {

    var id = "#add-initial"
    var count = 1;

    var _ajax = function(url, data) {
        $.ajax({
            method: "POST",
            url: url,
            headers: {
                'X-CSRF-TOKEN': this._token()
            },
            data: {
                data: data
            },
            dataType: 'json',
            cache: false,
            success: function(value) {
                return value;
            },
            error: function(xhr, status, err) {
            }
        });
    };

    var _token = function() {
        return $('meta[name="_token"]').attr('content');
    }

    var changeText = function(id, newText) {
        $(id).text(newText);
    };

    var getBusinessPages = function() {
        changeText(id, 'Business Pages...');
    };

    var getSearchPage = function() {
        changeText(id, 'Search Page...');
    };

    var getLocation = function() {
        changeText(id, 'Location...');
    };

    $(id).on("click", function () {
        for (i = 0; i < count; i++) {
            // Get the location
            var location = getLocation();

            // Parse the search page
            var searchPage = getSearchPage();

            // Parse the individual business pages
            var businessPages = getBusinessPages();
        }
    });
});
