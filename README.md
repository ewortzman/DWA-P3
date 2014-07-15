#Content Generator

live hosted link: http://dwa-p3-ewortzman.herokuapp.com/

This application allows the user to generate content randomly.  Content that can be generated is either random text (Lorem Ipsum) or User Data.

##Lorem Ipsum

The Lorem Ipsum generator allows the user to generate random paragraphs of text.  The user selects ranges for the number of paragraphs to be generated and the number os sentences per paragraph.

####Intended features that were left unimplemented:

1. generate various styles of text
  * change languages
  * manipulate content
2. copy to clipboard button

##User Data

The User Data generator allows the user to generate random data relating to potential users of an application.  possible data includes
1. a username (required)
2. a name (title, first, last, or any combination)
3. an address (street address, city, state, zipcode, or any combination)
4. an email address
5. a phone number

####Intended features that were left unimplemented

1. export to CSV button
2. ensure real city/state/zip combination
3. allow international data
  * different address format
  * international phone numbers

###Other things

There were a few things that were deliberately left out.  For example, I would have preferred to load the results via AJAX, but in the interest of learning to use Laravel's route structure and a RESTful format, I chose to leave that out.  Rather than create a view for the form and a separate view to be returned by the AJAX request, I created only one view and conditionally display the information necessary.

There are also a couple of things that are somewhat hacked together.  For example, I was unable to get the checkboxes in user-generator to POST properly when non are checked, even though the username box is always checked by default.  to solve this, at the top of my route, I simply check if the options array exists and create an empty one if not.  The causes some code that I consider unnecessary but was unable to figure out how to remove.

###Included libraries
fzaninotto/faker:	https://packagist.org/packages/fzaninotto/faker
