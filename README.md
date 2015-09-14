# Personal_Website_Project
Personal Website Project


##PWP M.S. 1 Feedback
Awesome Milestone 1 - everything is complete, and meets expectations. Great job. Nice use of CSS. Great start with your code, but there are a few errors and suggestions I've noted below. Nothing too major. You do not need to spend time to correct these, just take note. Your Milestone one passes at [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric/)

###Suggestions
* Create an /css directory at the root of your project, and place all css files here. 

###Corrections
1. Create a /documentation directory at the root of your project, and place all milestone files here, as per [PWP documentation](https://bootcamp-coders.cnm.edu/projects/personal/milestone-one/).
2. Rename index_summary.html to milestone-1.php
1. **.gitignore** - remove .html from file name
2. **index_summary.html**
  1. line 19: closing tag is empty.
  2. line 29: A &lt;main&gt; tag is more appropriate here, rather than a &lt;section&gt;. It also is missing a closing tag.

###Milestone 2 Feedback
Great job - your Milestone 2 passes at Tier III. Your Code is looking good - just a couple of notes below to keep in mind.

##Suggestions
- take a look at the [swipebox plugin]("http://brutaldesign.github.io/swipebox/"). This has worked well for student galleries in the past, and is mobile friendly.
- FontAwesome has some decent social media icons
- I'll be on the lookout for a decent calendar plugin.

##Corrections
Overall your code is looking good - you're on the right track. Here are some points to keep in mind, and some errors I saw.
- Keep an eye on maintaining proper indentation of your code for neatness and readability.
- The file "mile stone-1.html" needs to be renamed. Remove the space.
- There are 2 &lt;meta name="viewport" ... &gt; tags in your HTML &lt;head&gt;. Remove line 28.
- Javascript files can be placed at the end of an HTML document and this is perfectly valid and is often a matter of personal preference. On large and resource-heavy sites it can aid in faster load times. The primary reason I decided to include all libraries in the &lt;head&gt; tag in my template was for readability and organization. Since the scale of our sites is small, the load times shouldn't be an issue.
- Place the IE Conditional Comment in the &lt;head&gt; tag.
- jQuery and Bootstrap JavaScript have been loaded twice. Remove lines 259 and 260.
- Your custom JS (on line 261), should be placed after the Bootstrap JS on line 264.

###Milestone 3 Feedback
Awesome job on the wireframes. This layout should work really well using Bootstrap, but think of streamlining your galleries and features for the sake of MVP. Time is the largest constraint for this project. Your code is looking good. Deploy your PWP to your A Small Orange host. Your Milestone 3 passes at Tier IV.
 
##Suggestions
- Take a look at the [Swipebox](http://brutaldesign.github.io/swipebox) plugin for your gallery
- Familiarize yourself with [flexbox](https://css-tricks.com/snippets/css/a-guide-to-flexbox/), and learn the [Boostrap grid system](http://getbootstrap.com/css/#grid-example-basic) well.

###PWP Milestone 5/Final Feedback
Great job tidying things up. Things are looking a LOT better now, and a great foundation has been established on which you can move forward developing this project.

Your head-utils.php file looks great, and I'm no longer seeing any more errors in the devtools console.

Overall, beautiful work! Your PWP passes at Tier IV.

###Suggestions
Take a look at your require_once(); statements across the site: Don't use the "../" inside of a require_once(); but use dirname(\__DIR\__) instead. Remember that dirname(\__DIR\__) is akin to a "../". For example: require_once('../lib/head-utils.php'); should be re-written as require_once(dirname(\__DIR\__) . 'lib/head-utils.php');

Avoid using empty divs in your HTML for styling purposes. Although there are no outright errors here, best practices dictate that HTML be used only to markup actual page content, and that CSS be utilized for styling purposes. Using HTML to create styles such as border effects is considered hacky at best and should be avoided whenever possible. An alternate way to achieve the colored bars underneath your header and above your footer would be to place a border-bottom on your &lt;header&gt; and &lt;footer&gt; tags using CSS.

Great job getting Composer and Swiftmailer installed and running. Consider customizing your Swiftmailer code for your project. (See lines 26, 36-39, 64-66 in swiftmailer.php)

###In Conclusion
You've done a great job here, and you have an excellent start as a front-end developer. Continue practicing coding HTML and CSS as mastery comes from plenty of practice. Your next steps might be to deepen your knowledge of jQuery and JavaScript, and working with AJAX and HTML GET and POST requests for passing form data to and from the server-side. Perhaps try out the jQuery Validate library for form validation (it's pretty cool), and using qunit/funcunit for front-end testing. Also, if you like CSS, take a look at [SMACSS](https://smacss.com/) - it's a great way to begin learning industry practices regarding CSS organization and architecture.

Further on down the line, you may want to explore further use of Package/Dependency Managers such as Composer for php, Bower, and perhaps NPM (for node.js - if you'd like to explore JavaScript Development). Diving into LESS and/or SASS/Compass is a great next step for front-end as well, along with learning a front-end framework such as Angular.js or React.js. Best of luck!
