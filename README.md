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

In the end of your code just before the closing ``</BODY>`` tag add [jquery-pagination.js](https://raw.githubusercontent.com/spandey2405/jquery-pagination/master/src/js/jquery-pagination.js) library and add code to devliver elements to pagination library. Make sure name of function should be get_data

```ruby
	....
	<script src="src/js/pagination-js.js"></script>
	<script>
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
	</script>
</body>
```
Declare Controller within the body and inside controller place the navigation tag. 
To navigation, just add a ``<UL>`` tag with id as ``pagination-js-navigation`` for the pagination library to access the content.
Add ng-repeat in the div or table-row ``<TR>`` to show content.

```ruby 
	...
	<div ng-app="app" ng-controller="ExampleController as vm">
	<ul class="pagination" id="pagination-js-navigation"></ul>
	<table>
		<tr ng-repeat="item in vm.items | 
    	orderBy:sortType:sortReverse" ng-show="([item] | 
    	filter:searchId).length > 0"> // could be <div> or <span> tag
    	
    	<td>{{ item.id }}</td> 
    	<td>{{ item.data }}</td>
    	
    	</tr>
    </table>
```


See [Demo](http://onlinecoder.in/jquery-pagination/demo/)
#### Enjoy!.

