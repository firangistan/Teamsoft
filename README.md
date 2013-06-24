<<<<<<< HEAD
<h1>Teamsoft team management software.</h1>


<h2>Requirements for Fahrenheit :</h2>

These are the basic requirements of the Fahrenheit application that needs to be done. It is still under heavy development.

NOTE : All of these should have a REST API as well so that the mobiles and other applications can connect to it.
<ul>
<li>This is the User module and this would be linked to everything else.</li>
<li>User registration</li>
<li>User activation using email</li>
<li>There should be a forgot password as well.   </li>
<li>The user should be able to edit his profile only and should also be able to add a profile picture and write his about me too.</li>
<li>Most importantly, there should be the 'slug' URL to have something like the url of www.example.com/username </li>
<li>The user should be able to put up his to do and submit it. ( Which would include a detailed report on the analysis as well)</li>
<li>User Status post and he should also be able to edit it and delete as well.</li>
<li>User Status comment and he should also be able to edit it and delete it as well.</li>
<li>User can add amount of money spent ( which would be approved by the moderator)</li>
<li>User can see the amount of money he has spent.</li>
<li>User can see the calendar and then plan his events accordingly.</li>
<li>User can see his to-do list that has been assigned to him and he can see the deadline and it would also tell him amount of time that is left to complete his work.</li>
<li>User can see the team and the overall graph using the graphs to see how much of the work has been completed.</li>
<li>User should have the option of adding complaints and user feedbacks.</li>
<li>The user should be able to message other users.</li>
<li>The user should be able to go to the resource page and add materials to read and which can be accessed by other users as well. This can be doc files and pdf, images etc.</li>
<li>User can see the overall gallery where all the images of the to do are done up.</li>
<li>Each time a user adds up a status/comment/to-do or if a new user is added., it should come up as notification to all the users and that they can see the events. </li>
<li>The user should be able to chat with the other users who are online. ( I can probably use comet chat for this purpose)</li>
<li>The user should be able to subscribe to RSS feeds as well which would give all the information of the events that are occurring such as new user entry and user status/comments and other issues as well.</li>
<li>There should be proper Captcha as well on the forms to prevent bots as well. ( However this is an optional thingy as the bots would not be able to enter a logged in user)</li>
<li>Finally the user should also be able to edit the blog and add his own thoughts to it.</li></ul>
----------------------------------

The To-Do module (This is the module that is controlled by the moderator only) : 

<ul><li>He should have all the facilities of the basic user functionality.</li>
<li>There should be an admin user who would assign moderators who would set up the to-do list and he would be the one who would be assigning members to his team.</li>
<li>The moderator should be able to assign a to-do to one or more of his teammates and then he can add a deadline to the to-do which has to be completed.</li>
<li>He should also be able to delete the money added by the users. Or he can delete them as well. ( However all the data shall be saved for later log. )</li>
<li>He should be able to see the complaints that has been put up. </li>
<li>He should be able to alter the dates of the to-do list.</li>
<li>He can also tag a user. A moderator has the authority to tag a user, not to ban him. The authority to ban a user only lies within the admin.</li>
<li>The moderator should also be able to remove the tag that may have been applied to a user.</li>
</ul>
-----------------------------------

If a user is Tagged then he has the following things that he should be able to do :

<ul><li>He would be shown the reason of the Tag and be told that he would have limited functionality.</li>
<li>He would also shown the to-do list and he can upload his to-do list task.</li>
<li>He would be shown a form where he can message the admin directly. </li>

<li>If however a user is Banned then he should be able to do only the following :</li>

<li>A message showing that the user is banned</li>
<li>A form where he can send a message directly to the admin. Only the admin can remove a ban on a user.</li></ul>


-------------------------------------

Admin module : 

It would have same functionality except for the fact that the admin would be the one who would accept the final user activation.
=======
# Bootstrap Image Gallery

