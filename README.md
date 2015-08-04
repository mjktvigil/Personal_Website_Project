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
