@props([
    'page_link' => '',
    'param' => 'start',
])
<link rel="stylesheet" href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css" />
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.14.0/jquery-ui.min.js"></script>
<script>
    $(function() {
        $("#datepicker")
            .datepicker({
                dateFormat: "yy-mm-dd",
                onSelect: function(dateText) {
                    $(this).change();
                },
            })
            .change(function() {
                var pageLink = "{{ $page_link }}";
                var paramKey = "{{ $param }}";
                var paramValue = this.value;

                // Default to current page URL if pageLink is empty or invalid
                var currentUrl = pageLink ? pageLink : window.location.href;

                // Ensure URL is absolute
                try {
                    // Create URL object
                    var url = new URL(currentUrl, window.location.origin);

                    // Set or update the query parameter
                    url.searchParams.set(paramKey, paramValue);

                    // Redirect to the updated URL
                    window.location.href = url.toString();
                } catch (e) {
                    console.error('Invalid URL:', e);
                    // window.location.href = this.value;
                }
            });
    });
</script>
<div class="inline-flex w-full justify-center mt-10">
    <div id="datepicker"></div>
</div>