## Demo
[Bootstrap Image Gallery Demo](http://blueimp.github.com/Bootstrap-Image-Gallery/)

## Description
Bootstrap Image Gallery is an extension to the [Modal](http://twitter.github.com/bootstrap/javascript.html#modal) dialog of Twitter's [Bootstrap](http://twitter.github.com/bootstrap/) toolkit, to ease navigation between a set of gallery images.  
It features mouse and keyboard navigation, transition effects, fullscreen mode and slideshow functionality.

## Usage

### Preparation
Add the following HTML snippet to the head section of your webpage:

```html
<link rel="stylesheet" href="http://blueimp.github.com/cdn/css/bootstrap.min.css">
<!--[if lt IE 7]><link rel="stylesheet" href="http://blueimp.github.com/cdn/css/bootstrap-ie6.min.css"><![endif]-->
<link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
```

Add the following HTML snippet to the body of your webpage:

```html
<!-- modal-gallery is the modal dialog used for the image gallery -->
<div id="modal-gallery" class="modal modal-gallery hide fade" tabindex="-1">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h3 class="modal-title"></h3>
    </div>
    <div class="modal-body"><div class="modal-image"></div></div>
    <div class="modal-footer">
        <a class="btn btn-primary modal-next">Next <i class="icon-arrow-right icon-white"></i></a>
        <a class="btn btn-info modal-prev"><i class="icon-arrow-left icon-white"></i> Previous</a>
        <a class="btn btn-success modal-play modal-slideshow" data-slideshow="5000"><i class="icon-play icon-white"></i> Slideshow</a>
        <a class="btn modal-download" target="_blank"><i class="icon-download"></i> Download</a>
    </div>
</div>
```

Include the following scripts:

```html
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://blueimp.github.com/cdn/js/bootstrap.min.js"></script>
<script src="http://blueimp.github.com/JavaScript-Load-Image/load-image.min.js"></script>
<script src="js/bootstrap-image-gallery.min.js"></script>
```

### Initialization
Initialize the Image Gallery widget by adding the following **data-attributes** to a container element containing a set of links to image files with the attribute **data-gallery="gallery"**:

```html
<div id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery">
    <a href="banana.jpg" title="Banana" data-gallery="gallery">Banana</a>
    <a href="apple.jpg" title="Apple" data-gallery="gallery">Apple</a>
    <a href="orange.jpg" title="Orange" data-gallery="gallery">Orange</a>
</div>
```

No additional JavaScript snippets are required. Note that you can also add links to the container element at a later stage.

It is also possible to use different elements than links for the gallery functionality, by storing the url to the images as **data-href** attribute and setting **data-selector** on the gallery container:

```html
<div id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery" data-selector="div.gallery-item">
    <div class="gallery-item" data-href="banana.jpg" title="Banana">Banana</div>
    <div class="gallery-item" data-href="apple.jpg" title="Apple">Apple</div>
    <div class="gallery-item" data-href="orange.jpg" title="Orange">Orange</div>
</div>
```

## API

### Options
The Image Gallery follows the guideline of the Bootstrap JavaScript collection. Options can be passed along as **data-attributes**, either set on the gallery container or on the modal dialog. The following example sets the slideshow timer to 5 seconds:

```html
<div id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery"
    data-slideshow="5000">
    ...
</div>
```

More Options are documented at the start of the Image Gallery source file.

### Events
In addition to the modal events provided by [Bootstrap Modal](http://twitter.github.com/bootstrap/javascript.html#modals), the Image Gallery provides four additional events:

* **beforeLoad**:  
Triggered when the next (or previous) image in the gallery is about to be loaded.
* **load**:  
Triggered when the next (or previous) image in the gallery has been loaded.
* **display**:  
Triggered when the next (or previous) image in the gallery is about to be displayed.
* **displayed**:  
Triggered when the next (or previous) image in the gallery has been displayed.

Inside of the event callbacks, it is possible to access the list of (filtered) element nodes, the current index and (except for the *beforeLoad* event) also the loaded image:

```js
$('#modal-gallery').on('load', function () {
    var modalData = $(this).data('modal');
    // modalData.$links is the list of (filtered) element nodes as jQuery object
    // modalData.img is the img (or canvas) element for the loaded image
    // modalData.options.index is the index of the current link
});
```

### Fullscreen mode
Fullscreen mode is enabled by adding the CSS class "modal-fullscreen" to the modal element:

```js
$('#modal-gallery').addClass('modal-fullscreen');
```

To automatically stretch images smaller then the window size, also add the class "modal-fullscreen-stretch":

```js
$('#modal-gallery').addClass('modal-fullscreen modal-fullscreen-stretch');
```

Please refer to the demo source code on how to enable real fullscreen mode on supported browsers.

### Deinitialize the click event listener
To deinitialize the Modal Gallery event listener, the following code snippet can be used:

```js
$(document.body).off('.modal-gallery.data-api')
```
Please also have a look at the [Bootstrap JS Guidelines](https://github.com/twitter/bootstrap/blob/master/js).

## Requirements
* [jQuery](http://jquery.com/) v. 1.7+
* [Bootstrap Modal](http://twitter.github.com/bootstrap/javascript.html#modal) v. 2.2.2+
* [JavaScript Load Image](https://github.com/blueimp/JavaScript-Load-Image) v. 1.2.3+

## License
Released under the [MIT license](http://www.opensource.org/licenses/MIT).
>>>>>>> f86e6ad113d7f7d6782e309e4d0f39787bba1ef6
