=================
Jquery Pagination
=================


When we have a large list of items, Displaying all items in one page is not a good option as it might take too long to load the content. In that case we can display them grouped in pages having navigation to move from one page to another. Jquery-Pagination creates these navigational elements easily.

#### Requirements:

1. Jquery (https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js). 
2. Underscore.js (https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js)
3. Angular.js Library (https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js).

#### Usage

Include jquery.js, underscore.js and angular.js library in ``<HEAD>`` section of your code. 

```ruby
<head>
    ....
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>
    ....
<head>
```

In the end of your code just before the closing ``</BODY>`` tag add pagination.js library and add code to devliver elements to pagination library. Make sure name of function should be get_data

```ruby
	....
	<script src="src/js/pagination-js.js"></script>
	function get_data(page_no) {
	var payload = [];
	$.ajax({
	    url: "demoserver.php?page=" + page_no,
	    type: 'GET',
	    success: function(data) {
		data = JSON.parse(data);
		totalItems = data['count'];
		items = data['results'];
	    },
	    async:false
	});
	return items;
	}
</body>
```

Add ng-repeat in the div or table-row ``<TR>`` to show content.

```ruby
	<tr ng-repeat="item in vm.items | orderBy:sortType:sortReverse" ng-show="([item] | filter:searchId).length > 0">
	<td>{{ item.id }}</td> //
	<td>{{ item.data }}</td>
	</tr>
```

#### Enjoy!.

